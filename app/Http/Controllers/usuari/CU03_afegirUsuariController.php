<?php

namespace App\Http\Controllers\usuari;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Usuari;
use App\DepartamentUsuari;

class CU03_afegirUsuariController extends Controller
{
       
    public function formCreate(){
        $deps = DepartamentUsuari::All();
        return view('usuari.createUsuaris', array('deps'=>$deps));
    }
    
    public function create(Request $request) {
        /*if ($request->has('alias')){
            return view('pages.error');
            //return call('pages', 'error');
        }*/
        
        $user = new Usuari;
        $user->alias_usuari = $request->input('alias');
        $user->contrasenya_usuari = $request->input('contrasenya');
        $user->dni_usuari = $request->input('dni');
        $user->nom_usuari = $request->input('nom');
        $user->primer_cognom_usuari = $request->input('primer_cognom');
        $user->segon_cognom_usuari = $request->input('segon_cognom');
        $user->email_usuari = $request->input('email');
        $user->telefon_usuari = $request->input('telefon');
        $user->id_departament = $request->input('departament');
        $user->save();
        
        //$user = Usuari::alta($_POST['alias'],$_POST['dni'],$_POST['nom'],$_POST['cog1'],$_POST['cog2'],$_POST['email'],$_POST['tel'],$_POST['pass'],$_POST['id_dep']);
        
        return view('usuari.createUsuaris');
    }
}
