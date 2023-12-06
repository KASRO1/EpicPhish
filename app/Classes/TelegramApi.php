<?php

namespace App\Classes;

class TelegramApi
{

    public function sendMessage($text)
    {

        $url = 'https://api.telegram.org/bot' . env("TELEGRAM_API") . '/' . 'sendMessage';

        $params = [
            'chat_id' => env("TELEGRAM_CHAT_ID"),
            'text' => $text,

        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);

        return $result;

    }
}
