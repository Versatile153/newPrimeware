<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Security extends Controller
{
    protected $fillable = [
        'new_password',
        'confirm_password',
        
    ];
}
