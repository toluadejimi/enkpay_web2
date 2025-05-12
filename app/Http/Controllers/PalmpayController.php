<?php

namespace App\Http\Controllers;

use App\Models\PalmpayAccount;
use App\Models\Setting;
use App\Models\Transaction;
use App\Models\Transactioncheck;
use App\Models\Transfertransaction;
use App\Models\User;
use App\Models\Webkey;
use App\Models\Webtransfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PalmpayController extends Controller
{


    public function create_palmpay_account(request $request)
    {


        $get_account = PalmpayAccount::where('email', $request->email)->first() ?? null;
        if ($get_account != null) {

            return response()->json([
                'account_no' => $get_account->account_no,
                'account_name' => $get_account->account_name,
                'bank_name' => $get_account->bank_name,
            ]);

        }


    }

    public function palmpay_webhook(request $request)
    {

        $request = "Palmpay Notification ====>>> " . json_encode($request->all());
        send_notification($request);

    }


    public function verifypaypoint(Request $request)
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


    public function paypoint_webhook(Request $request)
    {


        $ip = $request->ip();
        $message = $ip . "Paypoint Webhook====>" . json_encode($request->all());
       Log::info($message);





        $acc_no = $request->receiver['account_number'];
        $user_amount = $request->amount_paid;
        $amount_to_pay = $request->amount_paid;
        $session_id = $request->transaction_id;
        $payable = $request->amount_paid;
        $fee = $request->settlement_fee;
        $tstatus = $request->transaction_status;
        $amount_settled = $request->settlement_amount;


        $status = Transfertransaction::where('account_no', $acc_no)->first()->status ?? null;
        if ($status == 4) {

            return response()->json([
                'status' => false,
                'message' => "Transaction has already been funded",
            ]);

        }


        if ($tstatus == "success") {


            $trx = Transfertransaction::where([
                'account_no' => $acc_no,
                'amount_to_pay' => $amount_to_pay,
                'status' => 0
            ])->first() ?? null;


            if ($trx == null) {

               $incmplete = Transfertransaction::where([
                    'account_no' => $acc_no,
                    'status' => 0
                ])->update(['amount_paid' => $payable, 'status' => 8]) ?? null;
               if($incmplete){
                   return response()->json([
                       'status' => true,
                       'message' => "Incomplete Amount",
                   ], 200);
               }else{

                   return response()->json([
                       'status' => false,
                       'message' => "Not found",
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
                            'amount_to_pay' => $amount_to_pay,
                            'status' => 0
                        ])->first()->update(['session_id' => $session_id, 'status' => 4, 'amount_paid' => $payable, 'resolve' => 1]) ?? null;


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
                    $trasnaction->main_type = "PAYPOINT";
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
                    Transfertransaction::where('account_no', $acc_no)->update(['status' => 4, 'resolve' => 1]);

                    $trxck = new Transactioncheck();
                    $trxck->session_id = $session_id;
                    $trxck->amount = $trx->amount;
                    $trxck->email = $user_email;
                    $trxck->account_no = $request->nuban;
                    $trxck->bank = "PAYPOINT";
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


    }


}
