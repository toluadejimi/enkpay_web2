<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Transaction;
use App\Models\Transactioncheck;
use App\Models\Transfertransaction;
use App\Models\User;
use App\Models\Webhook;
use App\Models\Webkey;
use App\Models\Webtransfer;
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
                    $pref = $trx->ref;
                    $token = tokenkey();
                    $url = env('PELPAYURL');
                    $curl = curl_init();
                    $url2 = "$url/api/Transaction/bypaymentreference/$pref";
                    curl_setopt_array($curl, array(
                        CURLOPT_URL => $url2,
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_ENCODING => '',
                        CURLOPT_MAXREDIRS => 10,
                        CURLOPT_TIMEOUT => 0,
                        CURLOPT_FOLLOWLOCATION => true,
                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                        CURLOPT_CUSTOMREQUEST => 'GET',
                        CURLOPT_HTTPHEADER => array(
                            'Content-Type: application/json',
                            "Authorization: Bearer $token"
                        ),
                    ));

                    $var = curl_exec($curl);
                    curl_close($curl);
                    $var = json_decode($var);
                    $status = $var->requestSuccessful  ?? null;


                    if($status == true){

                        if ($var->responseData->transactionStatus == "Processing") {
                            $email = $trx->email;
                            $date = $trx->created_at;
                            $sitename = Webkey::where('key', $trx->key)->first()->site_name ?? null;
                            $amount = number_format($trx->amount);

                            $replyText = "Account No:- $title | is still pending 🥺 \n\n" .
                                "We are sorry for any inconveniences!,\n" . "This transaction is still pending from the bank | $email | on | $date | website:- $sitename | Amount:- $amount \n\n" .
                                "I will keep notifying the bank about the transaction but if you can wait, you can file a dispute from your bank app";
                        } elseif ($var->responseData->transactionStatus == "Failed") {

                            $email = $trx->email;
                            $date = $trx->created_at;
                            $sitename = Webkey::where('key', $trx->key)->first()->site_name ?? null;
                            $amount = number_format($trx->amount);

                            $replyText = "Account No:- $title | Transaction Failed ❌ \n\n" .
                                "This transaction failed on our end.\n\n".
                                "Transaction Details:- | Email:- $email | Date and time:- $date | Website:- $sitename | Amount:- $amount \n\n" .
                                "If you have been debited, Please raise a dispute for reversal on your bank app.";


                        }elseif ($var->responseData->transactionStatus == "Successful" && $var->responseData->message == "Successful") {

                            try {

                                $acc_no = Transfertransaction::where('ref', $pref)->first()->account_no ?? null;
                                $status = Transfertransaction::where('account_no', $acc_no)->first()->status ?? null;
                                $trx = Transfertransaction::where('account_no', $acc_no)->first() ?? null;
                                $amount = Transfertransaction::where('account_no', $acc_no)->first()->amount ?? null;
                                $pstatus = Transfertransaction::where('ref', $pref)->first()->status ?? null;


                                if ($pstatus == 4) {
                                    return 4;
                                }


                                if ($status == 4) {

                                    $ref=$trx->ref_trans_id;
                                    $url = url('')."/success?trans_id=$ref&amount=$amount";
                                    return 4;


                                }



                                $paid_amt = Transfertransaction::where('account_no', $acc_no)->update(['amount_paid' => $amount]) ?? null;
                                Transfertransaction::where('account_no', $acc_no)->increment('amount_paid', $amount);
                                $trx = Transfertransaction::where('account_no', $acc_no)->first() ?? null;

                                $main_amount = $var->responseData->amountCollected;
                                if ($trx != null) {

                                    $set = Setting::where('id', 1)->first();
                                    if ($amount > 15000) {
                                        $p_amount = $main_amount - $set->psb_cap;
                                    } else {
                                        $p_amount = $main_amount - $set->psb_charge;
                                    }



                                    if ($trx->status == 0) {
                                        //fund Vendor
                                        $trx = Transfertransaction::where('account_no', $acc_no)->first();
                                        User::where('id', $trx->user_id)->increment('main_wallet', $p_amount);
                                        $balance = User::where('id', $trx->user_id)->first()->main_wallet;
                                        $user = User::where('id', $trx->user_id)->first();
                                        $session_id = Transfertransaction::where('account_no', $acc_no)->first()->session_id ?? null;



                                        $url = Webkey::where('key', $trx->key)->first()->url_fund ?? null;
                                        $user_email = $trx->email ?? null;
                                        //$amount = $trx->amount ?? null;
                                        $order_id = $trx->ref_trans_id ?? null;
                                        $site_name = Webkey::where('key', $trx->key)->first()->site_name ?? null;

                                        $trasnaction = new Transaction();
                                        $trasnaction->user_id = $trx->user_id;
                                        $trasnaction->e_ref = $request->sessionid ?? $acc_no;
                                        $trasnaction->ref_trans_id = $order_id;
                                        $trasnaction->type = "webpay";
                                        $trasnaction->transaction_type = "VirtualFundWallet";
                                        $trasnaction->title = "Wallet Funding";
                                        $trasnaction->main_type = "CHARM";
                                        $trasnaction->credit = $p_amount;
                                        $trasnaction->note = "Transaction Successful | Web Pay | for $user_email";
                                        $trasnaction->fee = $fee ?? 0;
                                        $trasnaction->amount = $trx->amount;
                                        $trasnaction->e_charges = 0;
                                        $trasnaction->charge = $payable ?? 0;
                                        $trasnaction->enkPay_Cashout_profit = 0;
                                        $trasnaction->balance = $balance;
                                        $trasnaction->status = 1;
                                        $trasnaction->save();

                                        $message = "Business funded | $acc_no | Charm | $p_amount | $user->first_name " . " " . $user->last_name;
                                        send_notification($message);

                                        Webtransfer::where('trans_id', $trx->trans_id)->update(['status' => 4]);
                                        Transfertransaction::where('account_no', $acc_no)->update(['status' => 4, 'resolve' => 1]);
                                            Webhook::where('account_no', $acc_no)->delete() ?? null;

                                        $trck = new Transactioncheck();
                                        $trck->session_id = $pref;
                                        $trck->amount = $trx->amount;
                                        $trck->status = 2;
                                        $trck->email = $user_email;
                                        $trck->save();



                                        $type = "epayment";
                                        $fund = credit_user_wallet($url , $user_email, $amount, $order_id, $type, $session_id);

                                        $email = $trx->email;
                                        $date = $trx->created_at;
                                        $sitename = Webkey::where('key', $trx->key)->first()->site_name ?? null;
                                        $amount = number_format($trx->amount);


                                        $replyText = "Account No:- $title  | Transaction already been funded ✅ \n\n" .
                                            "This transaction has already been funded to | $email | on | $date | website:- $sitename | Amount:- $amount";

                                    }


                                } else {

                                    return "error";
                                }
                            } catch (\Exception $th) {
                                return $th->getMessage();
                            }

                        }
                        elseif ($var->responseData->transactionStatus == "PartPayment" && $var->responseData->message == "Incomplete Amount Received") {

                            $camt = $var->responseData->amountCollected;
                            $namt = $var->responseData->amount;


                            $ck_url = Transfertransaction::where('ref', $pref)->first()->url ?? null;

                            if($ck_url != null){
                                return 7;
                            }

                            $acc_no = Transfertransaction::where('ref', $pref)->first()->account_no ?? null;

                            $ref = Transfertransaction::where('ref', $pref)->first()->amount ?? null;
                            $expected_amount = Transfertransaction::where('ref', $pref)->first()->amount ?? null;

                            $amount_remain = $namt - $camt;

                            $url = url('')."/part-payment?expected_amount=$namt&amount_paid=$camt&acct_no=$acc_no&amount_remain=$amount_remain&ref=$pref";
                            Transfertransaction::where('ref', $pref)->update(['url' => $url]);


                            $email = $trx->email;
                            $date = $trx->created_at;
                            $sitename = Webkey::where('key', $trx->key)->first()->site_name ?? null;
                            $amount = number_format($trx->amount);

                            $replyText = "Account No:- $title  | partial payment 🥺 \n\n" .
                                "You paid incomplete amount\n" . "  Transaction Details - | $email | on | $date | website:- $sitename | Amount:- $amount \n\n" .
                                "The money will be sent back to your bank account within 48hrs, if no transaction after 48hrs, please raise a dispute on your bank app";


                        }


                    }else{

                        $email = $trx->email;
                        $date = $trx->created_at;
                        $sitename = Webkey::where('key', $trx->key)->first()->site_name ?? null;
                        $amount = number_format($trx->amount);

                        $replyText = "Session ID  | $title | Reslove Error 🥺 \n\n" .
                            "We could not verify this transaction this time,  contact support";


                        $message = json_encode($var);
                        send_notification($message);
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
