<?php

namespace App\Http\Controllers\usuari;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CU05_eliminarUsuariController extends Controller
{
    public function delete() {
        if (!isset($_GET['alias'])) {
            return call('pages', 'error');
        }
       
        Usuari::eliminar($_GET['alias']);
        
        return redirect()->action('usuari\CU02_usuariController@index');
    }
}
