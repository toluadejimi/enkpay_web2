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
                $amount = number_format($trx->amount);
                $email = $trx->email;
                $date = $trx->created_at;
                $sitename = Webkey::where('key', $trx->key)->first()->site_name ?? null;


                $verify = verifypelpaytelegram($pref);

               $cc = json_encode($verify);
               send_notification($cc);

                if (!is_array($verify)) {
                    $replyText = "Error: Unexpected response format.";

                } else {
                    switch ($verify['code']) {
                        case 0:
                            $replyText = "Account No: $title | still pending 🥺\n\n" .
                                "We are sorry for any inconveniences!,\n\n"
                                . "Transaction Details:\n"
                                . "Email: $email\n"
                                . "Date/Time: $date\n"
                                . "Website: $sitename\n"
                                . "Amount: $amount\n\n" .

                                "I will keep notifying the bank about the transaction but if you can wait, you can file a dispute from your bank app";
                            break;
                        case 9:
                            $replyText = "Account No: $title | Failed ❌\n\n"
                                . "Transaction Details:\n"
                                . "Email: $email\n"
                                . "Date/Time: $date\n"
                                . "Website: $sitename\n"
                                . "Amount: $amount\n\n"
                                ."If you have been debited, Please raise a dispute for reversal on your bank app";
                            break;
                        case 4:
                            $replyText = "Account No: $title | already been funded ✅\n\n"
                                . "Transaction Details:\n"
                                . "Email: $email\n"
                                . "Date/Time: $date\n"
                                . "Website: $sitename\n"
                                . "Amount: $amount";
                            break;
                        case 5:
                            $replyText = "Account No: $title | part payment received. 🔄\n";
                            break;


                            default:
                            $replyText = "Account No: $title | Transaction successful ✅\n\n"
                                . "Transaction Details:\n"
                                . "Email: $email\n"
                                . "Date/Time: $date\n"
                                . "Website: $sitename\n"
                                ."code:$cc"
                                . "Amount: $amount";
                            break;
                    }
                }
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

        $this->telegram->sendMessage($chatId, $replyText);
    }

}
