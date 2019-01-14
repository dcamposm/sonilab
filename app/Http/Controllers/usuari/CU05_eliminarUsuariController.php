<?php

namespace App\Http\Controllers\usuari;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CU05_eliminarUsuariController extends Controller
{
    public function delete() {
        if (!isset($get['alias'])) {
            return view('pages.error');
        }
        
        $user = \App\Usuari::where('alias', $get['alias'])->delete();     
        //Usuari::eliminar($_GET['alias']);
        
        return redirect()->action('usuari\CU02_usuariController@index');
    }
}
