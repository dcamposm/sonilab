<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CU01_loginController extends Controller
{
    public function login() {
        if (session()->has('users')){            
            return view('usuari.index'); 
        }
        else {
            return view('login');
        }
    }
    
    public function logout() {
        session()->forget('users');
        return redirect()->action('CU01_loginController@login');
    }
}
