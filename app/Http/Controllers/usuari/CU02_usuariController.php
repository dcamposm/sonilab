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
    
    public function auth(Request $request) {        
        $user = Usuari::where('alias_usuari', $request->input('alias'))->firstOrFail();
        if ($user->contrasenya_usuari == $request->input('pass')){
            session()->put('users');
            session()->put('users', $request->input('alias'));

            return redirect()->action('usuari\CU02_usuariController@index');
        }
        else {
            return view('login');
        }
    }
}
