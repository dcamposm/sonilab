<?php

namespace App\Http\Controllers\Personal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
    public function update() {
        if (!isset($_GET['dni'])){
            return view('pages', 'error');
        }
        
        switch (rol){
            case 'actor': 
                $pers = new Actor;
                $pers->dni_actor=$GET('dni');
                $pers->nom_actor=$POST('nom');
                $pers->primer_cognom_actor=$POST('cog1');
                $pers->segon_cognom_actor=$POST('cog2');
                $pers->email_actor=$POST('email');
                $pers->telefon_actor=$POST('telefon');
                $pers->direccio_actor=$POST('direccio');
                $pers->data_naixement_actor=$POST('datanaix');
                $pers->sexe_actor=$POST('sexe');
                $pers->nacionalitat_actor=$POST('nacionalitat');
                $pers->nss_actor=$POST('nss');
                $pers->iban_actor=$POST('iban');
                break;
            
            case 'director':
                $pers = new Director;
                $pers->dni_director=$GET('dni');
                $pers->nom_director=$POST('nom');
                $pers->primer_cognom_director=$POST('cog1');
                $pers->egon_cognom_director=$POST('cog2');
                $pers->email_director=$POST('email');
                $pers->telefon_director=$POST('telefon');
                $pers->direccio_director=$POST('direccio');
                $pers->data_naixement_director=$POST('datanaix');
                $pers->sexe_director=$POST('sexe');
                $pers->nacionalitat_director=$POST('nacionalitat');
                $pers->nss_director=$POST('nss');
                $pers->iban_director=$POST('iban');                
                break;
            
            case 'tecnic_sala':
                $pers = new TecnicSala;
                $pers->dni_tecnic_sala=$GET('dni');
                $pers->nom_tecnic_sala=$POST('nom');
                $pers->primer_cognom_tecnic_sala=$POST('cog1');
                $pers->segon_cognom_tecnic_sala=$POST('cog2');
                $pers->email_tecnic_sala=$POST('email');
                $pers->telefon_tecnic_sala=$POST('telefon');
                $pers->direccio_tecnic_sala=$POST('direccio');
                $pers->data_naixement_tecnic_sala=$POST('datanaix');
                $pers->sexe_tecnic_sala=$POST('sexe');
                $pers->nacionalitat_tecnic_sala=$POST('nacionalitat');
                $pers->nss_tecnic_sala=$POST('nss');
                $pers->iban_tecnic_sala=$POST('iban');
                break;
            
            case 'traductor':
                $pers = new Traductor;
                $pers->dni_traductor=$GET('dni');
                $pers->nom_traductor=$POST('nom');
                $pers->primer_cognom_traductor=$POST('cog1');
                $pers->segon_cognom_traductor=$POST('cog2');
                $pers->email_traductor=$POST('email');
                $pers->telefon_traductor=$POST('telefon');
                $pers->direccio_traductor=$POST('direccio');
                $pers->data_naixement_traductor=$POST('datanaix');
                $pers->sexe_traductor=$POST('sexe');
                $pers->nacionalitat_traductor=$POST('nacionalitat');
                $pers->nss_traductor=$POST('nss');
                $pers->iban_traductor=$POST('iban');
                break;
        }
        $pers->save();
        
        
        //Personal::modificar($_GET['dni'], $_POST['nom'], $_POST['cog1'], $_POST['cog2'], $_POST['email'], $_POST['telefon'], $_POST['dire'], $_POST['naix'], $_POST['nss'], $_POST['iban']);
        
        return redirect()->action('usuari\CU06_personalController@index');
    }
}
