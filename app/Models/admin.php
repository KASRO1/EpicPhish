<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class admin extends Model implements Authenticatable
{
    use HasFactory;
    use \Illuminate\Auth\Authenticatable;

    protected $fillable = [
        "login",
        "password",
        "last_login"
    ];

    protected  $hidden = [
        "password",
        "remember_token"
    ];

    protected $casts = [
        'last_login' => 'datetime',
    ];

}
