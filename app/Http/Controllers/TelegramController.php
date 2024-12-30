<?php

namespace App\Http\Controllers;

use App\Models\Setting;
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


        if (stripos($message, 'hello') !== false) {
            $replyText = "Hello! $username, welcome to Sprintpay Resolve Bot 😊\n\n" .
                "To resolve your transaction  | Reply with 'resolve - Session ID'\n".
                "Ex: resolve - 00993987446365453636364743\n";

        } elseif (stripos($message, 'help') !== false) {
            $replyText = "You can ask me anything!";


        } elseif (stripos($message, 'hi') !== false) {
            $replyText = "Hello! $username, welcome to Sprintpay Resolve Bot 😊\n\n" .
                "To resolve your transaction  | Reply with 'resolve - Session ID'\n".
                "Ex: resolve - 00993987446365453636364743\n";


        } else {
            $replyText = "I'm not sure how to respond to that.";
        }


        if (stripos($message, 'fund') !== false) {
            $replyText = "To fund your account, please reply with the following details:\n\n" .
                "Example:\n" .
                "Amount        - 2000\n" .
                "Merchant Code - 123456\n" .
                "Email         - email@gmail.com\n\n" .
                ">>>>>>>>>>>>>>>>>>>>>>>>>>\n\n" .
                "Reply with 'MCODE' to get your Merchant Code.";


        } elseif (stripos($message, 'resolve') !== false) {

            $title = trim(substr(strstr($message, '-'), 1));


            $trx = Transfertransaction::where('session_id', $title)->first() ?? null;
            if($trx == null){

                $replyText = "Session ID | $title | not found ❌ \n".
                    "Please kindly check the session ID you entered and try again";
            }else{



                $replyText = "Session ID found | $title | ✅ \n".
                    $tran = json_encode($trx);
                    "Here is the transaction  | $tran";

            }






        }

        elseif (stripos($message, 'title') !== false) {

            $title = trim(substr(strstr($message, '-'), 1));
            $sitename = Webkey::where('merchant_code', $title)->first()->site_name ?? null;

            if($sitename != null){
                $replyText = "$title | Merchant code valid 😊\n".
                    "Site name.: $sitename";
            }else{

                $replyText = "Merchant code invalid ❌ \n".
                    "Please check the merchant code and try again | $title";
            }


        }


        elseif (stripos($message, 'amount') !== false) {


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
            $ck_account =  checkuser_name($email, $url);



            if($ck_code == null ){
                $replyText = "Merchant code invalid ❌ \n".
                    "Please check the merchant code and try again | $mcode";
            }elseif ($ck_account == 0) {
                $replyText = "$email | Account not found on  | $ck_code ❌ \n".
                    "Please check the email or merchant code and try again | $mcode";
            }else{



                $replyText = "Account found on | $ck_code | ✅ \n\n".
                    "username         |  $ck_account\n".
                    "Amount to fund   |  $amount\n".
                    "Bank Account   |  Account\n";
            }


//            $resultString = "";
//            foreach ($extractedData as $key => $value) {
//                $resultString .= "$key: $value\n";
//            }
//
//            $replyText = "result.: $resultString".$mcode.$ck_code;
//

        }

        elseif (stripos($message, 'MCODE') !== false) {

            $replyText = "To get your site merchant code please rely with the website title:\n\n" .
                "title   -  ex: storemarket\n";

        }


        elseif (stripos($message, 'id') !== false) {

            $replyText = "To get your site merchant code please rely with the website title:\n\n" .
                "title   -  ex: storemarket\n";

        }







        else{
            $replyText = "Hello! $username, welcome to Sprintpay Resolve Bot 😊\n\n" .
                "To resolve your transaction  | Reply with 'resolve - Session ID'\n".
                "Ex: resolve - 00993987446365453636364743\n";

        }


            $this->telegram->sendMessage($chatId, $replyText);
    }
}
