<?php

namespace App\Http\Controllers;

use App\Models\Advert;
use App\Models\GlobusAccount;
use App\Models\Setting;
use App\Models\Transaction;
use App\Models\Transactioncheck;
use App\Models\Transfertransaction;
use App\Models\User;
use App\Models\Webkey;
use App\Models\Webtransfer;
use Faker\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class WovenController extends Controller
{
    public function get_account(request $request)
    {


        $set = Setting::where('id', 1)->first();
        if ($set->woven == 1) {
            $faker = Factory::create();
            $data['pamount'] = $request->amount;
            $first_name = User::inRandomOrder()->first()->first_name;
            $last_name = User::inRandomOrder()->first()->last_name;
            $tremail = $request->email;
            $phone = User::inRandomOrder()->first()->phone;
            $amtt = $data['pamount'];
            $code = Setting::where('id', 1)->first()->woven_collective_code;
            $woven_details = woven_create($amtt, $code, $last_name, $tremail, $phone);


            return response()->json([
                'account_no' => $woven_details['account_no'],
                'account_name' => $woven_details['account_name'],
                'bank_name' => $woven_details['bank_name'],
            ]);


        }


    }


    public
    function woven_transaction(Request $request)
    {

        $trx = Webtransfer::where('manual_acc_ref', $request->ref)->first() ?? null;

            Transfertransaction::where('account_no', $request->accountNo)->delete() ?? null;

        $usr = User::where('id', $trx->user_id)->first();
        if ($trx != null) {
            $trasnaction = new Transfertransaction();
            $trasnaction->user_id = $trx->user_id;
            $trasnaction->type = "manualtransferpay";
            $trasnaction->key = $trx->key;
            $trasnaction->email = $trx->email;
            $trasnaction->ref_trans_id = $trx->trans_id;
            $trasnaction->amount = $trx->amount;
            $trasnaction->transaction_type = "WEBTRANSFER";
            $trasnaction->bank = $request->bankName;
            $trasnaction->ref = $request->ref;
            $trasnaction->account_no = $request->accountNo;
            $trasnaction->v_account_name = $request->accountName;
            $trasnaction->amount_to_pay = $request->amount;
            $trasnaction->title = "WEBTRANSFER";
            $trasnaction->main_type = "WOVEN";
            $trasnaction->note = "WEBTRANSFER";
            $trasnaction->e_charges = 0;
            $trasnaction->enkPay_Cashout_profit = 0;
            $trasnaction->status = 0;
            $trasnaction->save();

            $message = "Transfer Payment Initiated | $request->accountNo |" . "| ON WOVEN " . "For " . $usr->last_name . " | " . $trx->payable_amount . " | " . $trx->email;
            Log::info($message);

            return response()->json([
                'status' => true,
                'message' => "Successful",
                'ref' => $request->ref,
                'account' => $request->account_no,
                'name' => $request->account_name
            ]);

        } else {
            return response()->json([
                'status' => false,
                'message' => "REF NOT FOUND",
                'ref' => $request->ref
            ]);
        }


    }


    public function woven_webhook(Request $request)
    {


        $ip = $request->ip();
        $message = $ip . "====>" . json_encode($request->all());
        Log::info($message);


        if ($request->ip() != "35.162.80.204") {
            $message = "Wrong IP request | ===>>>" . $request->ip();
            Log::info($message);
            return response()->json([
                'status' => false,
                'message' => "Wrong IP request"
            ]);
        }

        $acc_no = $request->nuban;
        $user_amount = $request->amount;
        $session_id = $request->nip_session_id;
        $payable = $request->amount_payable;
        $fee = $request->fee;
        $m_key = $request->account_reference;
        $act_name = $request->source_account_name;

        if($acc_no == "6481068849" && $act_name =="Settlement"){
            $reff = null;

        }else{

            $reff = $request->meta_data['transaction_reference'] ?? $request->account_reference;

        }


        if($acc_no == "6481068849" && $act_name =="Settlement") {

            Log::info("Account repushed successfully");

            return response()->json([
                'status' => true,
                'message' => "Transaction successful",
            ]);
        }




        $status = Transfertransaction::where('account_no', $acc_no)->first()->status ?? null;
        if ($status == 4) {

            return response()->json([
                'status' => false,
                'message' => "Transaction has already been funded",
            ]);

        }


        $trx = Transfertransaction::where([
            'account_no' => $acc_no,
            'reff' => $reff,
            'status' => 0
        ])->first() ?? null;


        if ($trx == null) {


            $globus = GlobusAccount::where('account_no', $acc_no)->where('m_key', $m_key)->first() ?? null;
            if ($globus) {

                $user_id = Webkey::where('key', $globus->m_key)->first()->user_id;
                $url = $globus->fund_url ?? null;



                $set = Setting::where('id', 1)->first();

                if ($user_amount > 11000) {
                    $p_amount = $user_amount - 300;
                    $l_amount = $p_amount - 300;

                } else {
                    $p_amount = $user_amount - 100;
                    $l_amount = $p_amount - 100;

                }



                if ($user_id == 293677) {

                    if ($user_amount > 11000) {
                        $l_amount = $p_amount + 150;
                    } else {
                        $l_amount = $p_amount;
                    }


                }






                if ($user_id == 294099) {


                    $l_amount = $request->amount_payable;
                    $user_email = $request->account_email;
                    $amount = $request->amount;
                    $sender_name = $request->narration;
                    $sender_account_no = $request->source_nuban;
                    $session_id = $request->nip_session_id;
                    $account_no = $request->nuban;


                    $send_notification = send_api_notification($url, $user_email, $amount, $sender_name, $sender_account_no, $session_id, $account_no);

                    User::where('id', $user_id)->increment('main_wallet', $l_amount);
                    $balance = User::where('id', $user_id)->first()->main_wallet;
                    $user = User::where('id', $user_id)->first();

                    $url = $globus->fund_url ?? null;
                    $user_email = $globus->email ?? null;
                    $order_id = "Marchant Fund" . date('his') ?? null;
                    $site_name = Webkey::where('key', $globus->key)->first()->site_name ?? null;

                    $trasnaction = new Transaction();
                    $trasnaction->user_id = $user_id;
                    $trasnaction->e_ref = $order_id;
                    $trasnaction->ref_trans_id = $order_id;
                    $trasnaction->type = "webpay";
                    $trasnaction->transaction_type = "VirtualFundWallet";
                    $trasnaction->title = "Wallet Funding";
                    $trasnaction->main_type = "WOVEN";
                    $trasnaction->credit = $l_amount;
                    $trasnaction->email = $user_email;
                    $trasnaction->note = "Transaction Successful | Web Pay | for $user_email";
                    $trasnaction->fee = $fee ?? 0;
                    $trasnaction->amount = $l_amount;
                    $trasnaction->e_charges = 0;
                    $trasnaction->charge = $payable ?? 0;
                    $trasnaction->enkPay_Cashout_profit = 0;
                    $trasnaction->balance = $balance;
                    $trasnaction->status = 1;
                    $trasnaction->save();

                    $message = "Business funded  | $request->nuban | $l_amount | $user->first_name " . " " . $user->last_name . " | for $user_email";
                    Log::info($message);

                    Transfertransaction::where('account_no', $acc_no)->update(['status' => 4, 'resolve' => 1]);
                    $trasnaction = new Transfertransaction();
                    $trasnaction->user_id = $user_id;
                    $trasnaction->type = "webpay";
                    $trasnaction->key = $globus->m_key;
                    $trasnaction->email = $globus->email;
                    $trasnaction->ref_trans_id = $order_id;
                    $trasnaction->amount = $l_amount;
                    $trasnaction->transaction_type = "WEBTRANSFER";
                    $trasnaction->bank = "WOVEN";
                    $trasnaction->ref = $order_id;
                    $trasnaction->account_no = "Woven";
                    $trasnaction->v_account_name = "Woven";
                    $trasnaction->amount_to_pay = $l_amount;
                    $trasnaction->amount_paid = $l_amount;
                    $trasnaction->title = "WEBTRANSFER";
                    $trasnaction->main_type = "WOVEN";
                    $trasnaction->note = "WEBTRANSFER";
                    $trasnaction->e_charges = 0;
                    $trasnaction->enkPay_Cashout_profit = 0;
                    $trasnaction->status = 4;
                    $trasnaction->save();


                    return response()->json([
                        'status' => true,
                        'message' => "Transaction Successful"
                    ]);


                }


                User::where('id', $user_id)->increment('main_wallet', $l_amount);
                $balance = User::where('id', $user_id)->first()->main_wallet;
                $user = User::where('id', $user_id)->first();


                $url = $globus->fund_url ?? null;
                $user_email = $globus->email ?? null;


                $get_order_id = Transfertransaction::where('account_no', $acc_no)->first()->ref ?? null;
                if (!empty($get_order_id)) {
                    $order_id = $get_order_id;
                } else {
                    $order_id = "UserDirectFund" . date('His');
                }







                $site_name = Webkey::where('key', $globus->key)->first()->site_name ?? null;

                $trasnaction = new Transaction();
                $trasnaction->user_id = $user_id;
                $trasnaction->e_ref = $order_id;
                $trasnaction->ref_trans_id = $order_id;
                $trasnaction->type = "webpay";
                $trasnaction->transaction_type = "VirtualFundWallet";
                $trasnaction->title = "Wallet Funding";
                $trasnaction->main_type = "WOVEN";
                $trasnaction->credit = $l_amount;
                $trasnaction->email = $user_email;
                $trasnaction->note = "Transaction Successful | Web Pay | for $user_email";
                $trasnaction->fee = $fee ?? 0;
                $trasnaction->amount = $l_amount;
                $trasnaction->e_charges = 0;
                $trasnaction->charge = $payable ?? 0;
                $trasnaction->enkPay_Cashout_profit = 0;
                $trasnaction->balance = $balance;
                $trasnaction->status = 1;
                $trasnaction->save();

                $message = "Business funded  | $acc_no | $l_amount | $user->first_name " . " " . $user->last_name . " | for $user_email";
                Log::info($message);

                Transfertransaction::where('account_no', $acc_no)->update(['status' => 4, 'resolve' => 1]);


                $type = "epayment";
                $account_no = $request->nuban;
                $fund = credit_user_wallet($url, $user_email, $p_amount, $order_id, $type, $session_id, $account_no);


                $trasnaction = new Transfertransaction();
                $trasnaction->user_id = $user_id;
                $trasnaction->type = "webpay";
                $trasnaction->key = $globus->m_key;
                $trasnaction->email = $globus->email;
                $trasnaction->ref_trans_id = $order_id;
                $trasnaction->amount = $user_amount;
                $trasnaction->transaction_type = "WEBTRANSFER";
                $trasnaction->bank = "WOVEN";
                $trasnaction->ref = $order_id;
                $trasnaction->account_no = $acc_no;
                $trasnaction->v_account_name = $acc_no;
                $trasnaction->amount_to_pay = $l_amount;
                $trasnaction->amount_paid = $l_amount;
                $trasnaction->title = "WEBTRANSFER";
                $trasnaction->main_type = "WOVEN";
                $trasnaction->note = "WEBTRANSFER";
                $trasnaction->e_charges = 0;
                $trasnaction->enkPay_Cashout_profit = 0;
                $trasnaction->status = 4;
                $trasnaction->save();



                return response()->json([
                    'status' => true,
                    'message' => "Transaction Successful"
                ]);


            }


            if ($acc_no == "6481068849") {


                return response()->json([
                    'status' => false,
                    'message' => "Account Not found in our database",
                ]);


            } else {

                $message = "Woven funding error =>>>>> $acc_no | $user_amount  not found on transaction";
                Log::info($message);
                return response()->json([
                    'status' => false,
                    'message' => "Account Not found in our database",
                ]);

            }


        }


        if ($trx != null) {
            $set = Setting::where('id', 1)->first();
            if ($user_amount > 11000) {
                $p_amount = $user_amount - 300;
            } else {
                $p_amount = $user_amount - 100;
            }


            if ($trx->status == 0) {

                    Transfertransaction::where([
                        'account_no' => $acc_no,
                        'reff' => $reff,
                        'status' => 0
                    ])->first()->update(['session_id' => $session_id, 'status' => 4, 'resolve' => 1]) ?? null;

                if ($user_amount > 11000) {
                    $l_amount = $p_amount - 300;
                } else {
                    $l_amount = $p_amount - 100;
                }


                if ($trx->user_id == 293677) {

                    if ($user_amount > 11000) {
                        $l_amount = $p_amount + 150;
                    } else {
                        $l_amount = $p_amount;
                    }


                }


                User::where('id', $trx->user_id)->increment('main_wallet', $l_amount);
                $balance = User::where('id', $trx->user_id)->first()->main_wallet;
                $user = User::where('id', $trx->user_id)->first();


                $url = Webkey::where('key', $trx->key)->first()->url_fund ?? null;
                $user_email = $trx->email ?? null;
                $order_id = $trx->ref_trans_id ?? null;
                $site_name = Webkey::where('key', $trx->key)->first()->site_name ?? null;

                $trasnaction = new Transaction();
                $trasnaction->user_id = $trx->user_id;
                $trasnaction->e_ref = $request->sessionid ?? $acc_no;
                $trasnaction->ref_trans_id = $order_id;
                $trasnaction->type = "webpay";
                $trasnaction->transaction_type = "VirtualFundWallet";
                $trasnaction->title = "Wallet Funding";
                $trasnaction->main_type = "WOVEN";
                $trasnaction->credit = $l_amount;
                $trasnaction->email = $user_email;
                $trasnaction->note = "Transaction Successful | Web Pay | for $user_email";
                $trasnaction->fee = $fee ?? 0;
                $trasnaction->amount = $trx->amount;
                $trasnaction->e_charges = 0;
                $trasnaction->charge = $payable ?? 0;
                $trasnaction->enkPay_Cashout_profit = 0;
                $trasnaction->balance = $balance;
                $trasnaction->status = 1;
                $trasnaction->save();

                $message = "Business funded  | $request->nuban | $l_amount | $user->first_name " . " " . $user->last_name . " | for $user_email";
                Log::info($message);

                Webtransfer::where('trans_id', $trx->trans_id)->update(['status' => 4]);
                Transfertransaction::where('account_no', $acc_no)->update(['status' => 4, 'resolve' => 1, 'amount_paid' => $user_amount]);

                $trxck = new Transactioncheck();
                $trxck->session_id = $session_id;
                $trxck->amount = $trx->amount;
                $trxck->email = $user_email;
                $trxck->account_no = $request->nuban;
                $trxck->bank = "WOVEN";
                $trxck->save();


                $type = "epayment";
                $account_no = $request->nuban;
                $fund = credit_user_wallet($url, $user_email, $trx->amount, $order_id, $type, $session_id, $account_no);

                return response()->json([
                    'status' => true,
                    'message' => "Transaction Successful"
                ]);

            }
        } else {
            return response()->json([
                'status' => false,
                'message' => "No transaction made"
            ]);
        }


    }

    public function repush_woven(Request $request)
    {


        $acc_no = $request->nuban;
        $user_amount = $request->amount;
        $session_id = $request->unique_reference;
        $payable = $request->amount_payable;
        $fee = $request->fee;


        $status = Transfertransaction::where('account_no', $acc_no)->first()->status ?? null;
        if ($status == 4) {

            return response()->json([
                'status' => false,
                'message' => "Transaction has already been funded",
            ]);

        }


        $trx = Transfertransaction::where([
            'account_no' => $acc_no,
            'amount_to_pay' => $user_amount,
            'status' => 0
        ])->first() ?? null;


        if ($trx == null) {
            $message = "Woven funding error =>>>>> $acc_no | $user_amount  not found on transation";
            Log::info($message);
            return response()->json([
                'status' => false,
                'message' => "Account Not found in our database",
            ]);
        }


        if ($trx != null) {
            $set = Setting::where('id', 1)->first();
            if ($user_amount > 11000) {
                $p_amount = $user_amount - 300;
            } else {
                $p_amount = $user_amount - 100;
            }


            if ($trx->status == 0) {

                    Transfertransaction::where([
                        'account_no' => $acc_no,
                        'amount_to_pay' => $user_amount,
                        'status' => 0
                    ])->first()->update(['session_id' => $session_id, 'status' => 4, 'resolve' => 1]) ?? null;


                if ($trx->amount > 11000) {
                    $u_amt = $trx->amount - 300;
                } else {
                    $u_amt = $trx->amount - 100;
                }


                User::where('id', $trx->user_id)->increment('main_wallet', $u_amt);
                $balance = User::where('id', $trx->user_id)->first()->main_wallet;
                $user = User::where('id', $trx->user_id)->first();


                $url = Webkey::where('key', $trx->key)->first()->url_fund ?? null;
                $user_email = $trx->email ?? null;
                $order_id = $trx->ref_trans_id ?? null;
                $site_name = Webkey::where('key', $trx->key)->first()->site_name ?? null;

                $trasnaction = new Transaction();
                $trasnaction->user_id = $trx->user_id;
                $trasnaction->e_ref = $request->sessionid ?? $acc_no;
                $trasnaction->ref_trans_id = $order_id;
                $trasnaction->type = "webpay";
                $trasnaction->transaction_type = "VirtualFundWallet";
                $trasnaction->title = "Wallet Funding";
                $trasnaction->main_type = "WOVEN";
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


                $message = "Business funded  | $request->nuban  |" . number_format($u_amt, 2) . "| $user->first_name " . " " . $user->last_name . " | for $user_email";
                Log::info($message);

                Webtransfer::where('trans_id', $trx->trans_id)->update(['status' => 4]);
                Transfertransaction::where('account_no', $acc_no)->update(['status' => 4, 'resolve' => 1]);

//                $trxck = new Transactioncheck();
//                $trxck->session_id = $session_id;
//                $trxck->amount = $trx->amount;
//                $trxck->email = $user_email;
//                $trxck->account_no = $request->nuban;
//                $trxck->save();


                $type = "epayment";
                $fund = credit_user_wallet($url, $user_email, $trx->amount, $order_id, $type, $session_id);

                return response()->json([
                    'status' => true,
                    'message' => "Transaction Successful | $u_amt"
                ]);

            }
        } else {
            return response()->json([
                'status' => false,
                'message' => "No transaction made"
            ]);
        }


    }


    public function verifywoven(Request $request)
    {

        $ref = Webtransfer::where('trans_id', $request->trx_id)->first() ?? null;
        $tref = Transfertransaction::where('ref_trans_id', $request->trx_id)->first() ?? null;
        $usr = User::where('id', $ref->user_id)->first();


        $message = "Woven Payment Initiated |" . $request->trx_id . "For " . $usr->last_name . " | " . number_format($ref->payable_amount, 2);
        Log::info('Transfer Initiated', ['message' => $message]);


        $data['ref'] = $ref->manual_acc_ref;
        $data['account_no'] = $request->account_no;
        $data['amount'] = $ref->amount;
        $data['pref'] = $tref->pay_ref ?? null;
        $data['title'] = "Payment Confirmation";
        $data['ads'] = Advert::inRandomOrder()->first() ?? null;


        return view('waitingwoven', $data);


    }


    public
    function woven_check_status(Request $request)
    {

        $trans_id = $request->ref;
        $ref = $request->ref;
        $account_no = $request->account_no;


        $p_ref = Transfertransaction::where('ref', $ref)->first() ?? null;
        if ($p_ref == null) {
            return response()->json([
                'status' => false,
                'message' => "no transaction found"
            ]);
        }


        $status = Transfertransaction::where('ref', $trans_id)
            ->where('account_no', $account_no)
            ->first()->status ?? null;


        if ($status == 0) {

            return response()->json([
                'status' => 'pending'
            ], 200);

        }


        if ($status == 5) {

            return response()->json([
                'status' => 'pending'
            ], 200);

        }


        if ($status == 2) {
            return response()->json([
                'status' => 'success'
            ], 200);

        }

        if ($status == 4) {
            return response()->json([
                'status' => 'paid'
            ], 200);
        }
    }


    public function process_card_payment(Request $request)
    {


        $key = env('WOVENKEY');
        $databody = array(
            "cardData" => $request->cardData,
        );

        $post_data = json_encode($databody);
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.woven.finance/v1/api/cards/initiate-debit',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $post_data,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                "authorization: $key"
            ),
        ));

        $var = curl_exec($curl);
        curl_close($curl);
        $var = json_decode($var);
        $status = $var->status ?? null;
        $statusCode = $var->statusCode ?? null;


        if ($status == "success" && $statusCode == "W200") {
            $data['payment_id'] = $var->data->paymentId;
            $data['ref'] = $var->data->transactionRef;
            $data['status'] = true;
            return $data;

            // return view('verifywovencard', $data);
        } else {
            return $var->message;

        }


    }


    public function verify_card_woven(request $request)
    {

        $data['payment_id'] = "1716183778";
        $data['ref'] = "wf-card-752-3jdSYD7SdhTjS5SbP__8G";
        return view('verifywovencard', $data);


    }


    public function resend_otp(request $request)
    {


        $key = env('WOVENKEY');
        $databody = array(
            "paymentId" => $request->payment_id,
            "transactionRef" => $request->ref,
        );

        $post_data = json_encode($databody);
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.woven.finance/v1/api/cards/resend-otp',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $post_data,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                "authorization: $key"
            ),
        ));

        $var = curl_exec($curl);
        dd($var);

        curl_close($curl);
        $var = json_decode($var);


        $status = $var->status ?? null;
        $statusCode = $var->statusCode ?? null;


        $data['payment_id'] = "1716183778";
        $data['ref'] = "wf-card-752-3jdSYD7SdhTjS5SbP__8G";
        return view('verifywovencard', $data);


    }


}
