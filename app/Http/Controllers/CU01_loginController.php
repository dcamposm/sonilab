<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CU01_loginController extends Controller
{
    public function login() {
        //session()->has('usuari')
        session_start();
        if (isset($_SESSION["usuari"])){            
            return redirect()->action('usuari\CU02_usuariController@index'); 
        }
        else {
            return view('login');
        }
    }
    
    public function logout() {
        session_start();
        
        session_unset(); 

        session_destroy(); 
        //session()->forget('usuari');
        return redirect()->action('CU01_loginController@login');
    }
}
