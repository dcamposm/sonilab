<?php

namespace App\Http\Controllers\usuari;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Usuari;

class CU03_afegirUsuariController extends Controller
{
       
    public function formCreate(){
        return view('usuari.createUsuaris');
    }
    
    public function create() {
        if (!isset($_POST['alias'])){
            return view('pages.error');
            //return call('pages', 'error');
        }
        
        $user = new Usuari;
        $user->alias_usuari = $_POST['alias'];
        $user->contrasenya_usuari = $_POST['contrasenya'];
        $user->dni_usuari = $_POST['dni'];
        $user->nom_usuari = $_POST['nom'];
        $user->primer_cognom_usuari = $_POST['primer_cognom'];
        $user->segon_cognom_usuari = $_POST['segon_cognom'];
        $user->email_usuari = $_POST['email'];
        $user->telefon_usuari = $_POST['telefon'];
        $user->id_departament = $_POST['departament'];
        $user->save();
        
        //$user = Usuari::alta($_POST['alias'],$_POST['dni'],$_POST['nom'],$_POST['cog1'],$_POST['cog2'],$_POST['email'],$_POST['tel'],$_POST['pass'],$_POST['id_dep']);
        
        return view('usuari.crear');
    }
}
