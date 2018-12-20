<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C02_usuariController extends Controller
{
    public function index(){
        
        $users = Usuari::all();
        return view('usuari.index', (array($users)));
    }
    
    
}
