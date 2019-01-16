<?php

namespace App\Http\Controllers\usuari;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Usuari;
use App\DepartamentUsuari;

class CU04_modificarUsuariController extends Controller
{
    public function formUpdate($alias_usuari) {
        if (!isset($_GET['alias'])) {
            return view('pages.error');
        }
     

        //$user=Usuari::findOrFail($alias_usuari);
        
        $user = Usuari::where('alias_usuari', $alias_usuari)->firstOrFail();
        $departament = DepartamentUsuari::where('id_rol', $user->id_departament)->firstOrFail();
        //$user = Usuari::buscar($_GET['alias']);
        
        return view('usuari.modificarUsuaris', array('user'=>$user,'departament'=>$departament));
    }

    public function update(Request $request) {
        if (!isset($_GET['alias'])){
            return view('pages.error');
        }
        
        $user = new Usuari;
        $user->alias_usuari = $request->input('alias');
        $user->dni_usuari = $request->input('dni');
        $user->nom_usuari = $request->input('nom');
        $user->primer_cognom_usuari = $request->input('primer_cognom');
        $user->segon_cognom_usuari = $request->input('segon_cognom');
        $user->email_usuari = $request->input('email');
        $user->telefon_usuari = $request->input('tel');
        $user->contrasenya_usuari = $request->input('contrasenya');
        $user->id_departament = $request->input('departament');
        $user->save();
        
        //Usuari::modificar($get['alias'],$post['nom'],$post['cog1'],$post['cog2'],$post['email'],$post['tel'],$post['pass']);
        
        return redirect()->action('usuari\CU02_usuariController@index');
    }
}
