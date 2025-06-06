<?php

use App\Models\AccountInfo;
use App\Models\GlobusAccount;
use App\Models\PalmpayAccount;
use App\Models\Setting;
use App\Models\Transaction;
use App\Models\Transactioncheck;
use App\Models\Transfertransaction;
use App\Models\Ttmfb;
use App\Models\User;
use App\Models\VirtualAccount;
use App\Models\Webhook;
use App\Models\Webkey;
use App\Models\Webtransfer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;


if (!function_exists('refxx')) {
    function refxx()
    {
        $refs = date('YmdHis');
        return $refs;
    }
}


if (!function_exists('refrence_code')) {

    function refrence_code()
    {

        $ref = "ENK|API" . random_int(1000000, 999999999) . date('his');
        return $ref;
    }
}

if (!function_exists('send_notification_resolve')) {

    function send_notification_resolve($message)
    {

        $boturl = env('BOTURLRESOLVE');
        $chat_id = env('BOTID');

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $boturl,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'chat_id' => $chat_id,
                'text' => $message,

            ),
            CURLOPT_HTTPHEADER => array(),
        ));

        $var = curl_exec($curl);
        curl_close($curl);

        $var = json_decode($var);
    }


    if (!function_exists('create_p_account')) {

        function create_p_account($name, $bvn)
        {

            $curl = curl_init();
            $data = array(
                "account_name" => $name,
                "bvn" => $bvn,
            );

            $databody = json_encode($data);
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://vps.providusbank.com/vps/api/appdevapi/api/PiPCreateReservedAccountNumber',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => $databody,
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json',
                    'Accept: application/json',
                    'Client-Id: dGVzdF9Qcm92aWR1cw==',
                    'X-Auth-Signature: b900d355dd66f3507c775ba52bcd3ba6b6f3f4093448ea24f3aa6500bbbce5c1e63c12214acd08d8057b7bec36d37a8f66a504a1b7a8df54af00ba6ba825a9c4',
                ),
            ));

            $var = curl_exec($curl);

            curl_close($curl);
            $var = json_decode($var);

            // dd($var);

            $status = $var->responseCode ?? null;
            $p_acct_no = $var->account_number ?? null;
            $p_acct_name = $var->account_name ?? null;

            $pbank = "PROVIDUS BANK";

            if ($status == 00) {

                $create = new VirtualAccount();
                $create->v_account_no = $p_acct_no;
                $create->v_account_name = $p_acct_name;
                $create->v_bank_name = $pbank;
                $create->save();

                $user = User::find(Auth::id());
                $user->p_account_no = $p_acct_no;
                $user->p_account_name = $p_acct_name;
                $user->save();


                return response()->json(['account_no' => $p_acct_no, 'account_name' => $p_acct_name]);

                $message = "Account Created on Providus";
                Log::info($message);
            }


            $message = "Error from Providus Account Creation | Account Created on Providus";
            Log::info($message);
        }
    }


    if (!function_exists('create_dynamic_p_account')) {

        function create_dynamic_p_account($name, $business_id)
        {


            $client_id = env('CLIENTID');
            $hashkey = env('HASHKEY');


            $curl = curl_init();
            $data = array(
                "account_name" => $name,
            );

            $databody = json_encode($data);
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://vps.providusbank.com/vps/api/PiPCreateDynamicAccountNumber',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => $databody,
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json',
                    'Accept: application/json',
                    "Client-Id: $client_id",
                    "X-Auth-Signature: $hashkey",
                ),
            ));

            $var = curl_exec($curl);

            curl_close($curl);
            $var = json_decode($var);


            $status = $var->responseCode ?? null;
            $p_acct_no = $var->account_number ?? null;
            $p_acct_name = $var->account_name ?? null;


            $pbank = "PROVIDUS BANK";

            $usr = User::where('business_id', $business_id)->first();

            if ($status == 00) {

                $create = new VirtualAccount();
                $create->v_account_no = $p_acct_no;
                $create->v_account_name = $p_acct_name;
                $create->v_bank_name = $pbank;
                $create->business_id = $business_id ?? null;
                $create->save();

                // $user = User::find(Auth::id());
                // $user->p_account_no = $p_acct_no;
                // $user->p_account_name = $p_acct_name;
                // $user->save();

                $message = "Account Created on Providus";
                Log::info($message);


                $data_array = array();
                $data_array[0] = [
                    "account_no" => $p_acct_no,
                    "amount_name" => $p_acct_name,
                ];


                return $data_array;
            }


            $message = "Error from Providus Account Creation | Account Created on Providus";
            Log::info($message);
        }
    }
}


if (!function_exists('send_notification')) {

    function send_notification($message)
    {

        $token = env('BOTURL');
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $token,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'chat_id' => env('BOTID'),
                'text' => $message,
            ),
            CURLOPT_HTTPHEADER => array(),
        ));

        $var = curl_exec($curl);
        curl_close($curl);

        $var = json_decode($var);
    }


    if (!function_exists('create_p_account')) {

        function create_p_account($name, $bvn)
        {

            $curl = curl_init();
            $data = array(
                "account_name" => $name,
                "bvn" => $bvn,
            );

            $databody = json_encode($data);
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://vps.providusbank.com/vps/api/appdevapi/api/PiPCreateReservedAccountNumber',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => $databody,
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json',
                    'Accept: application/json',
                    'Client-Id: dGVzdF9Qcm92aWR1cw==',
                    'X-Auth-Signature: b900d355dd66f3507c775ba52bcd3ba6b6f3f4093448ea24f3aa6500bbbce5c1e63c12214acd08d8057b7bec36d37a8f66a504a1b7a8df54af00ba6ba825a9c4',
                ),
            ));

            $var = curl_exec($curl);

            curl_close($curl);
            $var = json_decode($var);

            //  dd($var);

            $status = $var->responseCode ?? null;
            $p_acct_no = $var->account_number ?? null;
            $p_acct_name = $var->account_name ?? null;

            $pbank = "PROVIDUS BANK";

            if ($status == 00) {

                $create = new VirtualAccount();
                $create->v_account_no = $p_acct_no;
                $create->v_account_name = $p_acct_name;
                $create->v_bank_name = $pbank;
                $create->save();

                $user = User::find(Auth::id());
                $user->p_account_no = $p_acct_no;
                $user->p_account_name = $p_acct_name;
                $user->save();


                return response()->json(['account_no' => $p_acct_no, 'account_name' => $p_acct_name]);

                $message = "Account Created on Providus";
                Log::info($message);
            }


            $message = "Error from Providus Account Creation | Account Created on Providus";
            Log::info($message);
        }
    }


    if (!function_exists('create_dynamic_p_account')) {

        function create_dynamic_p_account($name, $business_id)
        {


            $client_id = env('CLIENTID');
            $hashkey = env('HASHKEY');


            $curl = curl_init();
            $data = array(
                "account_name" => $name,
            );

            $databody = json_encode($data);
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://vps.providusbank.com/vps/api/PiPCreateDynamicAccountNumber',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => $databody,
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json',
                    'Accept: application/json',
                    "Client-Id: $client_id",
                    "X-Auth-Signature: $hashkey",
                ),
            ));

            $var = curl_exec($curl);

            curl_close($curl);
            $var = json_decode($var);


            $status = $var->responseCode ?? null;
            $p_acct_no = $var->account_number ?? null;
            $p_acct_name = $var->account_name ?? null;


            $pbank = "PROVIDUS BANK";

            $usr = User::where('business_id', $business_id)->first();

            if ($status == 00) {

                $create = new VirtualAccount();
                $create->v_account_no = $p_acct_no;
                $create->v_account_name = $p_acct_name;
                $create->v_bank_name = $pbank;
                $create->business_id = $business_id ?? null;
                $create->save();

                // $user = User::find(Auth::id());
                // $user->p_account_no = $p_acct_no;
                // $user->p_account_name = $p_acct_name;
                // $user->save();

                $message = "Account Created on Providus";
                Log::info($message);


                $data_array = array();
                $data_array[0] = [
                    "account_no" => $p_acct_no,
                    "amount_name" => $p_acct_name,
                ];


                return $data_array;
            }


            $message = "Error from Providus Account Creation | Account Created on Providus";
            Log::info($message);
        }
    }
}

