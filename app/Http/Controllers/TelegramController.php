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

        if (stripos($message, 'hello') !== false || stripos($message, 'hi') !== false) {
            $replyText = "Hello! $username, welcome to Sprintpay Resolve Bot 😊\n\n"
                . "To resolve your transaction | Reply with 'Bank - Session ID or Account No'\n\n"
                . "Ex: 9psb - 00993987446365453636364743\n\n"
                . "Wema - 99337747474";
        } elseif (stripos($message, 'help') !== false) {
            $replyText = "You can ask me anything!";
        } elseif (stripos($message, 'wema') !== false) {
            $title = trim(substr(strstr($message, '-'), 1));
            $trx = Transfertransaction::where('account_no', $title)->first();

            if ($trx) {
                $pref = $trx->ref;
                $amount = $trx->amount;
                $verify = $this->verifypelpay($pref, $amount);

                switch ($verify['code']) {
                    case 0:
                        $replyText = "Account No: $title | still pending 🥺\n";
                        break;
                    case 9:
                        $replyText = "Account No: $title | Failed ❌\n";
                        break;
                    case 4:
                        $replyText = "Account No: $title | already been funded ✅\n";
                        break;
                    case 5:
                        $replyText = "Account No: $title | partial payment 🥺\n";
                        break;
                    default:
                        $replyText = "Account No: $title | Resolve Error 🥺\n"
                            . "We could not verify this transaction this time. Please contact support.";
                }
            } else {
                $replyText = "Account No: $title | not found ❌\n"
                    . "Please verify the account number and try again.";
            }
        } elseif (stripos($message, '9psb') !== false) {
            $title = trim(substr(strstr($message, '-'), 1));
            $trx = Transfertransaction::where('session_id', $title)->first();

            if ($trx) {
                $status = $trx->status;

                if ($status == 4) {
                    $replyText = "Session ID: $title | has already been funded 🥺\n";
                } else {
                    $replyText = "Session ID found | $title | ✅\n" . json_encode($trx);
                }
            } else {
                $replyText = "Session ID: $title | not found ❌\n"
                    . "Please verify the session ID and try again.";
            }
        } elseif (stripos($message, 'wema') !== false) {
            $title = trim(substr(strstr($message, '-'), 1));
            $trx = Transfertransaction::where('account_no', $title)->first();

            if ($trx) {
                if ($trx->status == 4) {
                    $replyText = "Account No: $title | has already been funded 🥺\n";
                } else {
                    $email = $trx->email;
                    $date = $trx->created_at;
                    $sitename = Webkey::where('key', $trx->key)->first()->site_name ?? 'Unknown';
                    $amount = number_format($trx->amount);

                    $replyText = "Account No: $title | ✅\n\n"
                        . "Transaction Details:\n"
                        . "Email: $email\n"
                        . "Date: $date\n"
                        . "Website: $sitename\n"
                        . "Amount: $amount";
                }
            } else {
                $replyText = "Account No: $title | not found ❌\n"
                    . "We could not find this transaction in our database.";
            }
        }

        $this->sendMessage($chatId, $replyText);
    }
}

