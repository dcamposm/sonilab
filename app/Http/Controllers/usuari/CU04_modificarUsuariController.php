<?php

namespace App\Http\Controllers\usuari;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Usuari;
use App\DepartamentUsuari;

class CU04_modificarUsuariController extends Controller
{
    public function formUpdate($alias_usuari) {
        /*if (!isset($_GET['alias'])) {
            return view('pages.error');
        }*/
     

        //$user=Usuari::findOrFail($alias_usuari);
        
        $user = Usuari::where('alias_usuari', $alias_usuari)->firstOrFail();
        $departament = DepartamentUsuari::all();
        //$user = Usuari::buscar($_GET['alias']);
        
        return view('usuari.modificarUsuaris', array('user'=>$user,'departament'=>$departament));
    }

    public function update(Request $request, $alias) {
        /*if (!isset($_GET['alias'])){
            return view('pages.error');
        }*/
        
        $user = Usuari::where('alias_usuari', $alias)->firstOrFail();
        $user->dni_usuari = $request->input('dni');
        $user->nom_usuari = $request->input('nom');
        $user->primer_cognom_usuari = $request->input('primer_cognom');
        $user->segon_cognom_usuari = $request->input('segon_cognom');
        $user->email_usuari = $request->input('email');
        $user->telefon_usuari = $request->input('telefon');
        $user->contrasenya_usuari = $request->input('contrasenya');
        $user->id_departament = $request->input('departament');
        $user->save();
        
        //Usuari::modificar($alias,$request->input('dni'),$request->input('nom'),$request->input('primer_cognom'),$request->input('segon_cognom'),$request->input('email'),$request->input('telefon')
        //,$request->input('contrasenya'),$request->input('departament'));
        
        return redirect()->action('usuari\CU02_usuariController@index');
    }
}
