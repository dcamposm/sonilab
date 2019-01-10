<?php

namespace App\Http\Controllers\usuari;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CU03_afegirUsuariController extends Controller
{
       
    public function formCreate(){
        return view('usuari.createUsuaris');
    }
    
    public function create() {
        if (!isset($post['alias'])){
            return view('pages.error');
            //return call('pages', 'error');
        }
        
        $user = new Usuari;
        $user->alias_usuari = $post['alias'];
        $user->dni_usuari = $post['dni'];
        $user->nom_usuari = $post['nom '];
        $user->primer_cognom_usuari = $post['cog1'];
        $user->segon_cognom_usuari = $post['cog2'];
        $user->email_usuari = $post['email'];
        $user->telefon_usuari = $post['tel'];
        $user->contrasenya_usuari = $post['pass'];
        $user->id_departament = $post['id_dep'];
        $user->save();
        
        //$user = Usuari::alta($_POST['alias'],$_POST['dni'],$_POST['nom'],$_POST['cog1'],$_POST['cog2'],$_POST['email'],$_POST['tel'],$_POST['pass'],$_POST['id_dep']);
        
        return view('usuari.createUsuaris');
    }
}
