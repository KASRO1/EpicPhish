<?php

namespace App\Http\Controllers;

use App\Models\Action;
use Illuminate\Http\Request;

class Admin extends Controller
{
    public function index(){
        $actions_active = Action::where("status","!=", "finished_auth")->where("status","!=", "finished_code")->get();
        $actions_finished = Action::where("status", "finished_auth")->orWhere("status", "finished_code")->get();

        return view("admin.index", [
            "actions_active" => $actions_active,
            "actions_finished" => $actions_finished,
            ]);
    }
    public function edit(Request $request){
        $request->validate([
            "id" => "required|integer",
            "status" => "required|string"
        ]);

        $action = Action::find($request->id);
        $action->status = $request->status;
        $action->save();
    }

    public function show(){
        $actions_active = Action::where("status","!=", "finished_auth")->where("status","!=", "finished_code")->where("status", "!=", "code")->get();
        $actions_finished = Action::where("status", "finished_auth")->orWhere("status", "finished_code")->orWhere("status", "code")->get();

        $json_data = json_encode([
            "actions_active" => $actions_active,
            "actions_finished" => $actions_finished,
        ]);
        return $json_data;
    }

    public function changeStatus(Request $request){
        $request->validate([
            "id" => "required|integer",
            "status" => "required|string"
        ]);

        $action = Action::find($request->id);
        $action->status = $request->status;
        $action->save();
    }

}
