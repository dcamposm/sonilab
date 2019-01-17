<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CU01_loginController extends Controller
{
    public function login() {
        return view('login');
    }
}
