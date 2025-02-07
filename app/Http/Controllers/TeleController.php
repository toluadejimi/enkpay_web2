<?php

namespace App\Http\Controllers;

use App\Models\Transfertransaction;
use App\Models\Webkey;
use App\Services\TelegramService;
use Illuminate\Http\Request;
class TeleController extends Controller
{
    protected $telegramToken;

    public function __construct()
    {
        $this->telegramToken = env('TELEGRAM_BOT_TOKEN');
    }

    public function handleWebhook(Request $request)
    {
        $update = $request->all();

        if (isset($update['message'])) {
            $message = $update['message'];
            $chatId = $message['chat']['id'];
            $text = $message['text'] ?? '';

            $this->autoReply($chatId, $text);
        }

        if (isset($update['callback_query'])) {
            $this->handleCallbackQuery($update['callback_query']);
        }
    }

    protected function autoReply($chatId, $text)
    {
        $text = strtolower(trim($text));

        if ($text === '/start') {
            $this->sendMenu($chatId);
        } elseif (strpos($text, 'resolve') !== false) {
            $this->sendMessage($chatId, "Enter your Account No to resolve a transaction.");
        } elseif (strpos($text, 'status') !== false) {
            $this->sendMessage($chatId, "Enter your transaction reference to check status.");
        } elseif (strpos($text, 'help') !== false) {
            $this->sendMessage($chatId, "How can I assist you?");
        } else {
            $this->sendMenu($chatId);
        }
    }

    protected function sendMenu($chatId)
    {
        $keyboard = [
            'inline_keyboard' => [
                [['text' => 'Resolve Transaction', 'callback_data' => 'resolve']],
                [['text' => 'Check Status', 'callback_data' => 'status']],
                [['text' => 'Help', 'callback_data' => 'help']]
            ]
        ];

        $this->sendMessage($chatId, "Choose an option:", $keyboard);
    }

    protected function handleCallbackQuery($callbackQuery)
    {
        $chatId = $callbackQuery['message']['chat']['id'];
        $callbackData = $callbackQuery['data'];

        switch ($callbackData) {
            case 'resolve':
                $this->sendMessage($chatId, "Enter your Account No to resolve a transaction.");
                break;
            case 'status':
                $this->sendMessage($chatId, "Enter your transaction reference to check status.");
                break;
            case 'help':
                $this->sendMessage($chatId, "How can I assist you?");
                break;
        }
    }

    protected function sendMessage($chatId, $text, $keyboard = null)
    {
        $data = [
            'chat_id' => $chatId,
            'text' => $text,
            'parse_mode' => 'HTML',
        ];

        if ($keyboard) {
            $data['reply_markup'] = json_encode($keyboard);
        }

        file_get_contents("https://api.telegram.org/bot" . $this->telegramToken . "/sendMessage?" . http_build_query($data));
    }
}