if (!function_exists('send_notification3')) {

    function send_notification3($message)
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.telegram.org/bot7299035085:AAFwYaaTTQBnv6TBC-fMvZAyL1FQ-0oFYBY/sendMessage?chat_id=1316552414',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'chat_id' => "1316552414",
                'text' => $message,


            ),
            CURLOPT_HTTPHEADER => array(),
        ));

        $var = curl_exec($curl);
        curl_close($curl);

        $var = json_decode($var);
    }


    if (!function_exists('create_p_account')) {

        function create_p_account($name, $bvn)
        {

            $curl = curl_init();
            $data = array(
                "account_name" => $name,
                "bvn" => $bvn,
            );

            $databody = json_encode($data);
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://vps.providusbank.com/vps/api/appdevapi/api/PiPCreateReservedAccountNumber',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => $databody,
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json',
                    'Accept: application/json',
                    'Client-Id: dGVzdF9Qcm92aWR1cw==',
                    'X-Auth-Signature: b900d355dd66f3507c775ba52bcd3ba6b6f3f4093448ea24f3aa6500bbbce5c1e63c12214acd08d8057b7bec36d37a8f66a504a1b7a8df54af00ba6ba825a9c4',
                ),
            ));

            $var = curl_exec($curl);

            curl_close($curl);
            $var = json_decode($var);

            // dd($var);

            $status = $var->responseCode ?? null;
            $p_acct_no = $var->account_number ?? null;
            $p_acct_name = $var->account_name ?? null;

            $pbank = "PROVIDUS BANK";

            if ($status == 00) {

                $create = new VirtualAccount();
                $create->v_account_no = $p_acct_no;
                $create->v_account_name = $p_acct_name;
                $create->v_bank_name = $pbank;
                $create->save();

                $user = User::find(Auth::id());
                $user->p_account_no = $p_acct_no;
                $user->p_account_name = $p_acct_name;
                $user->save();


                return response()->json(['account_no' => $p_acct_no, 'account_name' => $p_acct_name]);

                $message = "Account Created on Providus";
                Log::info($message);
            }


            $message = "Error from Providus Account Creation | Account Created on Providus";
            Log::info($message);
        }
    }


    if (!function_exists('create_dynamic_p_account')) {

        function create_dynamic_p_account($name, $business_id)
        {


            $client_id = env('CLIENTID');
            $hashkey = env('HASHKEY');


            $curl = curl_init();
            $data = array(
                "account_name" => $name,
            );

            $databody = json_encode($data);
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://vps.providusbank.com/vps/api/PiPCreateDynamicAccountNumber',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => $databody,
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json',
                    'Accept: application/json',
                    "Client-Id: $client_id",
                    "X-Auth-Signature: $hashkey",
                ),
            ));

            $var = curl_exec($curl);

            curl_close($curl);
            $var = json_decode($var);


            $status = $var->responseCode ?? null;
            $p_acct_no = $var->account_number ?? null;
            $p_acct_name = $var->account_name ?? null;


            $pbank = "PROVIDUS BANK";

            $usr = User::where('business_id', $business_id)->first();

            if ($status == 00) {

                $create = new VirtualAccount();
                $create->v_account_no = $p_acct_no;
                $create->v_account_name = $p_acct_name;
                $create->v_bank_name = $pbank;
                $create->business_id = $business_id ?? null;
                $create->save();

                // $user = User::find(Auth::id());
                // $user->p_account_no = $p_acct_no;
                // $user->p_account_name = $p_acct_name;
                // $user->save();

                $message = "Account Created on Providus";
                Log::info($message);


                $data_array = array();
                $data_array[0] = [
                    "account_no" => $p_acct_no,
                    "amount_name" => $p_acct_name,
                ];


                return $data_array;
            }


            $message = "Error from Providus Account Creation | Account Created on Providus";
            Log::info($message);
        }
    }
}


if (!function_exists('create_p_account')) {

    function create_p_account($name, $bvn, $business_id)
    {

        $curl = curl_init();
        $data = array(
            "account_name" => $name,
            "bvn" => $bvn,
        );

        $databody = json_encode($data);
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://vps.providusbank.com/vps/api/appdevapi/api/PiPCreateReservedAccountNumber',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $databody,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Accept: application/json',
                'Client-Id: dGVzdF9Qcm92aWR1cw==',
                'X-Auth-Signature: b900d355dd66f3507c775ba52bcd3ba6b6f3f4093448ea24f3aa6500bbbce5c1e63c12214acd08d8057b7bec36d37a8f66a504a1b7a8df54af00ba6ba825a9c4',
            ),
        ));

        $var = curl_exec($curl);

        curl_close($curl);
        $var = json_decode($var);

        // dd($var);

        $status = $var->responseCode ?? null;
        $p_acct_no = $var->account_number ?? null;
        $p_acct_name = $var->account_name ?? null;

        $pbank = "PROVIDUS BANK";

        if ($status == 00) {

            $create = new VirtualAccount();
            $create->v_account_no = $p_acct_no;
            $create->v_account_name = $p_acct_name;
            $create->v_bank_name = $pbank;
            $create->save();

            $user = User::find(Auth::id());
            $user->p_account_no = $p_acct_no;
            $user->p_account_name = $p_acct_name;
            $user->save();


            return response()->json(['account_no' => $p_acct_no, 'account_name' => $p_acct_name]);

            $message = "Account Created on Providus";
            Log::info($message);
        }


        $message = "Error from Providus Account Creation | Account Created on Providus";
        Log::info($message);
    }
}


if (!function_exists('create_dynamic_p_account')) {

    function create_dynamic_p_account($name, $business_id)
    {
        $client_id = env('CLIENTID');
        $hashkey = env('HASHKEY');


        $curl = curl_init();
        $data = array(
            "account_name" => $name,
        );

        $databody = json_encode($data);
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://vps.providusbank.com/vps/api/PiPCreateDynamicAccountNumber',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $databody,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Accept: application/json',
                "Client-Id: $client_id",
                "X-Auth-Signature: $hashkey",
            ),
        ));

        $var = curl_exec($curl);

        curl_close($curl);
        $var = json_decode($var);

        // dd($var);

        $status = $var->responseCode ?? null;
        $p_acct_no = $var->account_number ?? null;
        $p_acct_name = $var->account_name ?? null;

        $pbank = "PROVIDUS BANK";

        if ($status == 00) {

            $create = new VirtualAccount();
            $create->v_account_no = $p_acct_no;
            $create->v_account_name = $p_acct_name;
            $create->v_bank_name = $pbank;
            $create->save();

            $user = User::find(Auth::id());
            $user->p_account_no = $p_acct_no;
            $user->p_account_name = $p_acct_name;
            $user->save();


            return response()->json(['account_no' => $p_acct_no, 'account_name' => $p_acct_name]);

            $message = "Account Created on Providus";
            Log::info($message);
        }


        $message = "Error from Providus Account Creation | Account Created on Providus";
        Log::info($message);
    }
}


if (!function_exists('timestamp')) {

    function timestamp()
    {
        return substr(strval(time()), 0, 10);
    }

    function sha512($message)
    {
        return hash('sha512', $message);
    }
}

if (!function_exists('trx')) {

    function trx()
    {

        $refcode = "CARD" . random_int(100, 999) . date('YmdHis');
        return $refcode;
    }
}

if (!function_exists('trxref')) {

    function trxref()
    {

        $refcode = "REFERALPAY" . random_int(100, 999) . date('YmdHis');
        return $refcode;
    }
}

if (!function_exists('resolve_bank')) {

    function resolve_bank($bank_code, $account_number)
    {
        $set = Setting::where('id', 1)->first();

        if ($set->bank == 'ttmfb') {


            $customer_name = AccountInfo::where('account_no', $account_number)
                ->where('code', $bank_code)->first()->customer_name ?? null;

            if ($customer_name != null) {
                return $customer_name;
            }


            $username = env('MUSERNAME');
            $prkey = env('MPRKEY');
            $sckey = env('MSCKEY');

            $unixTimeStamp = timestamp();
            $sha = sha512($unixTimeStamp . $prkey);
            $authHeader = 'magtipon ' . $username . ':' . base64_encode(hex2bin($sha));


            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => "http://magtipon.buildbankng.com/api/v1/bank/$bank_code/account/$account_number",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
                //CURLOPT_POSTFIELDS => $body,
                CURLOPT_HTTPHEADER => array(
                    "Authorization: $authHeader",
                    "Timestamp: $unixTimeStamp",
                    'Content-Type: application/json',
                ),
            ));

            $var = curl_exec($curl);
            curl_close($curl);
            $var = json_decode($var);


            $customer_name = $var->AccountName ?? null;
            $error = $var->error->message ?? null;
            $status = $var->ResponseCode ?? null;

            $bankName = Ttmfb::where('code', $bank_code)->first()->bankName;


            if ($status == 10002) {

                return "Account does not match with bank";
            }

            if ($status == 90000) {

                $sv = new AccountInfo();
                $sv->account_no = $account_number;
                $sv->code = $bank_code;
                $sv->bankName = $bankName;
                $sv->customer_name = $customer_name;
                $sv->save();

                return $customer_name;
            } else {

                return $var->ResponseDescription ?? "Account does not match with bank";
            }
        }

        if ($set->bank == 'manuel') {

            $databody = array(

                'accountNumber' => $account_number,
                'institutionCode' => $bank_code,
                'channel' => "Bank",

            );

            $body = json_encode($databody);
            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://api.errandpay.com/epagentservice/api/v1/AccountNameVerification',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => $body,
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json',
                ),
            ));

            $var = curl_exec($curl);
            curl_close($curl);
            $var = json_decode($var);

            $customer_name = $var->data->name ?? null;
            $error = $var->error->message ?? null;

            $status = $var->code ?? null;

            if ($status == 200) {

                return $customer_name;
            }

            return $error;
        }

        if ($set->bank == 'woven') {


            $api = env('WOVENKEY');

            $databody = array(
                'account_number' => $account_number,
                'bank_code' => $bank_code,
            );

            $body = json_encode($databody);
            $curl = curl_init();


            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://api.woven.finance/v2/api/nuban/enquiry",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => $body,
                CURLOPT_HTTPHEADER => array(
                    "api_secret: $api",
                    'Content-Type: application/json',
                ),
            ));

            $var = curl_exec($curl);
            curl_close($curl);
            $var = json_decode($var);

            $error = $var->message ?? null;
            $status = $var->status ?? null;
            $customer_name = $var->data->account_name ?? null;
            if ($status == "success") {
                return $customer_name;
            }

            return $error;
        }


        if ($set->bank == 'vfd') {


            $customer_name = AccountInfo::where('account_no', $account_number)
                ->where('code', $bank_code)->first()->customer_name ?? null;

            if ($customer_name != null) {
                return $customer_name;
            }


            if (!empty($customer_name) || $customer_name == null) {

                $databody = array(

                    'accountNumber' => $account_number,
                    'institutionCode' => $bank_code,
                    'channel' => "Bank",

                );

                $body = json_encode($databody);
                $curl = curl_init();

                curl_setopt_array($curl, array(
                    CURLOPT_URL => 'https://api.errandpay.com/epagentservice/api/v1/AccountNameVerification',
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'POST',
                    CURLOPT_POSTFIELDS => $body,
                    CURLOPT_HTTPHEADER => array(
                        'Content-Type: application/json',
                    ),
                ));

                $var = curl_exec($curl);
                curl_close($curl);
                $var = json_decode($var);

                $customer_name = $var->data->name ?? null;
                $error = $var->error->message ?? null;

                $status = $var->code ?? null;

                $bankName = Ttmfb::where('code', $bank_code)->first()->bankName;

                if ($status == 200) {

                    $sv = new AccountInfo();
                    $sv->account_no = $account_number;
                    $sv->code = $bank_code;
                    $sv->bankName = $bankName;
                    $sv->customer_name = $customer_name;
                    $sv->save();

                    return $customer_name;
                }

                return $error;
            }
        }
    }
}


