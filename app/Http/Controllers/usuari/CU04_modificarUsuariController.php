<?php

namespace App\Http\Controllers\usuari;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CU04_modificarUsuariController extends Controller
{
    public function formUpdate() {
        if (!isset($_GET['alias'])) {
            return view('pages.error');
        }
        
        $user = Usuari::where('alias', '=', $get['alias'])->get();
        //$user = Usuari::buscar($_GET['alias']);
        
        return view('usuari.modificarUsuaris', array('user'=>$user));
    }

    public function update() {
        if (!isset($get['alias'])){
            return view('pages.error');
        }
        
        $user = new Usuari;
        $user->alias_usuari = $get['alias'];
        $user->dni_usuari = $post['dni'];
        $user->nom_usuari = $post['nom '];
        $user->primer_cognom_usuari = $post['cog1'];
        $user->segon_cognom_usuari = $post['cog2'];
        $user->email_usuari = $post['email'];
        $user->telefon_usuari = $post['tel'];
        $user->contrasenya_usuari = $post['pass'];
        $user->id_departament = $post['id_dep'];
        $user->save();
        
        //Usuari::modificar($get['alias'],$post['nom'],$post['cog1'],$post['cog2'],$post['email'],$post['tel'],$post['pass']);
        
        return redirect()->action('usuari\CU02_usuariController@index');
    }
}
