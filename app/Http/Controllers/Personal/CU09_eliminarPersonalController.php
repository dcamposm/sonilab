<?php

namespace App\Http\Controllers\Personal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Actor;
use App\Director;
use App\TecnicSala;
use App\Traductor;
use App\ActorIdioma;
use App\TraductorIdioma;
class CU09_eliminarPersonalController extends Controller
{
    public function delete($rol, $dni) {        
        /*if (!isset($_GET['dni'])) {
            return view('pages', 'error');
        }*/
        
        switch ($rol){
            case 'actor':
                $idio = ActorIdioma::where('dni_actor', $dni)->delete();
                $pers = Actor::where('dni_actor', $dni)->delete();              
                break;
            
            case 'director':
                $pers = Director::where('dni_director', $dni)->delete();              
                break;
            
            case 'tecnic_sala':
                $pers = TecnicSala::where('dni_tecnic_sala', $dni)->delete();
                break;
            
            case 'traductor':
                $idio = TraductorIdioma::where('dni_traductor', $dni)->delete();
                $pers = Traductor::where('dni_traductor', $dni)->delete();
                break;
        }
        
        return redirect()->action('Personal\CU06_personalController@index');
    
    }
}
