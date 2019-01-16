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
    public function formUpdate() {
        if (!isset($_GET['dni'])) {
            return view('pages', 'error');
        }
        // utilizamos el id para obtener el post correspondiente
        $per = Personal::buscar($_GET['dni']);
        
        return view ('personal.formUpdate');
    }
    public function update(Request $request) {
        if (!isset($_GET['dni'])){
            return view('pages', 'error');
        }
        
        switch ($request->input('rol')){
            case 'actor': 
                $pers = new Actor;
                $pers->dni_actor=$_GET('dni');
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
                $pers = new Director;
                $pers->dni_director=$_GET('dni');
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
                $pers = new TecnicSala;
                $pers->dni_tecnic_sala=$_GET('dni');
                $pers->dni_tecnic_sala=$request->input('dni');
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
                $pers = new Traductor;
                $pers->dni_traductor=$_GET('dni');
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
        
        return redirect()->action('usuari\CU06_usuariController@index');
    }
}
