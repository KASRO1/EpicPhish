<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Action;
class EpicAuth extends Controller
{
    public function login(Request $request){

        $Action = new Action();
        $Action->type_action = "login";
        $Action->ip = $request->ip();
        $Action->data = json_encode($request->all());
        $Action->save();

        return $Action;
    }
    public function checkStatus(Request $request){
        $action = Action::where("id", $request->id)->first();
        return $action->status;
    }
}
