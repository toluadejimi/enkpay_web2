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
        $message = "Telegrambot ========>".  json_encode($request->all());
        send_notification($message);

        // Check if the update contains a message
        if (isset($update['message'])) {
            $chatId = $update['message']['chat']['id'] ?? null;
            $message = $update['message']['text'] ?? null;
            $username = $update['message']['from']['username'] ?? null;
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
                . "To resolve your transaction | Reply with Account No'\n\n"
                . "Ex: 99337747474\n\n"

                . "WATCH HOW TO USE SPRINT PAY BOT: https://vimeo.com/1052607175/f5acd51a63\n\n"



            ;

        } elseif (stripos($message, 'help') !== false) {
            $replyText = "You can ask me anything!";
        } elseif (stripos($message, 'wema') !== false) {
            $title = trim(substr(strstr($message, '-'), 1));
            $trx = Transfertransaction::where('account_no', $title)->first() ?? null;
            if ($trx) {
                $pref = $trx->ref;
                $amount = number_format($trx->amount);
                $email = $trx->email;
                $date = $trx->created_at;
                $sitename = Webkey::where('key', $trx->key)->first()->site_name ?? null;
                $verify = verifypelpaytelegram($pref);

               $cc = json_encode($verify);
//               send_notification($cc);

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

                        case 2:
                            $replyText = "Account No: $title | Transaction Completed ✅\n\n"
                                . "Transaction Details:\n"
                                . "Email: $email\n"
                                . "Date/Time: $date\n"
                                . "Website: $sitename\n"
                                . "Amount: $amount";
                            break;

                            default:
                            $replyText = "Account No: $title | processing resolve 🔄\n\n"
                                . "Transaction Details:\n"
                                . "Email: $email\n"
                                . "Date/Time: $date\n"
                                . "Website: $sitename\n"
                                ."code:$cc";
                            break;
                    }
                }
            }
            else {
                $replyText = "Account no: $title | not found ❌\n"
                    . "Please verify the Account No and try again.";
            }

        }

        elseif (strlen($message) >= 10 && stripos($message, '961') === 0) {
            $title = $message;
            $trx = Transfertransaction::where('account_no', $title)->first() ?? null;
            if ($trx) {
                $pref = $trx->ref;
                $amount = number_format($trx->amount);
                $email = $trx->email;
                $date = $trx->created_at;
                $sitename = Webkey::where('key', $trx->key)->first()->site_name ?? null;


                $verify = verifypelpaytelegram($pref);

                $cc = json_encode($verify);
//               send_notification($cc);

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

                        case 2:
                            $replyText = "Account No: $title | Transaction Completed ✅\n\n"
                                . "Transaction Details:\n"
                                . "Email: $email\n"
                                . "Date/Time: $date\n"
                                . "Website: $sitename\n"
                                . "Amount: $amount";
                            break;

                        default:
                            $replyText = "Account No: $title | processing resolve 🔄\n\n"
                                . "Transaction Details:\n"
                                . "Email: $email\n"
                                . "Date/Time: $date\n"
                                . "Website: $sitename\n"
                                ."code:$cc";
                            break;
                    }
                }
            }
            else {
                $replyText = "Account no: $title | not found ❌\n"
                    . "Please verify the Account No and try again.";
            }

        }


        elseif (strlen($message) >= 10 && stripos($message, '603') === 0) {
            $title = $message;
            $trx = Transfertransaction::where('account_no', $title)->first() ?? null;
            if ($trx) {
                $pref = $trx->ref;
                $amount = number_format($trx->amount);
                $email = $trx->email;
                $date = $trx->created_at;
                $sitename = Webkey::where('key', $trx->key)->first()->site_name ?? null;

                $verify = verify_telegram_payment_woven($title);
                $cc = json_encode($verify);

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
                                ."If you have been debited, Please contact your bank for reversal";
                            break;

                        case 6:
                            $replyText = "Account No: $title | Transaction reversed 🔄\n\n"
                                . "Transaction Details:\n"
                                . "Email: $email\n"
                                . "Date/Time: $date\n"
                                . "Website: $sitename\n"
                                . "Amount: $amount\n\n"
                                ."Transaction has been successfully reversed back to your account";
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

                        case 2:
                            $replyText = "Account No: $title | Transaction Completed ✅\n\n"
                                . "Transaction Details:\n"
                                . "Email: $email\n"
                                . "Date/Time: $date\n"
                                . "Website: $sitename\n"
                                . "Amount: $amount";
                            break;

                        default:
                            $replyText = "Account No: $title | processing resolve 🔄\n\n"
                                . "Transaction Details:\n"
                                . "Email: $email\n"
                                . "Date/Time: $date\n"
                                . "Website: $sitename\n"
                                ."code:$cc";
                            break;
                    }
                }
            }
            else {
                $replyText = "Account no: $title | not found ❌\n"
                    . "Please verify the Account No and try again.";
            }

        }
        elseif (strlen($message) >= 10 && stripos($message, '500') === 0) {
            $title = $message;
            $trx = Transfertransaction::where('account_no', $title)->first() ?? null;
            if ($trx) {
                $pref = $trx->ref;
                $amount = number_format($trx->amount);
                $email = $trx->email;
                $date = $trx->created_at;
                $sitename = Webkey::where('key', $trx->key)->first()->site_name ?? null;

                $verify = verify_telegram_payment_woven($title);
                $cc = json_encode($verify);

                if (!is_array($verify)) {

                    $replyText = $cc. "Error: Unexpected response format.";

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
                                ."If you have been debited, Please contact your bank for reversal";
                            break;

                        case 6:
                            $replyText = "Account No: $title | Transaction reversed 🔄\n\n"
                                . "Transaction Details:\n"
                                . "Email: $email\n"
                                . "Date/Time: $date\n"
                                . "Website: $sitename\n"
                                . "Amount: $amount\n\n"
                                ."Transaction has been successfully reversed back to your account";
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

                        case 2:
                            $replyText = "Account No: $title | Transaction Completed ✅\n\n"
                                . "Transaction Details:\n"
                                . "Email: $email\n"
                                . "Date/Time: $date\n"
                                . "Website: $sitename\n"
                                . "Amount: $amount";
                            break;

                        default:
                            $replyText = "Account No: $title | processing resolve 🔄\n\n"
                                . "Transaction Details:\n"
                                . "Email: $email\n"
                                . "Date/Time: $date\n"
                                . "Website: $sitename\n"
                                ."code:$cc";
                            break;
                    }
                }
            }
            else {
                $replyText = "Account no: $title | not found ❌\n"
                    . "Please verify the Account No and try again.";
            }

        }


        elseif (strlen($message) >= 10 && stripos($message, '558') === 0) {
            $title = $message;
            $trx = Transfertransaction::where('account_no', $title)->first() ?? null;
            if ($trx) {
                $pref = $trx->account_no;
                $amount = number_format($trx->amount);
                $email = $trx->email;
                $date = $trx->created_at;
                $sitename = Webkey::where('key', $trx->key)->first()->site_name ?? null;


                $verify = verifypsbtelegram($pref);

                $cc = json_encode($verify);
//               send_notification($cc);

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

                        case 2:
                            $replyText = "Account No: $title | Transaction Completed ✅\n\n"
                                . "Transaction Details:\n"
                                . "Email: $email\n"
                                . "Date/Time: $date\n"
                                . "Website: $sitename\n"
                                . "Amount: $amount";
                            break;

                        default:
                            $replyText = "Account No: $title | processing resolve 🔄\n\n"
                                . "Transaction Details:\n"
                                . "Email: $email\n"
                                . "Date/Time: $date\n"
                                . "Website: $sitename\n"
                                ."code:$cc";
                            break;
                    }
                }
            }
            else {
                $replyText = "Account no: $title | not found ❌\n"
                    . "Please verify the Account No and try again.";
            }

        }

        else {
            $title = trim(substr(strstr($message, '-'), 1));

            $replyText = "Account No: $title | not found ❌\n"
                    . "We could not find this transaction in our database.";
            }

        $this->telegram->sendMessage($chatId, $replyText);
    }

}
