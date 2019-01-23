<?php

namespace App\Http\Controllers\Tarifa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Actor;
use App\ActorIdioma;
use App\Traductor;
use App\TraductorIdioma;
use App\Idioma;

class CU13_eliminarTarifaController extends Controller
{
    public function delete($rol, $dni, $idioma) {        
        switch ($rol){
            case 'actor':
                $idio = ActorIdioma::where('dni_actor', $dni)->where('id_idioma', $idioma)->delete();             
                       
                return redirect()->action('Tarifa\CU10_tarifaController@indexActor');
            case 'traductor':
                $idio = TraductorIdioma::where('dni_traductor', $dni)->where('id_idioma', $idioma)->delete();
                        
                return redirect()->action('Tarifa\CU10_tarifaController@indexTraductor');
        }
    
    }
}
