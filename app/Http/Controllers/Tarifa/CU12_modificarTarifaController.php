<?php

namespace App\Http\Controllers\Tarifa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CU12_modificarTarifaController extends Controller
{
    public function formUpdate($rol, $dni, $idioma) {
        
        switch ($rol) {
            case 'actor':
                $actors = Actor::all();
                $idiomes = Idioma::all();
                $tarifes = ActorIdioma::where('dni_actor', $dni)->where('id_idioma', $idioma)->get();
                return view('tarifa.modificarTarifaActor', array('actors'=>$actors, 'idiomes'=>$idiomes, 'tarifes'=>$tarifes));
            case 'traductor':
                $traductors = Traductor::all();
                $idiomes = Idioma::all();
                $tarifes = TraductorIdioma::where('dni_traductor', $dni)->where('id_idioma', $idioma)->get();
                return view('tarifa.modificarTarifaTraductor', array('traductors'=>$traductors, 'idiomes'=>$idiomes, 'tarifes'=>$tarifes));
        }
        
    }
    
    public function update(Request $request, $rol, $dni, $idioma) {
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
