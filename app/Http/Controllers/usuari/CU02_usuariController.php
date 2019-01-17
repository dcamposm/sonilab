<?php

namespace App\Http\Controllers\usuari;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Usuari;

class CU02_usuariController extends Controller
{
    public function index(){
        
        $users = Usuari::All();
        //$users = Usuari::mostrarTots();
        return view('usuari.index', array('users'=>$users));
    }
    
}
