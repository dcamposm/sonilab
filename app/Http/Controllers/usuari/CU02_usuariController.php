<?php

namespace App\Http\Controllers\usuari;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CU02_usuariController extends Controller
{
    public function index(){
        
        $users = Usuari::all();
        //$users = Usuari::mostrarTots();
        return view('usuari.index', array('users'=>$users));
    }
    
}