if (!function_exists('get_services')) {

    function get_services($code)
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api-service.vtpass.com/api/get-international-airtime-product-types?code=$code",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',

        ));

        $var = curl_exec($curl);

        curl_close($curl);
        $var = json_decode($var);


        $status = $var->response_description ?? null;
        $service_code = $var->content ?? null;


        if ($status == 000) {

            foreach ($service_code as $product) {

                if ($product->product_type_id == 1 || $product->product_type_id == 2) {

                    $curl = curl_init();
                    curl_setopt_array($curl, array(
                        CURLOPT_URL => "https://api-service.vtpass.com/api/get-international-airtime-operators?code=$code&product_type_id=$product->product_type_id",
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_ENCODING => '',
                        CURLOPT_MAXREDIRS => 10,
                        CURLOPT_TIMEOUT => 0,
                        CURLOPT_FOLLOWLOCATION => true,
                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                        CURLOPT_CUSTOMREQUEST => 'GET',

                    ));

                    $var = curl_exec($curl);

                    curl_close($curl);
                    $var = json_decode($var);
                    $status = $var->response_description ?? null;
                    $result = $var->content;


                    if ($status == 000) {

                        $data = [];
                        foreach ($var->content as $item) {
                            $data[] = [
                                'operator_id' => $item->operator_id,
                                'name' => $item->name,
                                'product_id' => $product->product_type_id,
                            ];
                        }

                        return $data;
                    } else {

                        return false;
                    }
                }
            }
        } else {
            return false;
        }
    }


    function get_services_cost($operator_id)
    {


        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api-service.vtpass.com/api/service-variations?serviceID=foreign-airtime&operator_id=$operator_id&product_type_id=1",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',

        ));

        $var = curl_exec($curl);

        curl_close($curl);
        $var = json_decode($var);
        $status = $var->response_description ?? null;
        $variations = $var->content->variations ?? null;


        if ($status == 000) {


            $data = [];
            foreach ($variations as $key => $value) {

                $percentageAmount = (50 / 100) * $value->variation_rate;


                $data[] = array(
                    "product_id" => $value->variation_code,
                    "product_name" => $value->name,
                    "min" => $value->variation_amount_min,
                    "max" => $value->variation_amount_max,
                    "rate" => $value->variation_rate + $percentageAmount,
                    "fixed_price" => $value->fixedPrice,

                );
            }

            return $data;
        } else {

            return false;
        }
    }
}


if (!function_exists('buy_airtime')) {

    function buy_airtime($country_code, $service_id, $amount, $phone, $product_id, $rate, $operator_id)
    {

        $code = $country_code;
        $service = get_services($code);
        $p_id = $service['0']['product_id'];
        $request_id = refxx();


        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://sandbox.vtpass.com/api/pay',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'request_id' => $request_id,
                'serviceID' => 'foreign-airtime',
                'billersCode' => $phone,
                'amount' => $amount,
                'variation_code' => $product_id,
                'phone' => $phone,
                'operator_id' => $operator_id,
                'country_code' => $country_code,
                'product_type_id' => $p_id,
                'email' => Auth::user()->email ?? "test@email.com",

            ),
            CURLOPT_HTTPHEADER => array(
                'api-key: e334b8de50dfd7dca64c02c3b46e3c1a',
                'secret-key: SK_3147aff98c2584bf32a858e9525fbe65d4c17c196ad'
            ),
        ));

        $var = curl_exec($curl);
        curl_close($curl);
        $var = json_decode($var);
        $status = $var->code ?? null;


        if ($status == 000) {

            $data['status'] = true;
            $data['amount'] = $var->content->transactions->total_amount;
            $data['transactionId'] = $var->content->transactions->transactionId;

            return $data;
        }
    }
}


if (!function_exists('check_balance')) {

    function check_balance($amount)
    {

        if (Auth::user()->main_wallet < $amount) {
            return false;
        } else {
            return true;
        }
    }
}


if (!function_exists('charge_wallet')) {


    function charge_wallet($amount)
    {

        if (Auth::user()->main_wallet < $amount) {
            User::where('id', Auth::id())->decrement('main_wallet', $amount);
            return true;
        } else {
            return true;
        }
    }
}


if (!function_exists('tokenkey')) {

    function tokenkey()
    {

        $url = env('PELPAYURL');


        $databody = array(
            'clientId' => env('PELPAYCLIENTID'),
            'clientSecret' => env('PELPAYCLIENTSECRET'),

        );


        $post_data = json_encode($databody);


        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "$url/api/Account/login",
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
        return $var->access_token ?? null;

    }


    function pre_pay($amtt, $first_name, $last_name, $tremail, $ref, $userId, $txid, $keyrr)
    {


        $recepit = "Invoice#" . random_int(0000, 9999);


        $token = tokenkey();
        $url = env('PELPAYURL');
        $databody = array(
            "amount" => $amtt ?? 200,
            "currency" => "NGN",
            "merchantRef" => $ref,
            "narration" => $recepit,
            "callBackUrl" => url('') . "/response",
            "notificationUrl" => url('') . "/api/charm/callback",
            "splitCode" => "",
            "shouldTokenizeCard" => false,
            "customer" => array(
                "customerId" => $userId,
                "customerLastName" => $first_name,
                "customerFirstName" => $last_name,
                "customerEmail" => $tremail ?? "test@email.com",
                "customerPhoneNumber" => "",
                "customerAddress" => "",
                "customerCity" => "",
                "customerStateCode" => "",
                "customerPostalCode" => "",
                "customerCountryCode" => "NG"
            ),
//
//            "channels" => array(
//                0 => "Card",
//                1 =>"BankTransfer",
//                2 => "USSD"
//            ),


            "integrationKey" => env('PELPAYTOKEN'),
            "mcc" => 0,
            "merchantDescriptor" => $ref
        );


        $post_data = json_encode($databody);

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "$url/Payment/advice",
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
                "Authorization: Bearer $token"
            ),
        ));

        $var = curl_exec($curl);

        curl_close($curl);
        $var = json_decode($var);

        $req = $var->requestSuccessful ?? null;

        if ($req == null) {
            return null;
        }

        $data['status'] = $var->responseData->status ?? null;
        $data['adviceReference'] = $var->responseData->adviceReference ?? null;
        $data['paymentUrl'] = $var->responseData->paymentUrl ?? null;
        $ref = $data['adviceReference'];
        return $data;


    }
}


