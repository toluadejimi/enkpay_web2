<?php

namespace App\Http\Controllers;

use App\Models\Advert;
use App\Models\Transactioncheck;
use App\Models\Transfertransaction;
use App\Models\User;
use App\Models\Webkey;
use App\Models\Webtransfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CharmController extends Controller
{


    public function charm_webhook(Request $request)
    {

        $pref = $request->PaymentReference;
        $acc_no = $request->nuban;
        $user_amount = $request->amount;
        $session_id = $request->SessionId;
        $payable = $request->amount_payable;
        $fee = $request->fee;


        $message = "wema Webhook=======>" . json_encode($request->all());
        send_notification($message);



        $status = Transfertransaction::where('ref', $pref)->first()->status ?? null;
        if ($status == 4) {
            return response()->json([
                'status' => false,
                'message' => "Transaction has already been funded",
            ]);

        }


        $trx = Transfertransaction::where('ref', $pref)
            ->where([
                'status' => 0
            ])->first() ?? null;


        if ($trx == null) {

            return response()->json([
                'status' => false,
                'message' => "Account Not found in our database",
            ]);

        }
//
//        $paid_amt = Transfertransaction::where('ref', $pref)->update(['amount_paid' => $request->AmountCollected]) ?? null;
//        $amt_to_pay = Transfertransaction::where('ref', $pref)->update(['amount_to_pay' => $request->Amount]) ?? null;


//        if ($paid_amt == $amt_to_pay) {
//            $amount = $user_amount;
//        } else {
//            $amount = $user_amount - 100;
//        }


        $trx = Transfertransaction::where('ref', $pref)->first() ?? null;


//        if ($trx != null) {


//            $set = Setting::where('id', 1)->first();
//            if ($amount > 15000) {
//                $p_amount = $amount - $set->psb_cap;
//            } else {
//                $p_amount = $amount - $set->psb_charge;
//            }


//            if ($trx->ststus == 0) {
//                    Transfertransaction::where('ref', $pref)
//                        ->where([
//                            'status' => 0
//                        ])->update(['status' => 5]) ?? null;


                //fund Vendor
                $trx = Transfertransaction::where('ref', $pref)->first();

                //User::where('id', $trx->user_id)->increment('main_wallet', $p_amount);
               // $balance = User::where('id', $trx->user_id)->first()->main_wallet;
                //
                $user = User::where('id', $trx->user_id)->first();

                $url = Webkey::where('key', $trx->key)->first()->url_fund ?? null;
                $user_email = $trx->email ?? null;
                //$amount = $trx->amount ?? null;
                $order_id = $trx->ref_trans_id ?? null;
                $site_name = Webkey::where('key', $trx->key)->first()->site_name ?? null;


                $trxck = new Transactioncheck();
                $trxck->session_id = $session_id;
                $trxck->amount = $trx->amount;
                $trxck->email = $user_email;
                $trxck->save();


//                $trasnaction = new Transaction();
//                $trasnaction->user_id = $trx->user_id;
//                $trasnaction->e_ref = $request->sessionid ?? $acc_no;
//                $trasnaction->ref_trans_id = $order_id;
//                $trasnaction->type = "webpay";
//                $trasnaction->transaction_type = "VirtualFundWallet";
//                $trasnaction->title = "Wallet Funding";
//                $trasnaction->main_type = "CHARM";
//                $trasnaction->credit = $p_amount;
//                $trasnaction->note = "Transaction Successful | Web Pay | for $user_email";
//                $trasnaction->fee = $fee ?? 0;
//                $trasnaction->amount = $trx->amount;
//                $trasnaction->e_charges = 0;
//                $trasnaction->charge = $payable ?? 0;
//                $trasnaction->enkPay_Cashout_profit = 0;
//                $trasnaction->balance = $balance;
//                $trasnaction->status = 1;
//                $trasnaction->save();

//                $message = "Business funded | $trx->manual_acc_ref | $p_amount | $user->first_name " . " " . $user->last_name;
//                send_notification($message);

//                Transfertransaction::where('ref', $pref)->update(['status' => 4, 'resolve' => 1]);
//
//
//                $type = "epayment";
//                $fund = credit_user_wallet($url, $user_email, $amount, $order_id, $type, $session_id);

                return response()->json([
                    'status' => "success",
                    'message' => "Webhook Notification Successful"
                ]);

//            }
//        }




    }


    public
    function charm_transaction(Request $request)
    {

        $trx = Webtransfer::where('manual_acc_ref', $request->ref)->first() ?? null;

        Transfertransaction::where('account_no', $request->accountNo)->where('status', 4)->delete();


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
            $trasnaction->bank = "CHARM";
            $trasnaction->ref = $request->pay_ref;
            $trasnaction->account_no = $request->accountNo;
            $trasnaction->v_account_name = $request->accountName;
            $trasnaction->amount_to_pay = $request->amount;
            $trasnaction->title = "WEBTRANSFER";
            $trasnaction->main_type = "CHARM";
            $trasnaction->note = "WEBTRANSFER";
            $trasnaction->e_charges = 0;
            $trasnaction->enkPay_Cashout_profit = 0;
            $trasnaction->status = 0;
            $trasnaction->save();

            $message = "Transfer Payment Initiated |" . $request->ref . "| ON CHARM " . "For " . $usr->last_name . " | " . " $request->accountNo " . number_format($trx->payable_amount, 2);
            send_notification($message);

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


    public
    function charm_check_status(Request $request)
    {

        $p_ref = Transfertransaction::where('ref', $request->ref)->first() ?? null;
        $status = Transfertransaction::where('ref', $request->ref)->first()->status ?? null;
        $account_no = Transfertransaction::where('ref', $request->ref)->first()->account_no ?? null;



        if ($status == 4) {
            return response()->json([
                'status' => 'paid',
                'message' => "paid",
                'data' => "paid"
            ], 200);
        }

        if ($p_ref == null) {
            return response()->json([
                'status' => false,
                'message' => "no transaction found"
            ]);
        } else {

            $p_ref = Transfertransaction::where('account_no', $account_no)->first() ?? null;
            if ($p_ref == null) {

                return response()->json([
                    'status' => 'pending',
                    'data' => "pending"
                ], 200);
            }

        }

        $pref = $p_ref->ref;
        $amount = $p_ref->amount;
        $verify = verifypelpay($pref, $amount);



        if ($verify['code'] == 0) {
            return response()->json([
                'status' => 'pending',
                'data' => $verify
            ], 200);
        } elseif ($verify['code'] == 4) {
            return response()->json([
                'status' => 'paid',
                'message' => $verify['message'],
                'data' => $verify
            ], 200);
        } elseif ($verify['code'] == 5) {
            return response()->json([
                'status' => 'partial_payment',
                'redirect_url' => $verify['url']
            ], 200);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Verification failed',
                'data' => $verify
            ], 400);

        }
    }


    public
    function verifycharm(Request $request)
    {

        $ref = Transfertransaction::where('ref', $request->trx_id)->first() ?? null;
        $tref = Transfertransaction::where('ref', $request->trx_id)->first() ?? null;
        $usr = User::where('id', $ref->user_id)->first();

        $message = "Charm Payment Initiated |" . $request->trx_id . "For " . $usr->last_name . " | " . number_format($ref->payable_amount, 2);
        Log::info('Transfer Initiated', ['message' => $message]);


        $data['ref'] = $request->trx_id;
        $data['account_no'] = $request->account_no;
        $data['amount'] = $ref->amount;
        $data['pref'] = $tref->pay_ref ?? null;
        $data['title'] = "Payment Confirmation";
        $data['ads'] = Advert::inRandomOrder()->first() ?? null;


        return view('waitingcharm', $data);


    }

    public
    function ppay(Request $request)
    {

        $url = Transfertransaction::where('ref', $request->trans_id)->first()->url ?? null;


        $data['url'] = $url;
        return view('ppayment', $data);


    }


}
