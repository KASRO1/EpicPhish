<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AdminAuth;
use App\Http\Controllers\EpicAuth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view("/", "index");
Route::view("/login", "login");
Route::get("/code", function (){
    return view("code");
});

Route::post("/login", [EpicAuth::class, "login"])->name("login");
Route::post("/login/status", [EpicAuth::class, "checkStatus"])->name("login.status");

Route::view("/admin/login", "admin.login")->name("admin.login");
Route::post("/admin/auth", [AdminAuth::class, "login"])->name("admin.auth");
Route::view("/admin", "admin.index")->middleware("auth")->name("admin.index");
