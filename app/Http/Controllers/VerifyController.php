<?php

namespace App\Http\Controllers;

use App\Models\ResolveOrder;
use App\Models\Setting;
use App\Models\Support;
use App\Models\Transaction;
use App\Models\Transactioncheck;
use App\Models\Transfertransaction;
use App\Models\User;
use App\Models\Webkey;
use App\Models\Webtransfer;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class VerifyController extends Controller
{

    public function verify_view(request $request)
    {
        if (Auth::check() == false) {
            return view('login');
        }

        $currentDate = Carbon::today();


        if (Auth::user()->bank_operator == "all") {
            $data['status'] = Setting::where('id', 1)->first();
            $data['transactions'] = Transfertransaction::latest()->where('status', 0)->get();
            $data['opay_count'] = Transfertransaction::where('status', 1)->where('bank', "OPAY")->count();
            $data['palmpay_count'] = Transfertransaction::where('status', 1)->where('bank', "PALMPAY")->count();
            $data['miss_count'] = Transfertransaction::where('status', 1)->where('amount', 100.00)->count();


            $data['daily_opay_count'] = Transfertransaction::where([
                'status' => 1,
                'bank' => "OPAY",
            ])->whereDate('created_at', $currentDate)->count();

            $data['daily_palmpay_count'] = Transfertransaction::where([
                'status' => 1,
                'bank' => "PALMPAY",
            ])->whereDate('created_at', $currentDate)->count();


            $data['totaldaily'] = $data['opay_count'] + $data['daily_palmpay_count'];
            $data['all'] = $data['palmpay_count'] + $data['palmpay_count'] - $data['miss_count'];

            $data['support'] = Support::where('id', 1)->first()->support;


            return view('payment', $data);
        }

        if (Auth::user()->bank_operator == "opay") {
            $data['status'] = Setting::where('id', 1)->first();
            $data['transactions'] = Transfertransaction::latest()->where('status', 0)->where('bank', "OPAY")->get() ?? null;
            return view('payment', $data);

        }

        if (Auth::user()->bank_operator == "palmpay") {
            $data['status'] = Setting::where('id', 1)->first();
            $data['transactions'] = Transfertransaction::latest()->where('status', 0)->where('bank', "PALMPAY")->get() ?? null;
            return view('payment', $data);

        }


        if (Auth::user()->bank_operator == "kuda") {
            $data['status'] = Setting::where('id', 1)->first();
            $data['transactions'] = TransactionController::latest()->where('status', 0)->where('bank', "KUDA")->get() ?? null;
            return view('payment', $data);

        }


        return back()->with('error', "You dont have any business here");


    }

    public function change_support(request $request)
    {
        Support::where('id', 1)->update(['number' => $request->support]);
        return back()->with('message', "Support Has been updated");

    }

    public function login_now(request $request)
    {

        $user = User::where('email', $request->email)->first() ?? null;
        if ($user == null) {
            return back()->with('error', "Account Not Found");
        }

        if ($user->status == 9) {
            return back()->with('error', "Not permitted to login");
        }

        $credentials = [];
        if ($user->role == 9 && $user->status == 2) {
            $credentials = $request->only('email', 'password');
        }

        if (!empty($credentials) && Auth::attempt($credentials)) {
            return redirect('payment');
        }

        return back()->with('error', 'Email or password incorrect');


    }


    public function pending_transaction(request $request)
    {


        if (Auth::check() == false) {
            return view('login');
        }

        $currentDate = Carbon::today();


        $data['transactions'] = Transfertransaction::latest()->where('status', 0)->orwhere('status', 3)->get();

        return view('pend', $data);

    }


    public function login(request $request)
    {
        return view('login');


    }







    public function resolve(request $request)
    {
        $data['user_id'] = $request->user_id;
        $data['check_url'] = $request->check_url;
        $data['currentUrl'] = Webkey::where('key', $request->user_id)->first()->support_number ?? null;
        return view('resolve', $data);
    }


    public function decline_approve(request $request)
    {
        $order = ResolveOrder::where('id', $request->id)->first() ?? null;

        ResolveOrder::where('id', $order->id)->update(['status' => 3]);
        return back()->with('error', "Ticket has been declined");
    }


    public function deposit_approve(request $request)
    {

        $order = ResolveOrder::where('id', $request->id)->first() ?? null;

        if ($order == null) {
            return back()->with('error', 'User Api Url not found');
        }


        $vendor_url = Webkey::where('key', $order->user_id)->first()->url_fund ?? null;
        $user_id = Webkey::where('key', $order->user_id)->first()->user_id ?? null;
        $user = User::where('id', $user_id)->first() ?? null;


        $site_name = Webkey::where('key', $order->user_id)->first()->site_name ?? null;


        if ($vendor_url == null) {
            return back()->with('error', 'User Api Url not found');
        }

        $reff = date('ymdhms') . "APIFUND";

        $databody = array(

            "amount" => $order->r_amount,
            "email" => $order->email,
            "order_id" => $reff,
        );


        $post_data = json_encode($databody);

        ResolveOrder::where('id', $order->id)->update(['status' => 1]);

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "$vendor_url",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $post_data,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));


        $var = curl_exec($curl);
        curl_close($curl);
        $var = json_decode($var);
        $status = $var->status ?? null;
        $status_message = $var->message ?? null;

        if ($status == true) {


            $charge = Setting::where('id', 1)->first()->webpay_transfer_charge;

            if ($order->r_amount <= 100) {
                $f_amount = $order->r_amount;
            } else {
                $f_amount = $order->r_amount - $charge;
            }

            User::where('id', $user_id)->increment('main_wallet', $f_amount);
            $balance = User::where('id', $user_id)->first()->main_wallet;
            $user = User::where('id', $user_id)->first();

            //update Transactions
            $trasnaction = new Transaction();
            $trasnaction->user_id = $user_id;
            $trasnaction->e_ref = $reff;
            $trasnaction->ref_trans_id = $reff;
            $trasnaction->type = "webpay";
            $trasnaction->transaction_type = "VirtualFundWallet";
            $trasnaction->title = "Wallet Funding";
            $trasnaction->main_type = "Transfer";
            $trasnaction->credit = $f_amount;
            $trasnaction->note = "Transaction Successful | Web Pay ";
            $trasnaction->fee = $charge ?? 0;
            $trasnaction->amount = $order->r_amount;
            $trasnaction->e_charges = 0;
            $trasnaction->enkPay_Cashout_profit = 0;
            $trasnaction->balance = $balance;
            $trasnaction->status = 1;
            $trasnaction->save();


            $trx = new Transfertransaction();
            $trx->amount = $order->r_amount;
            $trx->ref = $reff;
            $trx->ref_trans_id = $reff;
            $trx->email = $order->email;
            $trx->transaction_type = "WEBTRASNSFER";
            $trx->bank = "Resolve";
            $trx->status = 2;
            $trx->user_id = $user_id;
            $trx->save();


            $message = "Business funded | $reff | $f_amount | $user->first_name " . " " . $user->last_name;
            Log::info('Business Funded', ['message' => $message]);

            //Log::info($message);

            $date = date('d M Y H:i:s');
            $message = "$reff | $order->ref | NGN  $order->r_amount | $order->email  | $site_name | $date | has been funded";
            Log::info('Business Funded', ['message' => $message]);


            //            Log::info($message);
//            send_notification2($message);
//            send_notification3($message);

            $order = ResolveOrder::where('id', $request->id)->first() ?? null;
            ResolveOrder::where('id', $order->id)->update(['status' => 1]);


            return back()->with('message', 'Transaction successfully completed');


        } else {

            return back()->with('error', $status_message);
        }

    }


    public
    function all_request_view(request $request)
    {
        if (Auth::check() == false) {
            return view('login');
        }
        $data['title'] = "All Issues";
        $data['tickets'] = ResolveOrder::latest()->where('status', 0)->get();
        return view('request', $data);
    }


    public
    function hold(request $request)
    {
        if (Auth::check() == false) {
            return view('login');
        }
        $data['title'] = "Hold";
        $data['tickets'] = ResolveOrder::latest()->where('status', 5)->get();
        return view('request', $data);
    }


    public
    function approved(request $request)
    {

        if (Auth::check() == false) {
            return view('login');
        }
        $data['title'] = "Approved";
        $data['tickets'] = ResolveOrder::latest()->where('status', 1)->paginate(50);
        return view('request', $data);


    }

    public
    function search(request $request)
    {

        $data['title'] = "Approved";
        $data['tickets'] = ResolveOrder::latest()->where('email', $request->email)->paginate(50);
        return view('request', $data);


    }


    public
    function noref_request_view(request $request)
    {
        if (Auth::check() == false) {
            return view('login');
        }
        $data['title'] = "No Refrence";
        $data['tickets'] = ResolveOrder::latest()->where('status', 0)->where('subject', 1)->get();
        return view('request', $data);
    }


    public
    function opay_ticket_view(request $request)
    {
        if (Auth::check() == false) {
            return view('login');
        }
        $data['title'] = "Opay Ticket";
        $data['tickets'] = ResolveOrder::latest()->where('pay_type', "opay")->where('status', 0)->get();
        return view('request', $data);
    }

    public
    function ninepsb_ticket_view(request $request)
    {
        if (Auth::check() == false) {
            return view('login');
        }
        $data['title'] = "9psb Ticket";
        $data['tickets'] = ResolveOrder::latest()->where('pay_type', "9PSB")->where('status', 0)->get();
        return view('request', $data);
    }


    public
    function palmpay_ticket_view(request $request)
    {
        if (Auth::check() == false) {
            return view('login');
        }
        $data['title'] = "9psb Ticket";
        $data['tickets'] = ResolveOrder::latest()->where('pay_type', "palmpay")->where('status', 0)->get();
        return view('request', $data);
    }


    public
    function no_credit_view(request $request)
    {
        if (Auth::check() == false) {
            return view('login');
        }

        $data['title'] = "Refrence but not processed";
        $data['tickets'] = ResolveOrder::latest()->where('status', 0)->where('subject', 3)->get();
        return view('request', $data);
    }

    public
    function wrong_amount_view(request $request)
    {
        if (Auth::check() == false) {
            return view('login');
        }

        $data['title'] = "Wrong Amount";
        $data['tickets'] = ResolveOrder::latest()->where('status', 0)->where('subject', 2)->get();
        return view('request', $data);
    }


    public
    function deposit_funded(request $request)
    {
        $order = ResolveOrder::where('id', $request->id)->first() ?? null;
        ResolveOrder::where('id', $order->id)->update(['status' => 4]);
        return back()->with('message', 'Transaction funded');
    }

    public
    function hold_ticket(request $request)
    {
        $order = ResolveOrder::where('id', $request->id)->first() ?? null;
        ResolveOrder::where('id', $order->id)->update(['status' => 5]);
        return back()->with('message', 'Transaction Moveed');
    }


    public
    function deposit_delete(request $request)
    {
        ResolveOrder::where('id', $request->id)->delete();
        return redirect('all-issues')->with('message', 'Transaction deleted');
    }


    public
    function track_request_view(request $request)
    {
        $data['orders'] = ResolveOrder::where('email', $request->email)->count();
        $data['tickets'] = ResolveOrder::where('email', $request->email)->get();


        return view('track-request', $data);
    }


    public
    function request_order(request $request)
    {
        $data['orders'] = ResolveOrder::where('email', $request->email)->count();
        $data['tickets'] = ResolveOrder::where('email', $request->email)->get();


        if ($data['orders'] == 0) {
            return back()->with('error', "No resolve found with email $request->email");
        }

        return view('track-request', $data);

    }


    public function reslove_wema_view(request $request)
    {

        $set = Setting::where('id', 1)->first();
        $data['email'] = $request->email;
        $data['user_id'] = $request->user_id;
        $data['check_url'] = $request->check_url;
        $data['currentUrl'] = Webkey::where('key', $request->user_id)->first()->support_number ?? null;
        $data['type'] = "wema";

        if ($set->woven_ck == 1) {
            $data['partner'] = "woven";
        } else {
            $data['partner'] = "charm";
        }

        return view('sessionresolve', $data);

    }

    public function reslove_psb_view(request $request)
    {


        $data['currentUrl'] = url()->current();
        $data['email'] = $request->email;
        $data['user_id'] = $request->user_id;
        $data['check_url'] = $request->check_url;
        $data['type'] = "ninepsb";
        $data['currentUrl'] = Webkey::where('key', $request->user_id)->first()->support_number ?? null;


        return view('sessionresolve', $data);
    }


    public function reslove_psb(request $request)
    {

        $message = "9psb Resolve Request ====>" . json_encode($request->all());
        Log::info($message);


        if ($request->username == "Not Found, Pleas try again") {
            return back()->with('error', 'Email is invalid, please try again');
        }


        $url = $request->url;
        $ckstatus = Transfertransaction::where('session_id', $request->session_id)->first()->status ?? null;
        $email = Transfertransaction::where('session_id', $request->session_id)->first()->email ?? null;


        $ckkkkkk = Transactioncheck::where('session_id', $request->session_id)->first() ?? null;
        $ckkkkkkstatus = Transactioncheck::where('session_id', $request->session_id)->first()->status ?? null;
        $ckemail = Transactioncheck::where('session_id', $request->session_id)->first()->email ?? null;

        if ($ckkkkkk != null || $ckkkkkkstatus == 2) {
            return back()->with('error', "Transaction has already been funded to $ckemail, Please go back to site to check your wallet");
        }


        if ($ckstatus == "4" || $ckstatus == 4) {
            return back()->with('error', "Transaction has already been funded to $email, Please go back to site to check your wallet");
        }


        if ($ckstatus == "2" || $ckstatus == "3" || $ckstatus == null) {

            $status = Transfertransaction::where('session_id', $request->session_id)->first()->status ?? null;
            $email = Transfertransaction::where('session_id', $request->session_id)->first()->email ?? null;
            $order_idd = Transfertransaction::where('session_id', $request->session_id)->first()->ref_trans_id ?? null;


            $curl = curl_init();
            $data = array(
                'session_id' => $request->session_id,
            );
            $post_data = json_encode($data);

            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://etopagency.com/api/session-check',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => $post_data,
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json'
                ),
            ));

            $var = curl_exec($curl);
            curl_close($curl);
            $var = json_decode($var);


            $session_id = $var->session_id ?? null;
            $account_no = $var->account_no ?? null;
            $amt = $var->amount ?? null;
            $name = $var->sender_name ?? null;
            $statusbb = $var->status ?? null;
            $resolve = $var->resolve ?? null;


            if ($statusbb == false) {
                return back()->with('error', "Transaction not found");
            }

            if ($resolve == 1) {
                return back()->with('error', "Transaction has already being funded");
            }


            $urlkey = Webkey::where('key', $request->user_id)->first()->user_id ?? null;
            $balance = User::where('id', $urlkey)->first()->main_wallet;
            $user = User::where('id', $urlkey)->first();
            $url = Webkey::where('key', $request->user_id)->first()->url_fund ?? null;
            $urluser = Webkey::where('key', $request->user_id)->first()->user_url ?? null;


            $user_email = $request->email ?? null;
            $site_name = Webkey::where('key', $request->user_id)->first()->site_name ?? null;

            $trxxc = Transfertransaction::where('account_no', $account_no)->first() ?? null;
            if ($trxxc == null) {
                $svtrx = new Transfertransaction();
                $svtrx->account_no = $account_no;
                $svtrx->session_id = $session_id;
                $svtrx->status = 4;
                $svtrx->amount = $amt;
                $svtrx->email = $request->email;
                $svtrx->note = "PSBRESOLVE";
                $svtrx->user_id = $user->id;
                $svtrx->transaction_type = "Resolve";
                $svtrx->save();
            } else {
                Transfertransaction::where('account_no', $account_no)->update(['status' => 4, 'note' => '9PSBRESOLVE', 'resolve' => 1]);
            }


            $set = Setting::where('id', 1)->first();
            if ($amt > 15000) {
                $p_amount = $amt - $set->psb_cap;
            } else {
                $p_amount = $amt - $set->psb_charge;
            }


            //fund Vendor
            $charge = Setting::where('id', 1)->first()->webpay_transfer_charge;
            if ($amt <= 100) {
                $f_amount = $amt;
            } elseif ($amt > 15000) {
                $f_amount = $amt - 300;
            }


            $amount = $p_amount;
            $type = "presolve";
            $order_id = "Resolve" . random_int(00000, 99999);
            $account_no = 000;
            $session_id = "Resolve";
            $fund = credit_user_wallet($url, $user_email, $amount, $order_id, $type, $session_id, $account_no);



            if ($fund == 2) {
                //update Transactions
                $trasnaction = new Transaction();
                $trasnaction->user_id = $urlkey;
                $trasnaction->e_ref = $order_id;
                $trasnaction->ref_trans_id = $order_id;
                $trasnaction->type = "webpay";
                $trasnaction->transaction_type = "VirtualFundWallet";
                $trasnaction->title = "Wallet Funding";
                $trasnaction->main_type = "Transfer";
                $trasnaction->credit = $p_amount;
                $trasnaction->note = "Resolve Transaction Successful | Web Pay | form  $request->email";
                $trasnaction->receiver_account_no = $account_no;
                $trasnaction->fee = $charge ?? 0;
                $trasnaction->amount = $amt;
                $trasnaction->e_charges = 0;
                $trasnaction->enkPay_Cashout_profit = 0;
                $trasnaction->balance = $balance;
                $trasnaction->status = 1;
                $trasnaction->save();

                User::where('id', $urlkey)->increment('main_wallet', $p_amount);

                $trxa = Transfertransaction::where('account_no', $account_no)->first() ?? null;
                if ($trxa == null) {
                    $trx = new Transfertransaction();
                    $trx->account_no = $account_no;
                    $trx->amount = $p_amount;
                    $trx->ref = $order_id;
                    $trx->ref_trans_id = $order_id;
                    $trx->email = $request->email;
                    $trx->session_id = $session_id;
                    $trx->bank = "9PSBRESLOVE";
                    $trx->note = "Resolve Transaction Successful | Web Pay | form  $request->email";
                    $trx->receiver_account_no = $account_no;
                    $trx->resolve = 1;
                    $trx->transaction_type = "WEBTRASNSFER";
                    $trx->status = 4;
                    $trx->user_id = $urlkey;
                    $trx->save();

                } else {
                    Transfertransaction::where('account_no', $account_no)->update(['status' => 4, 'note' => '9PSBRESOLVE', 'resolve' => 1]);
                }


                $date = date('d M Y H:i:s');
                $message = $account_no . " | NGN  $amt | $request->email  | $site_name | $date | has been funded";
                //Log::info('User Funded', ['message' => $message]);
                Log::info($message);

                $data['trans'] = $request->sessionid;
                $data['recepit'] = "payment";
                $data['url_page'] = $urluser;
                $data['amount'] = $p_amount;

                return view('paid-success', $data);


            }

        }


        return back()->with('error', 'Something went wrong, please try again or contact our support');


    }