function verifypsbtelegram($accountNo)
{

    try {


        $ckt = Transactioncheck::where('account_no', $accountNo)->first() ?? null;
        if ($ckt != null) {
            return ['code' => 4];
        }


        $ckstatus = Transfertransaction::where('account_no', $accountNo)->first()->status ?? null;

//        if ($ckstatus == null) {
//            return [
//                'code' => 91,
//                'account' => $accountNo,
//                'st' => $ckstatus,
//            ];
//
//        }


        if ($ckstatus == "4" || $ckstatus == 4) {
            return [
                'code' => 4
            ];
        }


        if ($ckstatus == 0 || $ckstatus == "0") {
            $status = Transfertransaction::where('account_no', $accountNo)->first()->status ?? null;
            $email = Transfertransaction::where('account_no', $accountNo)->first()->email ?? null;
            $order_idd = Transfertransaction::where('account_no', $accountNo)->first()->ref_trans_id ?? null;


            $curl = curl_init();
            $data = array(
                'account_no' => $accountNo,
            );
            $post_data = json_encode($data);

            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://etopagency.com/api/account-check',
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
                return ['code' => -1, 'message' => "Transaction not found."];
            }

//            if ($resolve == 1) {
//                return ['code' => 4];
//            }


            $trxs = Transfertransaction::where('account_no', $accountNo)->first() ?? null;
            $urlkey = Webkey::where('key', $trxs->key)->first()->user_id ?? null;
            $balance = User::where('id', $trxs->user_id)->first()->main_wallet;
            $user = User::where('id', $trxs->user_id)->first();
            $url = Webkey::where('key', $trxs->key)->first()->url_fund ?? null;
            $urluser = Webkey::where('key', $trxs->key)->first()->user_url ?? null;


            $user_email = $trxs->email ?? null;
            $site_name = Webkey::where('key', $trxs->key)->first()->site_name ?? null;


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
            $fund = credit_user_wallet($url, $user_email, $amount, $order_id, $type, $session_id, $account_no);
            $ramount = $p_amount - 100;


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
                $trasnaction->note = "Resolve Transaction Successful | Web Pay | form  $";
                $trasnaction->receiver_account_no = $account_no;
                $trasnaction->fee = $charge ?? 0;
                $trasnaction->amount = $amt;
                $trasnaction->e_charges = 0;
                $trasnaction->enkPay_Cashout_profit = 0;
                $trasnaction->balance = $balance;
                $trasnaction->status = 1;
                $trasnaction->save();

                User::where('id', $urlkey)->increment('main_wallet', $ramount);

                $trxa = Transfertransaction::where('account_no', $account_no)->first() ?? null;
                if ($trxa == null) {
                    $trx = new Transfertransaction();
                    $trx->account_no = $accountNo;
                    $trx->amount = $p_amount;
                    $trx->ref = $order_id;
                    $trx->ref_trans_id = $order_id;
                    $trx->email = $trxs->email;
                    $trx->session_id = $session_id;
                    $trx->bank = "9PSBRESLOVE";
                    $trx->note = "Resolve Transaction Successful | Web Pay | form  $trxs->email";
                    $trx->receiver_account_no = $accountNo;
                    $trx->resolve = 1;
                    $trx->transaction_type = "WEBTRASNSFER";
                    $trx->status = 4;
                    $trx->user_id = $urlkey;
                    $trx->save();

                } else {
                    Transfertransaction::where('account_no', $accountNo)->update(['status' => 4, 'note' => '9PSBRESOLVE', 'resolve' => 1]);
                }
                Webtransfer::where('trans_id', $trxs->trans_id)->update(['status' => 4]);
                    Webhook::where('account_no', $accountNo)->delete() ?? null;


                $date = date('d M Y H:i:s');
                $message = $account_no . " | RESOLVE BOT | NGN  $amt | $trxs->email  | $site_name | $date | has been funded";
                Log::info($message);


                $message = "Business funded | Resolve BOT | $account_no | 9psb | $ramount | $user->first_name " . " " . $user->last_name;
                Log::info($message);

                return ['code' => 2, 'message' => "Transaction completed"];

            }

            return ['code' => 91, 'message' => "Account not found"];


        }


    } catch
    (\Exception $e) {
        return ['code' => -1, 'message' => $e->getMessage()];
    }

    return ['code' => -1, 'message' => "Something went wrong"];


}


function verifypelpay($pref)
{

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


    if ($var->requestSuccessful == true) {

        if ($var->responseData->transactionStatus == "Processing") {
            return ['code' => 0];

        }

        if ($var->responseData->transactionStatus == "Failed") {
            return ['code' => 9];

        }

        if ($var->responseData->transactionStatus == "Successful" && $var->responseData->message == "Successful") {

            try {

                $acc_no = Transfertransaction::where('ref', $pref)->first()->account_no ?? null;
                $status = Transfertransaction::where('account_no', $acc_no)->first()->status ?? null;
                $trx = Transfertransaction::where('account_no', $acc_no)->first() ?? null;
                $amount = Transfertransaction::where('account_no', $acc_no)->first()->amount ?? null;
                $pstatus = Transfertransaction::where('ref', $pref)->first()->status ?? null;


                if ($pstatus == 4) {
                    return [
                        'code' => 4
                    ];

                }


                if ($status == 4) {

                    $ref = $trx->ref_trans_id;
                    $url = url('') . "/success?trans_id=$ref&amount=$amount";
                    return [
                        'url' => $url,
                        'code' => 4
                    ];

                }


                $trx = Transfertransaction::where('account_no', $acc_no)
                    ->where([
                        'status' => 0
                    ])->first() ?? null;


                if ($trx == null) {

                    return response()->json([
                        'status' => false,
                        'message' => "Account Not found in our database",
                    ]);

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
                        Log::info($message);

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
                        $fund = credit_user_wallet($url, $user_email, $amount, $order_id, $type, $session_id, $acc_no);

                        return [
                            'status' => true,
                            'message' => 'Transaction Successful',
                            'amount' => $amount,
                            'code' => 4
                        ];
                    }


                } else {

                    return "error";
                }
            } catch (\Exception $th) {
                return $th->getMessage();
            }

        }
        if ($var->responseData->transactionStatus == "PartPayment" && $var->responseData->message == "Incomplete Amount Received") {

            $camt = $var->responseData->amountCollected;
            $namt = $var->responseData->amount;


            $ck_url = Transfertransaction::where('ref', $pref)->first()->url ?? null;

            if ($ck_url != null) {
                return ['code' => 7];
            }

            $acc_no = Transfertransaction::where('ref', $pref)->first()->account_no ?? null;

            $ref = Transfertransaction::where('ref', $pref)->first()->amount ?? null;
            $expected_amount = Transfertransaction::where('ref', $pref)->first()->amount ?? null;

            $amount_remain = $namt - $camt;

            $url = url('') . "/part-payment?expected_amount=$namt&amount_paid=$camt&acct_no=$acc_no&amount_remain=$amount_remain&ref=$pref";
            Transfertransaction::where('ref', $pref)->update(['url' => $url]);


            return [
                'code' => 5,
                'url' => $url
            ];

        }


    }


    return ['code' => 0];


}


if (!function_exists('verify_payment')) {

    function verify_payment($ref)
    {
        $token = tokenkey();
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.pelpay.africa/api/Transaction/bypaymentreference/$ref",
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

        $var2 = curl_exec($curl);
        curl_close($curl);
        $var = json_decode($var2);
        $status = $var->requestSuccessful ?? null;


        if ($status == true) {
            $data['transactionStatus'] = $var->responseData->transactionStatus;
            $data['amount'] = $var->responseData->amountCollected;
            $data['merchantReference'] = $var->responseData->merchantReference;
            $data['message'] = $var->responseData->message ?? null;
            $data['amountCollected'] = $var->responseData->amount ?? null;

            return $data;
        }

        $request = $ref;
        $message = "Wema Resolve error =======>" . json_encode($var2);
        Log::info($message);
        return 0;

    }

}


if (!function_exists('verify_payment_woven')) {

    function verify_payment_woven($ref)
    {
        $token = env('WOVENKEY');
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.woven.finance/v2/api/transactions?unique_reference=$ref",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                "api_secret:$token"
            ),
        ));

        $var2 = curl_exec($curl);
        curl_close($curl);
        $var = json_decode($var2);
        $status = $var->status ?? null;
        $pstatus = $var->data->transactions[0]->status ?? null;
        $acct_no = $var->data->transactions[0]->unique_reference ?? null;


        if ($status == "success" && $pstatus == "PALVS" && $ref == $acct_no) {
            return 5;
        } elseif ($status == "success" && $pstatus == "ACTIVE" && $ref == $acct_no) {
            $data['amount'] = $var->data->transactions[0]->amount;
            $data['transactionStatus'] = "Successful";
            return $data;
        } elseif ($status == "success" && $pstatus == "REVERSE_FAILED" && $ref == $acct_no) {
            return 4;
        } elseif ($status == "success" && $pstatus == "REVERSED" && $ref == $acct_no) {
            return 6;
        } else {
            return 9;
        }


        $request = $ref;
        $message = "Wema Resolve error =======>" . json_encode($var2);
        Log::info($message);
        return 0;

    }
}


if (!function_exists('crypto_token')) {

    function crypto_token()
    {


        $databody = array(

            "email" => env('CRYPEMAIL'),
            "password" => env('CRYPPASS'),

        );


        $post_data = json_encode($databody);

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.nowpayments.io/v1/auth',
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

        return $var->token;
    }
}


if (!function_exists('crypto_currency')) {


    function crypto_currency()
    {

        $key = env("CRYPAPI");
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.nowpayments.io/v1/full-currencies',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                "x-api-key: $key"
            ),
        ));

        $var = curl_exec($curl);
        curl_close($curl);
        $var = json_decode($var);


        return $var->currencies;
    }
}


