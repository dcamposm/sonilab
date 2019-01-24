<?php

namespace App\Http\Controllers\Tarifa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Actor;
use App\ActorIdioma;
use App\Traductor;
use App\TraductorIdioma;
use App\Idioma;

class CU10_tarifaController extends Controller
{
    public function indexActor() {
        
        $actors = Actor::all();
        $tarifes = ActorIdioma::all()->sortBy("dni_actor");
        $idiomes = Idioma::all();
        
        return view('tarifa.indexActor', array('actors'=>$actors,'tarifes'=>$tarifes, 'idiomes'=>$idiomes));        
    }
    
    public function indexTraductor() {
        
        $traductors = Traductor::all();
        $tarifes = TraductorIdioma::all()->sortBy("dni_traductor");;
        $idiomes = Idioma::all();
        
        return view('tarifa.indexTraductor', array('traductors'=>$traductors,'tarifes'=>$tarifes, 'idiomes'=>$idiomes));        
    }
}
