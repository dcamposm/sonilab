<?php

namespace App\Http\Controllers\usuari;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Usuari;

class CU05_eliminarUsuariController extends Controller
{
    public function delete() {
        if (!isset($_GET['alias'])) {
            return view('pages.error');
        }
        
        $user = Usuari::where('alias', $_GET['alias'])->delete();     
        //Usuari::eliminar($_GET['alias']);
        
        return redirect()->action('usuari\CU02_usuariController@index');
    }
}