if (!function_exists('get_min')) {

    function get_min($to_curr)
    {

        $url = 'https://api.coingecko.com/api/v3/simple/price?ids=tether&vs_currencies=ngn';

        $response = Http::get($url);

        if ($response->successful()) {
            $ngnRate = $response->json()['tether']['ngn'];
            return $ngnRate;
        }

        return null;

    }
}

if (!function_exists('get_rate')) {

    function get_rate()
    {

        $key = env('BKEY');
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://issuecards.api.bridgecard.co/v1/issuing/cards/fx-rate',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                "token: Bearer $key"
            ),
        ));

        $var = curl_exec($curl);
        curl_close($curl);
        $var = json_decode($var);

        $status = $var->status ?? null;

        if ($status == 'success') {
            return $var->data->{'NGN-USD'} / 100;
        } else {
            return 0;
        }
    }
}


if (!function_exists('estimate')) {

    function estimate($amount, $code)
    {


        $key = env("CRYPAPI");
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.nowpayments.io/v1/estimate?amount=$amount&currency_from=usd&currency_to=$code",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                "x-api-key: $key"
            ),
        ));

        $var = curl_exec($curl);
        curl_close($curl);
        $var = json_decode($var);


        return $var->estimated_amount;
    }
}


if (!function_exists('create_payment')) {
    function create_payment($amount, $code, $order_id, $order_description)
    {

        $key = env("CRYPAPI");
        $databody = array(

            "price_amount" => $amount,
            "price_currency" => "usd",
            "pay_currency" => $code,
            "ipn_callback_url" => url('') . "/crypto-process",
            "order_id" => $order_id,
            "order_description" => "Apple Macbook Pro 2019 x 1"

        );


        $post_data = json_encode($databody);

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.nowpayments.io/v1/payment',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $post_data,
            CURLOPT_HTTPHEADER => array(
                "x-api-key: $key",
                'Content-Type: application/json'
            ),
        ));


        $var = curl_exec($curl);
        curl_close($curl);
        $var = json_decode($var);

        $data['payment_id'] = $var->payment_id;
        $data['payment_status'] = $var->payment_status;
        $data['pay_address'] = $var->pay_address;
        $data['price_amount'] = $var->price_amount;
        $data['pay_amount'] = $var->pay_amount;
        $data['pay_currency'] = $var->pay_currency;
        $data['order_id'] = $var->order_id;
        $data['purchase_id'] = $var->purchase_id;
        $data['valid_until'] = $var->valid_until;

        return $data;
    }
}


if (!function_exists('send_api_notification')) {

    function send_api_notification($url, $user_email, $amount, $sender_name, $sender_account_no, $session_id, $account_no)
    {

        $databody = array(
            "amount" => $amount,
            "email" => $user_email,
            "sender_name" => $sender_name,
            "sender_account_no" => $sender_account_no,
            "session_id" => $session_id,
            "account_no" => $account_no,
        );

        $post_data = json_encode($databody);
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
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
        $result = json_decode($var);
        $status = $result->status ?? null;

        if ($status == true) {

            $amount_to = number_format($amount, 2);
            $message = "API NOTIFICATION DATA =======>>>>>>> " . $account_no . "| N $amount_to  | Successfully pushed |" . $url . "\n\n $databody";
            Log::info($message);

            return 2;

        } else {

            $message = "API NOTIFICATION DATA ERROR =======>>>>>>> " . json_encode($databody) . "URL ===>>>>>" . $url;
            Log::error($message);

            return 0;

        }

    }
}


