<?php

namespace App\Http\Controllers\usuari;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CU04_modificarUsuariController extends Controller
{
    public function formUpdate() {
        if (!isset($_GET['alias'])) {
            return call('pages', 'error');
        }

        $user = Usuari::buscar($_GET['alias']);
        
        return view('usuari.modificarUsuaris', array('user'=>$user));
    }

    public function update() {
        if (!isset($_GET['alias'])){
            return call('pages', 'error');
        }

        Usuari::modificar($_GET['alias'],$_POST['nom'],$_POST['cog1'],$_POST['cog2'],$_POST['email'],$_POST['tel'],$_POST['pass']);
        
        return redirect()->action('usuari\CU02_usuariController@index');
    }
}
