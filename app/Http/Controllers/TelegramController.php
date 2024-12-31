<?php

namespace App\Http\Controllers;

use App\Models\Transfertransaction;
use App\Models\Webhook;
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


        if (stripos($message, 'hello') !== false) {
            $replyText = "Hello! $username, welcome to Sprintpay Resolve Bot 😊\n\n" .
                "To resolve your transaction  | Reply with 'Bank - Session ID or Account No'\n\n" .
                "Ex: 9psb - 00993987446365453636364743\n\n".
                "Wema - 99337747474";

        } elseif (stripos($message, 'help') !== false) {
            $replyText = "You can ask me anything!";


        } elseif (stripos($message, 'hi') !== false) {
            $replyText = "Hello! $username, welcome to Sprintpay Resolve Bot 😊\n\n" .
                "To resolve your transaction  | Reply with 'Bank - Session ID or Account No'\n\n" .
                "Ex: 9psb - 00993987446365453636364743\n\n".
                "Wema - 99337747474";


        } else {
            $replyText = "I'm not sure how to respond to that.";
        }


        if (stripos($message, 'wemamore') !== false) {
            $title = trim(substr(strstr($message, '-'), 1));
            $trx = Transfertransaction::where('account_no', $title)->first() ?? null;

            $pref = $trx->ref;
            $amount = $trx->amount;
            $verify = verifypelpay($pref, $amount);
            if ($verify['code'] == 0) {

                $email = $trx->email;
                $date = $trx->created_at;
                $sitename = Webkey::where('key', $trx->key)->first()->site_name ?? null;
                $amount = number_format($trx->amount);

                $replyText = "Account No:- $title | is still pending 🥺 \n\n" .
                    "We are sorry for any inconveniences!,\n" . "This transaction is still pending from the bank | $email | on | $date | website:- $sitename | Amount:- $amount \n\n" .
                    "I will keep notifying the bank about the transaction but if you can wait, you can file a dispute from your bank app";

            }

            elseif ($verify['code'] == 9) {
                $email = $trx->email;
                $date = $trx->created_at;
                $sitename = Webkey::where('key', $trx->key)->first()->site_name ?? null;
                $amount = number_format($trx->amount);

                $replyText = "Account No:- $title | Transaction Failed ❌ \n\n" .
                    "This transaction failed on our end.\n\n".
                    "Transaction Details:- | Email:- $email | Date and time:- $date | Website:- $sitename | Amount:- $amount \n\n" .
                    "If you have been debited, Please raise a dispute for reversal on your bank app.";


            } elseif ($verify['code'] == 4) {
                $email = $trx->email;
                $date = $trx->created_at;
                $sitename = Webkey::where('key', $trx->key)->first()->site_name ?? null;
                $amount = number_format($trx->amount);


                $replyText = "Account No:- $title  | Transaction already been funded ✅ \n\n" .
                    "This transaction has already been funded to | $email | on | $date | website:- $sitename | Amount:- $amount";


            } elseif ($verify['code'] == 5) {
                $email = $trx->email;
                $date = $trx->created_at;
                $sitename = Webkey::where('key', $trx->key)->first()->site_name ?? null;
                $amount = number_format($trx->amount);

                $replyText = "Account No:- $title  | partial payment 🥺 \n\n" .
                    "You paid incomplete amount\n" . "  Transaction Details - | $email | on | $date | website:- $sitename | Amount:- $amount \n\n" .
                    "The money will be sent back to your bank account within 48hrs, if no transaction after 48hrs, please raise a dispute on your bank app";

            } else {

                $email = $trx->email;
                $date = $trx->created_at;
                $sitename = Webkey::where('key', $trx->key)->first()->site_name ?? null;
                $amount = number_format($trx->amount);

                $replyText = "Session ID  | $title | Reslove Error 🥺 \n\n" .
                    "We could not verify this transaction this time,  contact support";


            }


        } elseif (stripos($message, '9psb') !== false) {

            $title = trim(substr(strstr($message, '-'), 1));

            $trx = Transfertransaction::where('session_id', $title)->first() ?? null;
            if ($trx == null) {
                $replyText = "Session ID | $title | not found ❌ \n" .
                    "Please kindly check the session ID you entered and try again";

            } else {

                if ($trx->status == 4) {
                    $email = $trx->email;
                    $date = $trx->created_at;
                    $sitename = Webkey::where('key', $trx->key)->first()->site_name ?? null;
                    $amount = number_format($trx->amount);

                    $replyText = "Session ID  | $title | has already been funded 🥺 \n\n" .
                        "This transaction has already been funded to | $email | on | $date | website:- $sitename | Amount:- $amount";

                } elseif ($trx->status == 0) {
                    $replyText = "Session ID found | $title | ✅ \n" .
                        $tran = json_encode($trx);
                    "Here is the transaction  | $tran";
                } else {

                    $replyText = "Session ID found | $title | ✅ \n" .
                        $tran = json_encode($trx);
                    "Here is the transaction  | $tran";

                }


            }


        } elseif (stripos($message, 'wema') !== false) {

            $title = trim(substr(strstr($message, '-'), 1));
            $trx = Transfertransaction::where('account_no', $title)->first() ?? null;
            if ($trx == null) {

                $replyText = "Account No :- $title | not found ❌ \n" .
                    "We could not find this transaction on our database";

            } else {

                if ($trx->status == 4) {
                    $email = $trx->email;
                    $date = $trx->created_at;
                    $sitename = Webkey::where('key', $trx->key)->first()->site_name ?? null;
                    $amount = number_format($trx->amount);

                    $replyText = "Account No:- $title  | has already been funded 🥺 \n\n" .
                        "This transaction has already been funded to | Email-: $email | Date/Time:- $date | Website:- $sitename | Amount:- $amount";

                } elseif ($trx->status != 4) {

                    $p_ref = $trx->ref;
                    $pref = $trx->ref;
                    $amount = $trx->amount;
                    $verify = verifypelpaytelegram($pref, $amount);


                    $message = json_encode($verify);

                    $replyText = $message;

                    if ($verify == 0) {
                        $email = $trx->email;
                        $date = $trx->created_at;
                        $sitename = Webkey::where('key', $trx->key)->first()->site_name ?? null;
                        $amount = number_format($trx->amount);

                        $replyText = "Account No:- $title | is still pending 🥺 \n\n" .
                            "We are sorry for any inconveniences!,\n" . "This transaction is still pending from the bank | $email | on | $date | website:- $sitename | Amount:- $amount \n\n" .
                            "I will keep notifying the bank about the transaction but if you can wait, you can file a dispute from your bank app";

                    }

                    elseif ($verify  == 9) {
                        $email = $trx->email;
                        $date = $trx->created_at;
                        $sitename = Webkey::where('key', $trx->key)->first()->site_name ?? null;
                        $amount = number_format($trx->amount);

                        $replyText = "Account No:- $title | Transaction Failed ❌ \n\n" .
                            "This transaction failed on our end.\n\n".
                            "Transaction Details:- | Email:- $email | Date and time:- $date | Website:- $sitename | Amount:- $amount \n\n" .
                            "If you have been debited, Please raise a dispute for reversal on your bank app.";


                    } elseif ($verify  == 4) {
                        $email = $trx->email;
                        $date = $trx->created_at;
                        $sitename = Webkey::where('key', $trx->key)->first()->site_name ?? null;
                        $amount = number_format($trx->amount);


                        $replyText = "Account No:- $title  | Transaction already been funded ✅ \n\n" .
                            "This transaction has already been funded to | $email | on | $date | website:- $sitename | Amount:- $amount";


                    } elseif ($verify == 5) {
                        $email = $trx->email;
                        $date = $trx->created_at;
                        $sitename = Webkey::where('key', $trx->key)->first()->site_name ?? null;
                        $amount = number_format($trx->amount);

                        $replyText = "Account No:- $title  | partial payment 🥺 \n\n" .
                            "You paid incomplete amount\n" . "  Transaction Details - | $email | on | $date | website:- $sitename | Amount:- $amount \n\n" .
                            "The money will be sent back to your bank account within 48hrs, if no transaction after 48hrs, please raise a dispute on your bank app";

                    } else {

                        $email = $trx->email;
                        $date = $trx->created_at;
                        $sitename = Webkey::where('key', $trx->key)->first()->site_name ?? null;
                        $amount = number_format($trx->amount);

                        $replyText = "Session ID  | $title | Reslove Error 🥺 \n\n" .
                            "We could not verify this transaction this time,  contact support";


                    }


                } else {

                    $replyText = "Session ID found | $title | ✅ \n" .
                        $tran = json_encode($trx);
                    "Here is the transaction  | $tran";

                }


            }


        } elseif (stripos($message, 'title') !== false) {

            $title = trim(substr(strstr($message, '-'), 1));
            $sitename = Webkey::where('merchant_code', $title)->first()->site_name ?? null;

            if ($sitename != null) {
                $replyText = "$title | Merchant code valid 😊\n" .
                    "Site name.: $sitename";
            } else {

                $replyText = "Merchant code invalid ❌ \n" .
                    "Please check the merchant code and try again | $title";
            }


        } elseif (stripos($message, 'amount') !== false) {


            $pattern = "/(Amount|Merchant Code|Email)\s*-\s*(.+)/";
            $extractedData = [];
            if (preg_match_all($pattern, $message, $matches, PREG_SET_ORDER)) {
                foreach ($matches as $match) {
                    $key = trim($match[1]); // Key (e.g., Amount, Merchant Code)
                    $value = trim($match[2]); // Value (e.g., 2000, 123456)
                    $extractedData[$key] = $value;
                }
            }


            $mcode = $extractedData['Merchant Code'];
            $amount = (int)$extractedData['Amount'] + 100;
            $ck_code = Webkey::where('merchant_code', $mcode)->first()->site_name ?? null;
            $email = $extractedData['Email'];
            $url = Webkey::where('merchant_code', $mcode)->first()->verify_url ?? null;
            $ck_account = checkuser_name($email, $url);


            if ($ck_code == null) {
                $replyText = "Merchant code invalid ❌ \n" .
                    "Please check the merchant code and try again | $mcode";
            } elseif ($ck_account == 0) {
                $replyText = "$email | Account not found on  | $ck_code ❌ \n" .
                    "Please check the email or merchant code and try again | $mcode";
            } else {


                $replyText = "Account found on | $ck_code | ✅ \n\n" .
                    "username         |  $ck_account\n" .
                    "Amount to fund   |  $amount\n" .
                    "Bank Account   |  Account\n";
            }


//            $resultString = "";
//            foreach ($extractedData as $key => $value) {
//                $resultString .= "$key: $value\n";
//            }
//
//            $replyText = "result.: $resultString".$mcode.$ck_code;
//

        } elseif (stripos($message, 'MCODE') !== false) {

            $replyText = "To get your site merchant code please rely with the website title:\n\n" .
                "title   -  ex: storemarket\n";

        } elseif (stripos($message, 'id') !== false) {

            $replyText = "To get your site merchant code please rely with the website title:\n\n" .
                "title   -  ex: storemarket\n";

        } else {
            $replyText = "Hello! $username, welcome to Sprintpay Resolve Bot 😊\n\n" .
                "To resolve your transaction  | Reply with 'Bank - Session ID or Account No'\n\n" .
                "Ex: 9psb - 00993987446365453636364743\n\n".
                "Wema - 99337747474";

        }


        $this->telegram->sendMessage($chatId, $replyText);
    }
}