if (!function_exists('credit_user_wallet')) {
    function credit_user_wallet($url, $user_email, $amount, $order_id, $type, $session_id, $account_no)
    {


        try {

            $curl = curl_init();
            $data = array(
                'session_id' => $session_id,
            );
            $post_data = json_encode($data);

            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://etopagency.com/api/update-session',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
                CURLOPT_POSTFIELDS => $post_data,
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json'
                ),
            ));

            $var = curl_exec($curl);
            curl_close($curl);
            $var = json_decode($var);


        } catch (\Exception $th) {
            return $th->getMessage();
        }

        $databody = array(
            "amount" => $amount,
            "email" => $user_email,
            "order_id" => $order_id,
            "session_id" => $session_id,
            "account_no" => $account_no,
        );

        $post_data = json_encode($databody);
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
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
        $result = json_decode($var);
        $status = $result->status ?? null;

        if ($status == true) {
            if ($type == "wresolve") {
                $date = date('dmy h:i:s');
                $message = "Wema Resolve ======> $user_email has been funded NGN$amount \n| 0n $url \n using reslove | on $date";
                send_notification_resolve($message);
            } elseif ($type == "presolve") {

                $date = date('dmy h:i:s');
                $message = "9psb Resolve ======> $user_email has been funded NGN$amount \n| 0n $url \n using reslove on $date";
                send_notification_resolve($message);

            } elseif ($type == "woresolve") {

                $date = date('dmy h:i:s');
                $message = "Woven Resolve ======> $user_email has been funded NGN$amount \n| 0n $url \n using reslove on $date";
                send_notification_resolve($message);

            } else {

                $message = "$url  | $user_email | $amount | $order_id successfully funded";
                Log::info($message);

            }


            $message = "CREDIT DATA =======>>>>>>> " . json_encode($databody) . "URL ===>>>>>" . $url;
            Log::info($message);


            $m_key = Webkey::where('url_fund', $url)->first()->key;
            $ck_account = GlobusAccount::where('email', $user_email)->where('m_key', $m_key)->first() ?? null;
            if (!$ck_account) {


                try {
                    $bank_name = "GLOBUS BANK";
                    $key = env('WOVENKEY');
                    $databody = array(
                        "email" => $user_email,
                        "name" => "PAYMENTSTAND",
                        "customer_reference" => $m_key,
                    );

                    $post_data = json_encode($databody);
                    $curl = curl_init();

                    curl_setopt_array($curl, array(
                        CURLOPT_URL => "https://api.woven.finance/v2/api/vnubans/merchant_account",
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
                            "api_secret: $key"
                        ),
                    ));

                    $var2 = curl_exec($curl);
                    curl_close($curl);
                    $var = json_decode($var2);
                    $message = $var->message ?? null;
                    $status = $var->message ?? null;

                    if ($var2 != false && $message == "The process was completed successfully") {

                        $acc = new GlobusAccount();
                        $acc->email = $user_email;
                        $acc->account_no = $var->data->vnuban;
                        $acc->account_name = $var->data->account_name;
                        $acc->bank_name = $bank_name;
                        $acc->m_key = $m_key;
                        $acc->fund_url = $url;
                        $acc->save();


                        $site_name = Webkey::where('url_fund', $url)->first()->site_name ?? null;
                        $message = "GLOBUS CREATION======>" . $user_email . "| $acc->account_no | created |" . $site_name;
                        Log::info($message);

                        return 2;

                    } else {

                        $message = "Woven Error======>" . json_encode($var2) . "\n\n" . $post_data;
                        Log::error($message);

                    }

                } catch (\Exception $th) {

                    $message = $th->getMessage() . "\n\n" . $post_data;
                    Log::error($message);

                }


            } else {

                if ($type == "wresolve") {
                    $message = "Error Reslove Wema ======>  $url | $user_email | $amount | $order_id" .
                        "\n\n Funding user Error ===>" . json_encode($var);
                    send_notification_resolve($message);
                } elseif ($type == "presolve") {
                    $message = "Error Reslove PSB ======>  $url | $user_email | $amount | $order_id" .
                        "\n\n Funding user Error ===>" . json_encode($var);
                    send_notification_resolve($message);

                } else {

                    $error = curl_error($curl);
                    $message = "Error Reslove WOVEN ======>  $url | $user_email | $amount | $order_id" .
                        "\n\n Funding user Error ===>" . json_encode($var);
                    "\n\n Funding user Error ===>" . json_encode($error);
                    send_notification_resolve($message);

                }

                $message = "Request ======> URL: $url | Email: $user_email | Amount: ₦$amount | Order ID: $order_id" .
                    "\n\nFunding User Error ===> " . json_encode($var, JSON_PRETTY_PRINT) .
                    "\n\nRequest IP: " . request()->ip();

                Log::info($message);
                return 0;
            }

        }

    }

    function woven_create($amtt, $code, $tremail, $m_key, $reff)
    {


        if ($code == "090110") {
            $bank_name = "VFD";
        } elseif ($code == "000017") {
            $bank_name = "WEMA";
        } elseif ($code == "000027") {


            $ck_account = GlobusAccount::where('email', $tremail)->where('m_key', $m_key)->first() ?? null;
            if ($ck_account != null) {
                $data['account_no'] = $ck_account->account_no;
                $data['bank_name'] = $ck_account->bank_name;
                $data['account_name'] = $ck_account->account_name;
                return $data;
            }


            $ck_account = GlobusAccount::where('email', $tremail)->where('m_key', $m_key)->first() ?? null;
            if (!$ck_account) {

                $bank_name = "GLOBUS BANK";
                $key = env('WOVENKEY');
                $databody = array(
                    "email" => $tremail,
                    "name" => "PAYMENTSTAND",
                    "customer_reference" => $m_key,
                );


                $post_data = json_encode($databody);
                $curl = curl_init();
                //$url = "https://api.woven.finance/v2/api/vnubans/merchant_account";

                curl_setopt_array($curl, array(
                    CURLOPT_URL => "",// $url,
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
                        "api_secret: $key"
                    ),
                ));

                $var2 = curl_exec($curl);
                curl_close($curl);
                $var = json_decode($var2);
                $message = $var->message ?? null;
                $status = $var->message ?? null;

                if ($var2 != false && $message == "The process was completed successfully") {


                    $fund_url = Webkey::where('key', $m_key)->first()->url_fund;
                    $acc = new GlobusAccount();
                    $acc->email = $tremail;
                    $acc->account_no = $var->data->vnuban;
                    $acc->account_name = $var->data->account_name;
                    $acc->bank_name = $bank_name;
                    $acc->m_key = $m_key;
                    $acc->fund_url = $fund_url;
                    $acc->save();

                    $data['account_no'] = $var->data->vnuban;
                    $data['bank_name'] = $bank_name;
                    $data['account_name'] = $var->data->account_name;
                    return $data;

                } else {

                    $message = "Woven Error======>" . json_encode($var2) . "\n\n" . $post_data;
                    // Log::error($message);
                    // send_notification($message);

                    $data['account_no'] = "Try_Again";
                    $data['bank_name'] = "Try_Again";
                    $data['account_name'] = "Try_Again";
                    return $data;


                }

            }


        } else {
            $bank_name = "CORONATION MERVHANT BANK";
        }


        $key = env('WOVENKEY');
        $databody = array(
            "amount" => $amtt,
            "collection_bank" => $code,
            "callback_url" => url('') . "/api/woven/callback",
            "transaction_reference" => $reff,

        );

        $post_data = json_encode($databody);
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.woven.finance/v2/api/nuban/dynamic',
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
                "api_secret: $key"
            ),
        ));

        $var2 = curl_exec($curl);
        curl_close($curl);
        $var = json_decode($var2);
        $message = $var->message ?? null;
        $status = $var->message ?? null;


        if ($var2 != false && $message === "The process was completed successfully") {

            $data['account_no'] = $var->data->vnuban;
            $data['bank_name'] = $bank_name;
            $data['account_name'] = "WOV CHECKOUT";
            return $data;


        } else {


            $ck_account = GlobusAccount::where('email', $tremail)->where('m_key', $m_key)->first() ?? null;
            if ($ck_account != null) {
                $data['account_no'] = $ck_account->account_no;
                $data['bank_name'] = $ck_account->bank_name;
                $data['account_name'] = $ck_account->account_name;
                return $data;

            }

            $ck_p_account = PalmpayAccount::where('email', $tremail)->where('m_key', $m_key)->first() ?? null;
            if ($ck_p_account != null) {
                $data['account_no'] = $ck_account->account_no;
                $data['bank_name'] = $ck_account->bank_name;
                $data['account_name'] = $ck_account->account_name;
                return $data;
            }



            if (!$ck_account && !$ck_p_account) {

                $bank_name = "GLOBUS BANK";
                $key = env('WOVENKEY');
                $databody = array(
                    "email" => $tremail,
                    "name" => "PAYMENTSTAND",
                    "customer_reference" => $m_key,
                );


                $post_data = json_encode($databody);
                $curl = curl_init();
                curl_setopt_array($curl, array(
                    CURLOPT_URL => 'https://api.woven.finance/v2/api/vnubans/merchant_account',
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
                        "api_secret: $key"
                    ),
                ));

                $var2 = curl_exec($curl);
                curl_close($curl);
                $var = json_decode($var2);
                $message = $var->message ?? null;
                $status = $var->message ?? null;



                if ($var2 != false && $message == "The process was completed successfully") {


                    $fund_url = Webkey::where('key', $m_key)->first()->url_fund;
                    $acc = new GlobusAccount();
                    $acc->email = $tremail;
                    $acc->account_no = $var->data->vnuban;
                    $acc->account_name = $var->data->account_name;
                    $acc->bank_name = $bank_name;
                    $acc->m_key = $m_key;
                    $acc->fund_url = $fund_url;
                    $acc->save();

                    $data['account_no'] = $var->data->vnuban;
                    $data['bank_name'] = $bank_name;
                    $data['account_name'] = $var->data->account_name;
                    return $data;

                } else {

                    $message = "WOVEN ACCOUNT GENERATION ERROR =====>>>" . json_encode($var2);
                    Log::error($message);

                    $message = "Woven Error======>" . json_encode($var2) . "\n\n" . $post_data;
                    $data['account_no'] = "Try_Again";
                    $data['bank_name'] = "Try_Again";
                    $data['account_name'] = "Try_Again";
                    return $data;


                }

            }





        }


    }


    function woven_create_webly($amtt, $code, $last_name, $tremail, $phone)
    {
        $bank_name = "WEMA";
        $key = env('WOVENKEY');
        $databody = array(
            "amount" => $amtt,
            "collection_bank" => "000017",
            "callback_url" => url('') . "/api/woven/callback",

        );

        $post_data = json_encode($databody);
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.woven.finance/v2/api/nuban/dynamic',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 20,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $post_data,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                "api_secret: $key"
            ),
        ));

        $var = curl_exec($curl);

        curl_close($curl);
        $var = json_decode($var);
        $message = $var->message ?? null;
        $status = $var->message ?? null;


        if ($message == "The process was completed successfully") {
            $data['account_no'] = $var->data->vnuban;
            $data['bank_name'] = $bank_name;
            $data['account_name'] = "WOV CHECKOUT";
            return $data;
        }

        $message = json_encode($var);
        Log::info($message);


    }


    function ninepsb_create($amtt, $account_name)
    {

        $databody = array(
            "amount" => $amtt,
            "user_id" => 95,
            "name" => $account_name,

        );

        $post_data = json_encode($databody);
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://etopagency.com/api/create-account-dymamic',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 20,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $post_data,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
            ),
        ));

        $var = curl_exec($curl);
        curl_close($curl);
        $var = json_decode($var);
        $status = $var->result ?? null;


        if ($status != null) {
            $data['account_no'] = $var->result->account_no;
            $data['bank_name'] = "9PSB";
            $data['account_name'] = $var->result->account_name;
            return $data;
        }


    }

    if (!function_exists('verifypelpayreslove')) {


        function verifypelpayreslove($pref, $amount)
        {
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
            $status = $var->responseData->transactionStatus ?? null;


            if ($status == "Failed") {
                return [
                    'code' => 9
                ];

            }


            if ($var->requestSuccessful == true) {

                if ($var->responseData->transactionStatus == "Processing") {
                    return ['code' => 0];

                }

                if ($status == "Successful" && $var->responseData->message == "Successful") {

                    return [
                        'status' => true,
                        'message' => 'Transaction Successful',
                        'amount' => $var->responseData->amountCollected,
                        'code' => 4
                    ];

                }
                if ($status == "PartPayment" && $var->responseData->message == "Incomplete Amount Received") {

                    $camt = $var->responseData->amountCollected;
                    $namt = $var->responseData->amount;


//                $ck_url = Transfertransaction::where('ref', $pref)->first()->url ?? null;
//
//                if($ck_url != null){
//                    return [ 'code' => 7 ];
//                }
//
//                $acc_no = Transfertransaction::where('ref', $pref)->first()->account_no ?? null;
//
//                $ref = Transfertransaction::where('ref', $pref)->first()->amount ?? null;
//                $expected_amount = Transfertransaction::where('ref', $pref)->first()->amount ?? null;
//
//                $amount_remain = $namt - $camt;
//
//                $url = url('')."/part-payment?expected_amount=$namt&amount_paid=$camt&acct_no=$acc_no&amount_remain=$amount_remain&ref=$pref";
//                Transfertransaction::where('ref', $pref)->update(['url' => $url]);


                    return [
                        'code' => 5,
//                    'url' => $url
                    ];

                }

            }


            return [
                'status' => true,
                'errormessage' => json_encode($var),
                'code' => 0
            ];


        }


        if (!function_exists('verify_payment')) {

            function verify_payment($ref)
            {
                $token = tokenkey();
                $curl = curl_init();

                curl_setopt_array($curl, array(
                    CURLOPT_URL => "https://api.pelpay.africa/api/Transaction/bypaymentreference/$ref",
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

                $var2 = curl_exec($curl);
                curl_close($curl);
                $var = json_decode($var2);
                $status = $var->requestSuccessful ?? null;


                if ($status == true) {
                    $data['transactionStatus'] = $var->responseData->transactionStatus;
                    $data['amount'] = $var->responseData->amountCollected;
                    $data['merchantReference'] = $var->responseData->merchantReference;
                    $data['message'] = $var->responseData->message ?? null;
                    $data['amountCollected'] = $var->responseData->amount ?? null;

                    return $data;
                }

                $request = $ref;
                $message = "Wema Resolve error =======>" . json_encode($var2);
                Log::info($message);
                return 0;

            }

        }


        if (!function_exists('verify_payment_woven')) {

            function verify_payment_woven($ref)
            {
                $token = env('WOVENKEY');
                $curl = curl_init();

                curl_setopt_array($curl, array(
                    CURLOPT_URL => "https://api.woven.finance/v2/api/transactions?unique_reference=$ref",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'GET',
                    CURLOPT_HTTPHEADER => array(
                        'Content-Type: application/json',
                        "api_secret:$token"
                    ),
                ));

                $var2 = curl_exec($curl);
                curl_close($curl);
                $var = json_decode($var2);
                $status = $var->status ?? null;
                $pstatus = $var->data->transactions[0]->status ?? null;
                $acct_no = $var->data->transactions[0]->unique_reference ?? null;


                if ($status == "success" && $pstatus == "PALVS" && $ref == $acct_no) {
                    return 5;
                } elseif ($status == "success" && $pstatus == "ACTIVE" && $ref == $acct_no) {
                    $data['amount'] = $var->data->transactions[0]->amount;
                    $data['transactionStatus'] = "Successful";
                    return $data;
                } elseif ($status == "success" && $pstatus == "REVERSE_FAILED" && $ref == $acct_no) {
                    return 4;
                } elseif ($status == "success" && $pstatus == "REVERSED" && $ref == $acct_no) {
                    return 6;
                } else {
                    return 9;
                }


                $request = $ref;
                $message = "Wema Resolve error =======>" . json_encode($var2);
                Log::info($message);
                return 0;

            }
        }


        if (!function_exists('verify_telegram_payment_woven')) {

            function verify_telegram_payment_woven($title)
            {


                $ckt = Transactioncheck::where('account_no', $title)->first() ?? null;
                if ($ckt != null) {
                    return ['code' => 4];
                }


                $st = Transfertransaction::where('account_no', $title)->first()->status ?? null;
                if ($st != 4) {

                    $token = env('WOVENKEY');
                    $curl = curl_init();

                    curl_setopt_array($curl, array(
                        CURLOPT_URL => "https://api.woven.finance/v2/api/transactions?vnuban=$title",
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_ENCODING => '',
                        CURLOPT_MAXREDIRS => 10,
                        CURLOPT_TIMEOUT => 0,
                        CURLOPT_FOLLOWLOCATION => true,
                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                        CURLOPT_CUSTOMREQUEST => 'GET',
                        CURLOPT_HTTPHEADER => array(
                            'Content-Type: application/json',
                            "api_secret:$token"
                        ),
                    ));

                    $var2 = curl_exec($curl);
                    curl_close($curl);
                    $var = json_decode($var2);
                    $status = $var->status ?? null;


                    $pstatus = $var->data->transactions[0]->status ?? null;
                    $acct_no = $var->data->transactions[0]->nuban ?? null;

                    $ck_status = $var->data->transactions ?? null;
                    if ($ck_status > 0) {
                        $tx_status = $var->data->transactions[0]->status ?? null;
                    }


                    if ($status == "success" && $tx_status == "FAILED" && $title == $acct_no) {
                        return ['code' => 90];
                    } elseif ($status == "success" && $pstatus == "ACTIVE" && $title == $acct_no) {

                        $acc_no = $title;
                        $status = Transfertransaction::where('account_no', $acc_no)->first()->status ?? null;
                        $trx = Transfertransaction::where('account_no', $acc_no)->first() ?? null;
                        $amount = Transfertransaction::where('account_no', $acc_no)->first()->amount ?? null;
                        $pstatus = Transfertransaction::where('account_no', $acc_no)->first()->status ?? null;


                        if ($pstatus == 4) {

                            return ['code' => 4];
                        }


                        if ($status == 4) {
                            return ['code' => 4];
                        }


                        $trx = Transfertransaction::where('account_no', $acc_no)->first() ?? null;
                        if ($trx == null) {
                            return ['code' => 3];

                        }

                        $trx = Transfertransaction::where('account_no', $acc_no)->first() ?? null;
                        $main_amount = $var->data->transactions[0]->amount;
                        if ($trx != null) {

                            $set = Setting::where('id', 1)->first();
                            if ($amount > 11000) {
                                $p_amount = $main_amount - 300;
                            } else {
                                $p_amount = $main_amount - 100;
                            }

                            if ($trx->status == 0 || $trx->status == 3 || $trx->status == 2 || $trx->status == 1) {
                                //fund Vendor
                                $trx = Transfertransaction::where('account_no', $acc_no)->first();
                                $ramount = $p_amount - 100;
                                User::where('id', $trx->user_id)->increment('main_wallet', $ramount);
                                $balance = User::where('id', $trx->user_id)->first()->main_wallet;
                                $user = User::where('id', $trx->user_id)->first();
                                Transfertransaction::where('account_no', $acc_no)->update(['session_id' => $var->data->transactions[0]->nip_session_id]);

                                $session_id = $var->data->transactions[0]->nip_session_id;

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

                                $message = "Business funded | Resolve BOT | $acc_no | WOVEN | $ramount | $user->first_name " . " " . $user->last_name;
                                Log::info($message);

                                Webtransfer::where('trans_id', $trx->trans_id)->update(['status' => 4]);
                                Transfertransaction::where('account_no', $acc_no)->update(['status' => 4, 'resolve' => 1]);
                                    Webhook::where('account_no', $acc_no)->delete() ?? null;

                                $trck = new Transactioncheck();
                                $trck->session_id = $session_id;
                                $trck->amount = $trx->amount;
                                $trck->status = 2;
                                $trck->email = $user_email;
                                $trck->save();


                                $type = "epayment";

                                credit_user_wallet($url, $user_email, $amount, $order_id, $type, $session_id, $acc_no);
                                return ['code' => 2];

                            }
                        }


                    } elseif ($status == "success" && $pstatus == "REVERSE_FAILED" && $title == $acct_no) {
                        return ['code' => 9];
                    } elseif ($status == "success" && $pstatus == "REVERSED" && $title == $acct_no) {
                        return ['code' => 6];
                    } else {
                        return ['code' => 1];
                    }

                } else {
                    return ['code' => 4];
                }


                $token = env('WOVENKEY');
                $curl = curl_init();

                curl_setopt_array($curl, array(
                    CURLOPT_URL => "https://api.woven.finance/v2/api/transactions?vnuban=$title",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'GET',
                    CURLOPT_HTTPHEADER => array(
                        'Content-Type: application/json',
                        "api_secret:$token"
                    ),
                ));

                $var2 = curl_exec($curl);
                curl_close($curl);
                $var = json_decode($var2);
                $status = $var->status ?? null;
                $pstatus = $var->data->transactions[0]->status ?? null;
                $acct_no = $var->data->transactions[0]->nuban ?? null;
                $tx_status = $var->data->transactions[0]->status;


                if ($status == "success" && $tx_status == "FAILED" && $title == $acct_no) {
                    return ['code' => 9];
                } elseif ($status == "success" && $pstatus == "REVERSE_FAILED" && $title == $acct_no) {
                    return ['code' => 9];
                } elseif ($status == "success" && $pstatus == "REVERSED" && $title == $acct_no) {
                    return ['code' => 6];
                } else {
                    return ['code' => 1];
                }


                $message = "WOVEN TELEGRAM Resolve error =======>" . json_encode($var2);
                Log::info($message);
                return 0;

            }
        }


        if (!function_exists('crypto_token')) {

            function crypto_token()
            {


                $databody = array(

                    "email" => env('CRYPEMAIL'),
                    "password" => env('CRYPPASS'),

                );


                $post_data = json_encode($databody);

                $curl = curl_init();

                curl_setopt_array($curl, array(
                    CURLOPT_URL => 'https://api.nowpayments.io/v1/auth',
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

                return $var->token;
            }
        }


        if (!function_exists('crypto_currency')) {


            function crypto_currency()
            {

                $key = env("CRYPAPI");
                $curl = curl_init();

                curl_setopt_array($curl, array(
                    CURLOPT_URL => 'https://api.nowpayments.io/v1/full-currencies',
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'GET',
                    CURLOPT_HTTPHEADER => array(
                        "x-api-key: $key"
                    ),
                ));

                $var = curl_exec($curl);
                curl_close($curl);
                $var = json_decode($var);


                return $var->currencies;
            }
        }


        if (!function_exists('get_min')) {

            function get_min($to_curr)
            {

                $key = env("CRYPAPI");

                $curl = curl_init();

                curl_setopt_array($curl, array(
                    CURLOPT_URL => "https://api.nowpayments.io/v1/min-amount?currency_from=$to_curr&currency_to=usd&fiat_equivalent=usd&is_fee_paid_by_user=False",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'GET',
                    CURLOPT_HTTPHEADER => array(
                        "x-api-key: $key"
                    ),
                ));

                $var = curl_exec($curl);
                curl_close($curl);
                $var = json_decode($var);

                return $var->fiat_equivalent;
            }
        }

        if (!function_exists('get_rate')) {

            function get_rate()
            {

                $key = env('BKEY');
                $curl = curl_init();

                curl_setopt_array($curl, array(
                    CURLOPT_URL => 'https://issuecards.api.bridgecard.co/v1/issuing/cards/fx-rate',
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'GET',
                    CURLOPT_HTTPHEADER => array(
                        "token: Bearer $key"
                    ),
                ));

                $var = curl_exec($curl);
                curl_close($curl);
                $var = json_decode($var);

                $status = $var->status ?? null;

                if ($status == 'success') {
                    return $var->data->{'NGN-USD'} / 100;
                } else {
                    return 0;
                }
            }
        }


        if (!function_exists('estimate')) {

            function estimate($amount, $code)
            {


                $key = env("CRYPAPI");
                $curl = curl_init();

                curl_setopt_array($curl, array(
                    CURLOPT_URL => "https://api.nowpayments.io/v1/estimate?amount=$amount&currency_from=usd&currency_to=$code",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'GET',
                    CURLOPT_HTTPHEADER => array(
                        "x-api-key: $key"
                    ),
                ));

                $var = curl_exec($curl);
                curl_close($curl);
                $var = json_decode($var);


                return $var->estimated_amount;
            }
        }


        if (!function_exists('create_payment')) {
            function create_payment($amount, $code, $order_id, $order_description)
            {

                $key = env("CRYPAPI");
                $databody = array(

                    "price_amount" => $amount,
                    "price_currency" => "usd",
                    "pay_currency" => $code,
                    "ipn_callback_url" => url('') . "/crypto-process",
                    "order_id" => $order_id,
                    "order_description" => "Apple Macbook Pro 2019 x 1"

                );


                $post_data = json_encode($databody);

                $curl = curl_init();

                curl_setopt_array($curl, array(
                    CURLOPT_URL => 'https://api.nowpayments.io/v1/payment',
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'POST',
                    CURLOPT_POSTFIELDS => $post_data,
                    CURLOPT_HTTPHEADER => array(
                        "x-api-key: $key",
                        'Content-Type: application/json'
                    ),
                ));


                $var = curl_exec($curl);
                curl_close($curl);
                $var = json_decode($var);

                $data['payment_id'] = $var->payment_id;
                $data['payment_status'] = $var->payment_status;
                $data['pay_address'] = $var->pay_address;
                $data['price_amount'] = $var->price_amount;
                $data['pay_amount'] = $var->pay_amount;
                $data['pay_currency'] = $var->pay_currency;
                $data['order_id'] = $var->order_id;
                $data['purchase_id'] = $var->purchase_id;
                $data['valid_until'] = $var->valid_until;

                return $data;
            }
        }


//    if (!function_exists('credit_user_wallet')) {
//        function credit_user_wallet($url, $user_email, $amount, $order_id, $type, $session_id)
//        {
//
//
//
//
//            try {
//
//                $curl = curl_init();
//                $data = array(
//                    'session_id' => $session_id,
//                );
//                $post_data = json_encode($data);
//
//                curl_setopt_array($curl, array(
//                    CURLOPT_URL => 'https://etopagency.com/api/update-session',
//                    CURLOPT_RETURNTRANSFER => true,
//                    CURLOPT_ENCODING => '',
//                    CURLOPT_MAXREDIRS => 10,
//                    CURLOPT_TIMEOUT => 0,
//                    CURLOPT_FOLLOWLOCATION => true,
//                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//                    CURLOPT_CUSTOMREQUEST => 'GET',
//                    CURLOPT_POSTFIELDS => $post_data,
//                    CURLOPT_HTTPHEADER => array(
//                        'Content-Type: application/json'
//                    ),
//                ));
//
//                $var = curl_exec($curl);
//                curl_close($curl);
//                $var = json_decode($var);
//
//
//            } catch (\Exception $th) {
//                return $th->getMessage();
//            }
//
//            $databody = array(
//                "amount" => $amount,
//                "email" => $user_email,
//                "order_id" => $order_id,
//            );
//
//            $post_data = json_encode($databody);
//            $curl = curl_init();
//
//            curl_setopt_array($curl, array(
//                CURLOPT_URL => $url,
//                CURLOPT_RETURNTRANSFER => true,
//                CURLOPT_ENCODING => '',
//                CURLOPT_MAXREDIRS => 10,
//                CURLOPT_TIMEOUT => 0,
//                CURLOPT_FOLLOWLOCATION => true,
//                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//                CURLOPT_CUSTOMREQUEST => 'POST',
//                CURLOPT_POSTFIELDS => $post_data,
//                CURLOPT_HTTPHEADER => array(
//                    'Content-Type: application/json'
//                ),
//            ));
//
//            $var = curl_exec($curl);
//
//            curl_close($curl);
//            $var = json_decode($var);
//            $status = $var->status ?? null;
//
//
//            if ($status == true) {
//                if ($type == "wresolve") {
//                    $date = date('dmy h:i:s');
//                    $message = "Wema Resolve ======> $user_email has been funded NGN$amount \n| 0n $url \n using reslove | on $date";
//                    send_notification_resolve($message);
//                } elseif ($type == "presolve") {
//
//                    $date = date('dmy h:i:s');
//                    $message = "9psb Resolve ======> $user_email has been funded NGN$amount \n| 0n $url \n using reslove on $date";
//                    send_notification_resolve($message);
//
//                } elseif ($type == "woresolve") {
//
//                    $date = date('dmy h:i:s');
//                    $message = "Woven Resolve ======> $user_email has been funded NGN$amount \n| 0n $url \n using reslove on $date";
//                    send_notification_resolve($message);
//
//                } else {
//
//                    $message = "$url | $user_email | $amount | $order_id successfully funded";
//                    Log::info($message);
//
//                }
//
//                return 2;
//
//            } else {
//
//                if ($type == "wresolve") {
//                    $message = "Error Reslove Wema ======>  $url | $user_email | $amount | $order_id" .
//                        "\n\n Funding user Error ===>" . json_encode($var);
//                    send_notification_resolve($message);
//                } elseif ($type == "presolve") {
//                    $message = "Error Reslove PSB ======>  $url | $user_email | $amount | $order_id" .
//                        "\n\n Funding user Error ===>" . json_encode($var);
//                    send_notification_resolve($message);
//
//                } else {
//
//                    $message = "Error Reslove WOVEN ======>  $url | $user_email | $amount | $order_id" .
//                        "\n\n Funding user Error ===>" . json_encode($var);
//                    send_notification_resolve($message);
//
//                }
//
//                $message = "request ======>  $url | $user_email | $amount | $order_id" .
//                    "\n\n Funding user Error ===>" . json_encode($var);
//                Log::info($message);
//                return 0;
//            }
//
//        }
//
//    }

        function checkuser_name($email, $url)
        {


            $databody = array(
                "email" => $email,
            );

            $post_data = json_encode($databody);

            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => "$url",
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
            $res = $var->username ?? null;

            if ($res == "Not Found, Pleas try again") {
                return 0;
            } else {
                return $res;
            }


        }


        function get_account_details()
        {

            $set = Setting::where('id', 1)->first();
            $data['psb_cap'] = $set->psb_cap;
            $data['psb_charge'] = $set->psb_charge;
            $data['charm'] = $set->charm;
            $data['woven'] = $set->woven;


        }

    }


    function paypoint_create($email, $name, $phone)
    {

        $get_account = PalmpayAccount::where('email', $email)->first() ?? null;
        if ($get_account != null) {
            $data['account_no'] = $get_account->account_no;
            $data['bank_name'] = $get_account->bank_name;
            $data['account_name'] = $get_account->account_name;
            return $data;
        }

        $key = env('PALMPAYKEY');
        $databody = array(
            "email" => $email,
            "name" => $name,
            "phoneNumber" => $phone,
            "bankCode" => [20946],
            "businessId" => "00687df128edaa6dda2787a58dd5c8ff6cbd2f94"
        );

        $post_data = json_encode($databody);
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.paymentpoint.co/api/v1/createVirtualAccount',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 20,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $post_data,
            CURLOPT_HTTPHEADER => array(
                'api-key: 3723173a79798d330619cf66e8004b7a514e76fb',
                'Content-Type: application/json',
                "Authorization: Bearer $key"
            ),
        ));

        $var = curl_exec($curl);
        curl_close($curl);
        $var = json_decode($var);
        $status = $var->status ?? null;


        if ($status != "fail") {

            $pay = new PalmpayAccount();
            $pay->account_no = $var->bankAccounts[0]->accountNumber;
            $pay->account_name = $var->bankAccounts[0]->accountName;
            $pay->bank_name = $var->bankAccounts[0]->bankName;
            $pay->reserved_account_id = $var->bankAccounts[0]->Reserved_Account_Id;
            $pay->bank_code = $var->bankAccounts[0]->bankCode;
            $pay->email = $email;
            $pay->save();


            $data['account_no'] = $var->bankAccounts[0]->accountNumber;
            $data['bank_name'] = $var->bankAccounts[0]->bankName;
            $data['account_name'] = $var->bankAccounts[0]->accountName;
            return $data;
        }


    }
}