//    public function reslove_wema(request $request)
//    {
//        $message = "Charm Wema Resolve Request ==>>>>" . json_encode($request->all());
//        Log::info($message);
//
////        if ($request->username == "Not Found, Pleas try again") {
////            return back()->with('error', 'Email is invalid, please try again');
////        }
////
////        $pref = Transfertransaction::where('account_no', $request->account_no)->first()->ref ?? null;
////
////
////
////
////        $url = $request->url;
////        $ckstatus = Transfertransaction::where('ref', $pref)->first()->status ?? null;
////
////
////        $cktrx = Transactioncheck::where('session_id', $pref)->first()->session_id ?? null;
////        $email = Transactioncheck::where('session_id', $pref)->first()->email ?? null;
////        $email2 = Transfertransaction::where('ref', $pref)->first()->email ?? null;
////        $fund_amount = Transfertransaction::where('ref', $pref)->first()->amount ?? null;
////
////
////        if($cktrx == null && $pref  == null && $cktrx == null && $pref == null && $cktrx == null){
////            return back()->with('error', "Please check  the wema account  number and try again");
////        }
////
////
////        if ($cktrx != null && $pref != null && $cktrx == $pref && $cktrx == 4) {
////            $date = date('d M Y H:i:s');
////            $site_name = Webkey::where('key', $request->user_id)->first()->site_name ?? null;
////            $message = $request->account_no . " | NGN  $fund_amount | $email  | $site_name | $date | has already been resloved ";
////            send_notification_resolve($message);
////            return back()->with('error', "Transaction has already been funded to $email, Please go back to site to check your wallet");
////
////        }
////
////
////        if ($ckstatus == 4) {
////
////            $date = date('d M Y H:i:s');
////            $site_name = Webkey::where('key', $request->user_id)->first()->site_name ?? null;
////            $message = $request->account_no . " | NGN  $fund_amount | $email  | $site_name | $date | has already been resloved ";
////            send_notification_resolve($message);
////
////            return back()->with('error', "Transaction has already been funded to $email2, Please go back to site to check your wallet");
////        }
////
////
////        if ($ckstatus == null || $ckstatus == 0 || $ckstatus == 3 || $ckstatus == 2) {
////
////            $amount = Transfertransaction::where('account_no', $request->account_no)->first()->amount ?? null;
////            $pemail = Transfertransaction::where('account_no', $request->account_no)->first()->email ?? null;
////            $verify = verifypelpayreslove($pref, $amount);
////
////
////            $order_id = "RESOLVE".random_int(000000,999999);
////
////
////            if ($verify['code'] == 9) {
////                return back()->with('error', 'Transaction failed, please contact your bank to file  dispute');
////            }
////
////            if ($verify['code'] == 5) {
////                return back()->with('error', 'You sent incorrect amount, please wait for refund or contact your bank for refund');
////            }
////
////            if ($verify['code'] == 0) {
////
////                $date = date('d M Y H:i:s');
////                $site_name = Webkey::where('key', $request->user_id)->first()->site_name ?? null;
////                $message =  $verify['errormessage'];
////                send_notification_resolve($message);
////
////                return back()->with('error', 'Something went wrong');
////            }
////
////
////            elseif ($verify['code'] == 4) {
////                $urlkey = Webkey::where('key', $request->user_id)->first()->user_id ?? null;
////                $user = User::where('id', $urlkey)->first();
////
////
////                $svtrx = new Transfertransaction();
////                $svtrx->account_no = $request->account_no;
////                $svtrx->status = 4;
////                $svtrx->amount = $verify['amount'];
////                $svtrx->account_no = $request->account_no;
////                $svtrx->note = "WEMARESOLVE";
////                $svtrx->ref_trans_id = $order_id;
////                $svtrx->user_id = $user->id;
////                $svtrx->email = $pemail;
////                $svtrx->transaction_type = "Resolve";
////                $svtrx->save();
////
////                Transfertransaction::where('ref', $pref)->update(['status' => 4]) ?? null;
////
////
////                $set = Setting::where('id', 1)->first();
////                if ($amount > 15000) {
////                    $p_amount = $verify['amount'] - $set->psb_cap;
////                } else {
////                    $p_amount = $verify['amount'] - $set->psb_charge;
////                }
////
////                $urlkey = Webkey::where('key', $request->user_id)->first()->user_id ?? null;
////
////                //fund Vendor
////                $charge = Setting::where('id', 1)->first()->webpay_transfer_charge;
////                if ($amount <= 100) {
////                    $f_amount = $verify['amount'];
////                } else {
////                    $f_amount = $verify['amount'] - $charge;
////                }
////
////
////
////
////
////
////
////                $urlkey = Webkey::where('key', $request->user_id)->first()->user_id ?? null;
////                $balance = User::where('id', $urlkey)->first()->main_wallet;
////                $user = User::where('id', $urlkey)->first();
////                $url = Webkey::where('key', $request->user_id)->first()->url_fund ?? null;
////                $urluser = Webkey::where('key', $request->user_id)->first()->user_url ?? null;
////
////
////                $user_email = $request->email ?? null;
////                $amount = $f_amount ?? null;
////                $site_name = Webkey::where('key', $request->user_id)->first()->site_name ?? null;
////
////                $trasnaction = new Transaction();
////                $trasnaction->user_id = $urlkey;
////                $trasnaction->e_ref = $request->account_no;
////                $trasnaction->ref_trans_id = $request->account_no;
////                $trasnaction->type = "webpay";
////                $trasnaction->transaction_type = "VirtualFundWallet";
////                $trasnaction->title = "Wallet Funding";
////                $trasnaction->main_type = "Transfer";
////                $trasnaction->credit = $f_amount;
////                $trasnaction->note = "Transaction Successful | Web Pay | form  $email";
////                $trasnaction->fee = $charge ?? 0;
////                $trasnaction->amount = $amount;
////                $trasnaction->e_charges = 0;
////                $trasnaction->enkPay_Cashout_profit = 0;
////                $trasnaction->balance = $balance;
////                $trasnaction->receiver_account_no = $request->account_no;
////                $trasnaction->status = 1;
////                $trasnaction->save();
////
////                User::where('id', $urlkey)->increment('main_wallet', $p_amount);
////
////
////                $date = date('d M Y H:i:s');
////                $message = $request->account_no . " | NGN  $amount | $email  | $site_name | $date | has been funded";
////                Log::info($message);
////
////
////                $type = "wresolve";
////                //fund user
////                $session_id = $request->session_id;
////
////                $fund = credit_user_wallet($url, $user_email, $amount, $order_id, $type, $session_id);
////
////
////
////                $trck = new Transactioncheck();
////                $trck->session_id = $pref;
////                $trck->amount = $verify['amount'];
////                $trck->status = 2;
////                $trck->email = $user_email;
////                $trck->save();
////
////
////                if ($fund == 2) {
////
////                    $date = date('dmy h:i:s');
////                    $message = "Wema Resolve ======> $user_email has been funded NGN$amount \n| 0n $url \n using reslove | $request->account_no on $date";
////                    send_notification_resolve($message);
////
////                    $data['trans'] = $request->account_no;
////                    $data['recepit'] = "payment";
////                    $data['url_page'] = $urluser;
////                    $data['amount'] = $f_amount;
////                    return view('paid-success', $data);
////
////                }
////
////
////            } elseif ($verify['code'] == 5) {
////                return response()->json([
////                    'status' => 'partial_payment',
////                    'redirect_url' => $verify['url']
////                ], 200);
////            } else {
////                return response()->json([
////                    'status' => 'error',
////                    'message' => 'Verification failed',
////                    'data' => $verify
////                ], 400);
////
////            }
////
////
////            $session_id = $request->account_no ?? null;
////            $acct_no = $var->account_no ?? null;
////            $amt = $var['amount'] ?? null;
////            $status = $var['transactionStatus'] ?? null;
////            $amountCollected = $var['amountCollected'];
////
////
////            if ($status == "PartPayment") {
////                return back()->with('error', "Incomplete Amount Received\n, You paid NGN" . $amt . " instead of NGN " . $amountCollected . "\n Note that the funds will be refunded back to your account");
////            }
////
////            if ($status == "Processing") {
////                return back()->with('error', 'We have not confirmed your payment yet its still processing, please try again later');
////            }
////
////            if ($status == "Failed") {
////                $emessage = $var['message'];
////                return back()->with('error', "You pay " . $emessage);
////            }
////
////            if ($status == false) {
////                return back()->with('error', 'Account No Check failed, Kindly verify the Account No  and try again');
////            }
////
////            if ($status == "Successful") {
////
////
////            } else {
////                return back()->with('error', 'Session ID is not found, please check and try again');
////            }
////
////
////            return back()->with('error', 'Resolve Error, Contact admin');
////
////
////        }
//    }


    public function reslove_wema(request $request)
    {

        $message = "Woven Resolve Request ==>>>>" . json_encode($request->all());
        send_notification_resolve($message);

        if ($request->username == "Not Found, Pleas try again") {
            return back()->with('error', 'Email is invalid, please try again');
        }

        $ckstatus = Transfertransaction::where('session_id', $request->session_id)->first()->status ?? null;
        $email = Transfertransaction::where('session_id', $request->session_id)->first()->email ?? null;



        $get_email = Transactioncheck::where('session_id', $request->session_id)->first()->email ?? null;
        if($get_email != null){
            return back()->with('error', "Transaction has already been funded to $get_email, Please go back to site to check your wallet");
        }



        if ($ckstatus == 4) {
            return back()->with('error', "Transaction has already been funded to $email, Please go back to site to check your wallet");
        }


        if ($ckstatus == null || $ckstatus == 0 || $ckstatus == 3 || $ckstatus == 2) {

            $status = Transfertransaction::where('session_id', $request->session_id)->first()->status ?? null;
            $email = Transfertransaction::where('session_id', $request->session_id)->first()->email ?? null;
            $account_no = Transfertransaction::where('session_id', $request->session_id)->first()->account_no ?? null;
            $order_id = Transfertransaction::where('session_id', $request->session_id)->first()->ref_trans_id ?? null;


            if ($status == 4) {
                return back()->with('error', "Transaction has already been funded to $email, Please go back to site to check your wallet");
            }

            $ref = Transfertransaction::where('session_id', $request->session_id)->first()->account_no ?? null;

            $ref = $request->session_id;

            $var = verify_payment_woven($ref);

            if ($var == 0) {
                return back()->with('error', 'Something went wrong');
            }

            if ($var == 4) {
                return back()->with('error', 'Reversal Failed to your bank account, Please contact admin');
            }

            if ($var == 5) {
                return back()->with('error', 'You paid incorrect amount, Transaction will be reversed to your bank account');
            }

            if ($var == 6) {
                return back()->with('error', 'Transaction has been reversed to your bank account');
            }

            if ($var == 9) {
                return back()->with('error', 'Transaction not found');
            }


            $session_id = $request->account_no ?? null;
            $acct_no = $var->account_no ?? null;
            $amt = $var['amount'] ?? null;
            $wstatus = $var['transactionStatus'] ?? null;


            if ($wstatus == "Successful") {

                $urlkey = Webkey::where('key', $request->user_id)->first()->user_id ?? null;
                $user = User::where('id', $urlkey)->first();


                $ckttr = Transfertransaction::where('session_id', $request->session_id)->first() ?? null;
                if ($ckttr == null) {
                    $svtrx = new Transfertransaction();
                    $svtrx->account_no = $acct_no;
                    $svtrx->session_id = $request->session_id;
                    $svtrx->status = 4;
                    $svtrx->amount = $amt;
                    $svtrx->note = "WOVENRESOLVE";
                    $svtrx->user_id = $user->id;
                    $svtrx->transaction_type = "Resolve";
                    $svtrx->save();
                } else {

                    Transfertransaction::where('session_id', $request->session_id)->update([
                        "note" => "WOVENRESOLVE",
                        "account_no" => $acct_no,
                        "status" => 4,
                    ]);

                }


                $urlkey = Webkey::where('key', $request->user_id)->first()->user_id ?? null;

                //fund Vendor

                $set = Setting::where('id', 1)->first();
                if ($amt > 15000) {
                    $f_amount = $amt - $set->psb_cap;
                } else {
                    $f_amount = $amt - $set->psb_charge;
                }


                $urlkey = Webkey::where('key', $request->user_id)->first()->user_id ?? null;
                $balance = User::where('id', $urlkey)->first()->main_wallet;
                $user = User::where('id', $urlkey)->first();
                $url = Webkey::where('key', $request->user_id)->first()->url_fund ?? null;
                $urluser = Webkey::where('key', $request->user_id)->first()->user_url ?? null;


                $user_email = $request->email ?? null;
                $amount = $f_amount ?? null;
                $order_id = $session_id ?? null;
                $site_name = Webkey::where('key', $request->user_id)->first()->site_name ?? null;

                $trasnaction = new Transaction();
                $trasnaction->user_id = $urlkey;
                $trasnaction->e_ref = $request->account_no;
                $trasnaction->ref_trans_id = $order_id;
                $trasnaction->type = "webpay";
                $trasnaction->transaction_type = "VirtualFundWallet";
                $trasnaction->title = "Wallet Funding";
                $trasnaction->main_type = "Transfer";
                $trasnaction->credit = $f_amount;
                $trasnaction->note = "Transaction Successful | Web Pay | form  $request->email";
                $trasnaction->receiver_account_no = $account_no;
                $trasnaction->fee = $charge ?? 0;
                $trasnaction->amount = $amt;
                $trasnaction->e_charges = 0;
                $trasnaction->enkPay_Cashout_profit = 0;
                $trasnaction->balance = $balance;
                $trasnaction->status = 1;
                $trasnaction->save();

                User::where('id', $urlkey)->increment('main_wallet', $f_amount);


                $date = date('d M Y H:i:s');
                $message = $acct_no . " | NGN  $amt | $request->email  | $site_name | $date | has been funded";
                Log::info($message);


                $type = "wresolve";
                //fund user
                $session_id = $request->session_id;
                $fund = credit_user_wallet($url, $user_email, $amount, $order_id, $type, $session_id, $account_no);

                if ($fund == 2) {

                    $date = date('dmy h:i:s');
                    $message = "Wema Resolve ======> $user_email has been funded NGN$amount \n| 0n $url \n using reslove | $account_no on $date";
                    send_notification_resolve($message);

                    $data['trans'] = $order_id;
                    $data['recepit'] = "payment";
                    $data['url_page'] = $urluser;
                    $data['amount'] = $f_amount;
                    return view('paid-success', $data);

                }

            }
        } else {
            return back()->with('error', 'Session ID is not found, please check and try again');
        }


        return back()->with('error', 'Resolve Error, Contact admin');


    }

    public
    function open_ticket(request $request)
    {

        $data['ticket'] = ResolveOrder::where('id', $request->id)->first() ?? null;
        $email = ResolveOrder::where('id', $request->id)->first() ?? null;

        if ($email != null) {
            $data['similar'] = ResolveOrder::where('email', $email->email)->get() ?? null;
        }

        return view('open-ticket', $data);

    }


    public
    function edit_ticket(request $request)
    {

        $data['ticket'] = ResolveOrder::where('id', $request->id)->first() ?? null;

        return view('edit-ticket', $data);

    }


    public
    function edit_now(request $request)
    {

        ResolveOrder::where('id', $request->id)->update([

            'email' => $request->email,
            'd_amount' => $request->d_amount,
            'r_amount' => $request->r_amount,
            'status' => $request->status

        ]);


        return redirect($url)->with('message', 'Ticket Updated successfully');


    }


}
