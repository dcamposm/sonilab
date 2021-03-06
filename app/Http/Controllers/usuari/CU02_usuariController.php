<?php

namespace App\Http\Controllers\usuari;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Usuari;
use App\DepartamentUsuari;

class CU02_usuariController extends Controller
{
    public function index(){
        
        $users = Usuari::All();
        $deps = DepartamentUsuari::all();
        //$users = Usuari::mostrarTots();
        return view('usuari.index', array('users'=>$users, 'deps'=>$deps));
    }
    
    public function auth(Request $request) {        
        session_start();
        $user = Usuari::where('alias_usuari', $request->input('alias'))->firstOrFail();
        if ($user->contrasenya_usuari == $request->input('pass')){
            //session()->put('usuari');
            //session()->put('usuari', $request->input('alias'));
            $_SESSION["usuari"] = $request->input('alias');
            return redirect()->action('usuari\CU02_usuariController@index');
        }
        else {
            return redirect()->action('CU01_loginController@login');
        }
    }
}
