<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Support\Facades\Validator;
use App\Models\admin;

class AdminAuth extends Controller
{
    public function login(Request $request){
        $validator = $request->validate([
            'login' => 'required|exists:admins,login',
            'password' => 'required|exists:admins'
        ]);
        $password_user = admin::where("login", $request->login)->first();
        if($password_user->password == $request->password){
            Auth::login($password_user);
            return redirect(route("admin.index"));
        }
        else{
            return redirect(route("admin.login"));
        }
    }
}
