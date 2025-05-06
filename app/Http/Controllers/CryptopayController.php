<?php

namespace App\Http\Controllers;

use App\Models\CryptoPayment;
use App\Models\Setting;
use App\Models\Transaction;
use App\Models\Transfertransaction;
use App\Models\User;
use App\Models\Webkey;
use App\Models\Webtransfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CryptopayController extends Controller
{


    public function crypto_pay(request $request)
    {

        // $token = crypto_token();

        $token = crypto_currency();

        dd($token);

    }


    public function crypto_pay_view(request $request)
    {


        $set = Setting::where('id', 1)->first();
        if ($set->pay_by_crypto == 1) {


            $rate = get_rate();
            $data['curr'] = crypto_currency();
            $data['webhook'] = $request->webhook;
            $data['key'] = $request->key;
            $data['order_id'] = $request->order_id;

            $data['amount_in_usd'] = $request->amount / $rate;
            return view('crypto', $data);

        }


    }


    public function crypto_pay_price(request $request)
    {


        $set = Setting::where('id', 1)->first();
        if ($set->pay_by_crypto == 1) {
            $to_curr = $request->curr;
            $price = get_min($to_curr);

            if ($request->amount < $price) {
                return back()->with('error', "Minimum amount can not be less than $" . number_format($price, 2));
            }

            $code = $to_curr;
            $amount = $request->amount;
            $cypto_amount = estimate($amount, $code);
            $order_id = $request->order_id;
            $order_description = $request->order_description;

            //$pay = create_payment($amount, $code, $order_id, $order_description);

            $data['amount_in_usd'] = $request->amount;
            $data['crypto_amount'] = $cypto_amount;
            $data['name'] = $request->curr;
            $data['image'] = "https://nowpayments.io" . $request->image;


            // $data['payment_status'] = $pay['payment_status'];
            // $data['pay_address'] = $pay['pay_address'];
            $data['crypto_amount'] = $cypto_amount;
            $data['crypto_amount'] = $cypto_amount;
            $data['crypto_amount'] = $cypto_amount;

            return view('crypto-price', $data);

        }


    }


    public function crypto_ck(request $request)
    {

        $ref = $request->ref;
        $inv_id = CryptoPayment::where('ref', $ref)->first()->inv_id;
        $key = env("CRYPTOKEY");


        $get_trx = Http::get("https://plisio.net/api/v1/invoices/$inv_id?api_key=$key");
        $cryp = $get_trx->json();
        $status = $get_trx->json()['status'] ?? null;

        if ($status == "success") {

            if ($get_trx->json()['data']['invoice']['status'] == "expired") {
                CryptoPayment::where('ref', $ref)->update(['status' => 9]);
                return response()->json([
                    'status' => 'expired'
                ], 200);
            } elseif ($get_trx->json()['data']['invoice']['status'] == "new") {
                return response()->json([
                    'status' => 'pending'
                ], 200);
            } elseif ($get_trx->json()['data']['invoice']['status'] == "completed") {

                $ckk = Transfertransaction::where('ref_trans_id', $ref)->first()->status;
                if ($ckk == 4) {
                    return response()->json([
                        'status' => 'paid'
                    ], 200);
                }


                $update = CryptoPayment::where('ref', $ref)->update(['status' => 4]);
                if ($update) {
                    $trx = Transfertransaction::where('ref_trans_id', $ref)->first();
                    $user_amount = $trx->amount;
                    if ($user_amount > 11000) {
                        $p_amount = $user_amount - 300;
                    } else {
                        $p_amount = $user_amount - 100;
                    }


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
                    $trasnaction->e_ref = $ref;
                    $trasnaction->ref_trans_id = $order_id;
                    $trasnaction->type = "webpay";
                    $trasnaction->transaction_type = "VirtualFundWallet";
                    $trasnaction->title = "Wallet Funding";
                    $trasnaction->main_type = "CRYPTO";
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

                    $message = "Business funded  | $ref | $l_amount | $user->first_name " . " " . $user->last_name . " | for $user_email";
                    send_notification($message);

                    Webtransfer::where('trans_id', $trx->trans_id)->update(['status' => 4]);

                    $type = "epayment";
                    $account_no = $ref;
                    $fund = credit_user_wallet($url, $user_email, $trx->amount, $order_id, $type, $ref, $account_no);

                    return response()->json([
                        'status' => 'paid'
                    ], 200);

                }
            } else {
                return response()->json([
                    'status' => 'pending'
                ], 200);
            }


        } else {
            return response()->json([
                'status' => 'pending'
            ], 200);
        }

    }


    public
    function cryptopayment(request $request)
    {

        $message = "Crypto =====>>>" . json_encode($request->all());
        send_notification($message);

    }


}
