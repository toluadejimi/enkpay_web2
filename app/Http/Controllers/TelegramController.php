<?php

namespace App\Http\Controllers;

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
            $replyText = "Hello! $username welcome to Sprintpay Bot 😊\n\n
             What would you like me to help you with? \n
            1. To fund your account | Reply with Fund\n
            2. To resolve your transaction | Reply with Resolve

            ";
        } elseif (stripos($message, 'help') !== false) {
            $replyText = "You can ask me anything!";



        } elseif (stripos($message, 'hi') !== false) {
            $replyText = "Hello! $username  welcome to Sprintpay Bot😊 \n\n
            What would you like me to help you with?\n
            1. To fund your account | Reply with Fund\n
            2. To resolve your transaction | Reply with Resolve\n
            3. To get Merchant Code | Reply with MCODE\n

            ";
        } else {
            $replyText = "I'm not sure how to respond to that.";
        }



        if (stripos($message, 'fund') !== false) {
            $replyText = "To fund your account please reply with\n\n

             Ex.: Amount - 2000 | merchantcode - 123456 | email - email@gmail.com

             >>>>>>>>>>>>>>>>>>>>>>>

             Reply MCODE to get Merchant Code

            ";
        } elseif (stripos($message, 'help') !== false) {
            $replyText = "You can ask me anything!";

        }else{

        }


            $this->telegram->sendMessage($chatId, $replyText);
    }
}
