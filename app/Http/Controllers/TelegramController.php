<?php

namespace App\Http\Controllers;

use App\Models\Transfertransaction;
use App\Models\Webkey;
use App\Services\TelegramService;
use Illuminate\Http\Request;

class TelegramController extends Controller
{
    protected $telegram;

    public function __construct(TelegramService $telegram)
    {
        $this->telegram = $telegram;
    }

    public function webhook(Request $request)
    {
        // Get the incoming update
        $update = $request->all();
        $message = json_encode($request->all());

        send_notification($message);

        // Check if the update contains a message
        if (isset($update['message'])) {
            $chatId = $update['message']['chat']['id'];
            $message = $update['message']['text'];
            $username = $update['message']['from']['username'];


            // Auto-reply logic
            $this->autoReply($chatId, $message, $username);
        }

        return response()->json(['status' => 'success']);
    }


    protected function autoReply($chatId, $message, $username)
    {
        $replyText = "I'm not sure how to respond to that.";

        // Determine initial response based on keywords
        if (stripos($message, 'hello') !== false || stripos($message, 'hi') !== false) {
            $replyText = "Hello! $username, welcome to Sprintpay Resolve Bot 😊\n\n" .
                "To resolve your transaction | Reply with 'Bank - Session ID or Account No'\n\n" .
                "Ex: 9psb - 00993987446365453636364743\n\n" .
                "Wema - 99337747474";
        } elseif (stripos($message, 'help') !== false) {
            $replyText = "You can ask me anything!";
        }


        if (stripos($message, 'wemamore') !== false) {
            $replyText = $this->handleWemaMoreRequest($message);
        } elseif (stripos($message, '9psb') !== false) {
            $replyText = $this->handle9psbRequest($message);
        } elseif (stripos($message, 'wema') !== false) {
            $replyText = $this->handleWemaRequest($message);
        }

        // Send the reply
        $this->sendMessage($chatId, $replyText);
    }

    private function handleWemaMoreRequest($message)
    {
        $title = trim(substr(strstr($message, '-'), 1));
        $trx = Transfertransaction::where('account_no', $title)->first();

        if (!$trx) {
            return "Account No: $title | not found ❌\nPlease verify the account number and try again.";
        }

        $pref = $trx->ref;
        $amount = $trx->amount;
        $verify = $this->verifypelpay($pref, $amount);

        switch ($verify['code']) {
            case 0:
                return $this->formatTransactionResponse("still pending 🥺", $trx);
            case 9:
                return $this->formatTransactionResponse("Failed ❌", $trx);
            case 4:
                return $this->formatTransactionResponse("already been funded ✅", $trx);
            case 5:
                return $this->formatTransactionResponse("partial payment 🥺", $trx);
            default:
                return "Session ID | $title | Resolve Error 🥺\nWe could not verify this transaction this time. Please contact support.";
        }
    }

    private function handle9psbRequest($message)
    {
        $title = trim(substr(strstr($message, '-'), 1));
        $trx = Transfertransaction::where('session_id', $title)->first();

        if (!$trx) {
            return "Session ID: $title | not found ❌\nPlease verify the session ID and try again.";
        }

        return $trx->status == 4
            ? $this->formatTransactionResponse("has already been funded 🥺", $trx)
            : "Session ID found | $title | ✅\n" . json_encode($trx);
    }

    private function handleWemaRequest($message)
    {
        $title = trim(substr(strstr($message, '-'), 1));
        $trx = Transfertransaction::where('account_no', $title)->first();

        if (!$trx) {
            return "Account No: $title | not found ❌\nWe could not find this transaction in our database.";
        }

        if ($trx->status == 4) {
            return $this->formatTransactionResponse("has already been funded 🥺", $trx);
        }

        // Handle other Wema-specific status checks
        return "Processing other statuses for Account No: $title...";
    }

    private function formatTransactionResponse($statusMessage, $trx)
    {
        $email = $trx->email;
        $date = $trx->created_at;
        $sitename = Webkey::where('key', $trx->key)->first()->site_name ?? 'Unknown';
        $amount = number_format($trx->amount);

        return "Account No: {$trx->account_no} | $statusMessage\n\n" .
            "Transaction Details:\nEmail: $email\nDate: $date\nWebsite: $sitename\nAmount: $amount";
    }

    private function sendMessage($chatId, $message)
    {
        // Implement your message sending logic here
        // Example: Telegram API or other messaging platform
    }

}
