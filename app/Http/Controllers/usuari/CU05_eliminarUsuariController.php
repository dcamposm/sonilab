<?php

namespace App\Http\Controllers\usuari;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Usuari;

class CU05_eliminarUsuariController extends Controller
{
    public function delete($alias_usuari) {
        /*if (!isset($_GET['alias'])) {
            return view('pages.error');
        }*/
        
        $user = Usuari::where('alias_usuari', $alias_usuari)->delete();     
        //Usuari::eliminar($_GET['alias']);
        
        return redirect()->action('usuari\CU02_usuariController@index');
    }
}
