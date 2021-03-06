<?php

namespace App\Http\Controllers\Personal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Actor;
use App\Director;
use App\TecnicSala;
use App\Traductor;

class CU08_modificarPersonalController extends Controller
{
    public function formUpdate($rol, $dni) {
        /*if (!isset($_GET['dni'])) {
            return view('pages', 'error');
        }*/
        // utilizamos el id para obtener el post correspondiente
        switch ($rol){
            case 'actor': 
                $per = Actor::where('dni_actor', $dni)->firstOrFail();
                        
                return view('personal.modificarPersonalActor', array('per'=>$per));
                break;
            
            case 'director':
                $per = Director::where('dni_director', $dni)->firstOrFail();
                        
                return view('personal.modificarPersonalDirector', array('per'=>$per));
                break;
            
            case 'tecnic_sala':
                $per = TecnicSala::where('dni_tecnic_sala', $dni)->firstOrFail();
                        
                return view('personal.modificarPersonalTecnic', array('per'=>$per));
                break;
            
            case 'traductor':
                $per = Traductor::where('dni_traductor', $dni)->firstOrFail();
                        
                return view('personal.modificarPersonalTraductor', array('per'=>$per));
                break;
        }

    }
    public function update(Request $request, $rol, $dni) {
        /*if (!isset($_GET['dni'])){
            return view('pages', 'error');
        }*/
        
        switch ($rol){
            case 'actor': 
                $pers = Actor::where('dni_actor', $dni)->firstOrFail();
                $pers->nom_actor=$request->input('nom');
                $pers->primer_cognom_actor=$request->input('cog1');
                $pers->segon_cognom_actor=$request->input('cog2');
                $pers->email_actor=$request->input('email');
                $pers->telefon_actor=$request->input('telefon');
                $pers->direccio_actor=$request->input('direccio');
                $pers->data_naixement_actor=$request->input('datanaix');
                $pers->sexe_actor=$request->input('sexe');
                $pers->nacionalitat_actor=$request->input('nacionalitat');
                $pers->nss_actor=$request->input('nss');
                $pers->iban_actor=$request->input('iban');
                break;
            
            case 'director':
                $pers = Director::where('dni_director', $dni)->firstOrFail();
                $pers->nom_director=$request->input('nom');
                $pers->primer_cognom_director=$request->input('cog1');
                $pers->segon_cognom_director=$request->input('cog2');
                $pers->email_director=$request->input('email');
                $pers->telefon_director=$request->input('telefon');
                $pers->direccio_director=$request->input('direccio');
                $pers->data_naixement_director=$request->input('datanaix');
                $pers->sexe_director=$request->input('sexe');
                $pers->nacionalitat_director=$request->input('nacionalitat');
                $pers->nss_director=$request->input('nss');
                $pers->iban_director=$request->input('iban');                
                break;
            
            case 'tecnic_sala':
                $pers = TecnicSala::where('dni_tecnic_sala', $dni)->firstOrFail();
                $pers->nom_tecnic_sala=$request->input('nom');
                $pers->primer_cognom_tecnic_sala=$request->input('cog1');
                $pers->segon_cognom_tecnic_sala=$request->input('cog2');
                $pers->email_tecnic_sala=$request->input('email');
                $pers->telefon_tecnic_sala=$request->input('telefon');
                $pers->direccio_tecnic_sala=$request->input('direccio');
                $pers->data_naixement_tecnic_sala=$request->input('datanaix');
                $pers->sexe_tecnic_sala=$request->input('sexe');
                $pers->nacionalitat_tecnic_sala=$request->input('nacionalitat');
                $pers->nss_tecnic_sala=$request->input('nss');
                $pers->iban_tecnic_sala=$request->input('iban');
                break;
            
            case 'traductor':
                $pers = Traductor::where('dni_traductor', $dni)->firstOrFail();
                $pers->nom_traductor=$request->input('nom');
                $pers->primer_cognom_traductor=$request->input('cog1');
                $pers->segon_cognom_traductor=$request->input('cog2');
                $pers->email_traductor=$request->input('email');
                $pers->telefon_traductor=$request->input('telefon');
                $pers->direccio_traductor=$request->input('direccio');
                $pers->data_naixement_traductor=$request->input('datanaix');
                $pers->sexe_traductor=$request->input('sexe');
                $pers->nacionalitat_traductor=$request->input('nacionalitat');
                $pers->nss_traductor=$request->input('nss');
                $pers->iban_traductor=$request->input('iban');
                break;
        }
        $pers->save();
        
        
        //Personal::modificar($_GET['dni'], $_POST['nom'], $_POST['cog1'], $_POST['cog2'], $_POST['email'], $_POST['telefon'], $_POST['dire'], $_POST['naix'], $_POST['nss'], $_POST['iban']);
        
        return redirect()->action('Personal\CU06_personalController@index');
    }
}
