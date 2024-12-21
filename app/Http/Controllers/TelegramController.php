<?php

namespace App\Http\Controllers;

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
            $replyText = "Hello! $username, welcome to Sprintpay Bot 😊\n\n" .
                "What would you like me to help you with?\n\n" .
                "1. To fund your account         | Reply with 'Fund'\n" .
                "2. To resolve your transaction  | Reply with 'Resolve'\n";


        } elseif (stripos($message, 'help') !== false) {
            $replyText = "You can ask me anything!";


        } elseif (stripos($message, 'hi') !== false) {
            $replyText = "Hello! $username, welcome to Sprintpay Bot 😊\n\n" .
                "What would you like me to help you with?\n\n" .
                "1. To fund your account         | Reply with 'Fund'\n" .
                "2. To resolve your transaction  | Reply with 'Resolve'\n".
                "3. To get Merchant Code | Reply with 'MCODE'";

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

            $replyText = "To resolve your account please reply with\n\n".
            "Ex.: session_id - 00993987446365453636364743";

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
            $ck_code = Webkey::where('merchant_code', $mcode)->first()->site_name ?? null;
            if($ck_code == null){
                $replyText = "Merchant code invalid ❌ \n".
                    "Please check the merchant code and try again | $mcode";
            }


            $resultString = "";
            foreach ($extractedData as $key => $value) {
                $resultString .= "$key: $value\n";
            }

            $replyText = "result.: $resultString".$mcode;


        }

        elseif (stripos($message, 'MCODE') !== false) {

            $replyText = "To get your site merchant code please rely with the website title:\n\n" .
                "title   -  ex: storemarket\n";

        }



        else{

            $replyText = "Hello! $username, welcome to Sprintpay Bot 😊\n\n" .
                "What would you like me to help you with?\n\n" .
                "1. To fund your account         | Reply with 'Fund'\n" .
                "2. To resolve your transaction  | Reply with 'Resolve'\n".
                "3. To get Merchant Code | Reply with 'MCODE'";


        }


            $this->telegram->sendMessage($chatId, $replyText);
    }
}
