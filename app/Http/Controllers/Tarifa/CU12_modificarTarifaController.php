<?php

namespace App\Http\Controllers\Tarifa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Actor;
use App\ActorIdioma;
use App\Traductor;
use App\TraductorIdioma;
use App\Idioma;

class CU12_modificarTarifaController extends Controller
{
    public function formUpdate($rol, $dni, $idioma) {
        
        switch ($rol) {
            case 'actor':
                $actors = Actor::all();
                $idiomes = Idioma::all();
                $tarifes = ActorIdioma::where('dni_actor', $dni)->where('id_idioma', $idioma)->firstOrFail();
                return view('tarifa.modificarTarifalActor', array('actors'=>$actors, 'idiomes'=>$idiomes, 'tarifes'=>$tarifes));
            case 'traductor':
                $traductors = Traductor::all();
                $idiomes = Idioma::all();
                $tarifes = TraductorIdioma::where('dni_traductor', $dni)->where('id_idioma', $idioma)->firstOrFail();
                return view('tarifa.modificarTarifaTraductor', array('traductors'=>$traductors, 'idiomes'=>$idiomes, 'tarifes'=>$tarifes));
        }
        
    }
    
    public function update(Request $request, $rol, $dni, $idioma) {
        switch ($rol) {
            case 'actor':
                $idio = ActorIdioma::where('dni_actor', $dni)->where('id_idioma', $idioma)->delete();
                
                $idioma = new ActorIdioma();
                $idioma->dni_actor=$request->input('dni');
                $idioma->id_idioma=$request->input('idioma');
                $idioma->tarifa_video_take=$request->input('tarifa_video_take');
                $idioma->tarifa_video_cg=$request->input('tarifa_video_cg');

                $idioma->tarifa_cine_take=$request->input('tarifa_cine_take');
                $idioma->tarifa_cine_cg=$request->input('tarifa_cine_cg');

                $idioma->tarifa_cine_cg=$request->input('tarifa_canso');

                $idioma->save();
                return redirect()->action('Tarifa\CU10_tarifaController@indexActor');
            case 'traductor':
                $idio = TraductorIdioma::where('dni_traductor', $dni)->where('id_idioma', $idioma)->delete();
                
                $idioma = new TraductorIdioma();
                $idioma->dni_traductor=$request->input('dni');
                $idioma->id_idioma=$request->input('idioma');;
                if ($request->input('tarifa_traductor') != NULL){
                    $idioma->traductor=1;
                }
                if ($request->input('tarifa_ajustador') != NULL){
                    $idioma->ajustador=1;
                }            
                if ($request->input('tarifa_linguista') != NULL){
                    $idioma->linguista=1;
                }

                $idioma->tarifa_traductor=$request->input('tarifa_traductor');
                $idioma->tarifa_ajustador=$request->input('tarifa_ajustador');
                $idioma->tarifa_linguista=$request->input('tarifa_linguista');
                $idioma->tarifa_traductor_ajustador=NULL;
                if ($request->input('tarifa_traductor') != NULL && $request->input('tarifa_ajustador') != NULL && $request->input('tarifa_linguista') == NULL){
                    $idioma->tarifa_traductor_ajustador=$request->input('tarifa_traductor')+$request->input('tarifa_ajustador');
                }
                $idioma->tarifa_totes=NULL;
                if ($request->input('tarifa_traductor') != NULL && $request->input('tarifa_ajustador') != NULL && $request->input('tarifa_linguista') != NULL){
                    $idioma->tarifa_totes=$request->input('tarifa_traductor')+$request->input('tarifa_ajustador')+$request->input('tarifa_linguista');
                }
                
                $idioma->save();
                return redirect()->action('Tarifa\CU10_tarifaController@indexTraductor');
        }
        
    }
}
