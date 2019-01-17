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

class CU07_afegirPersonalController extends Controller {

    public function formCreate() {
        return view('personal.createPersonal');
    }
    public function create(Request $request) {
        //personal actor,director,tecnic de sala,traductor
        switch ($request->input('rol')){
            case 'actor': 
                $pers = new Actor;
                $pers->dni_actor=$request->input('dni');
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
                        
                $pers->save();
                
                foreach($request->input('idioma') as $selected) {
                    $idioma = new ActorIdioma;
                    $idioma->dni_actor=$request->input('dni');
                    $idioma->id_idioma=$selected;
                    switch ($request->input('tipus')) {
                        case "video":
                            $idioma->tarifa_video_take=$request->input('tarifa_video_take');
                            $idioma->tarifa_video_cg=$request->input('tarifa_video_cg');
                            break;
                        case "cine":
                            $idioma->tarifa_cine_take=$request->input('tarifa_cine_take');
                            $idioma->tarifa_cine_cg=$request->input('tarifa_cine_cg');
                            break;
                        case "canso":
                            $idioma->tarifa_cine_cg=$request->input('tarifa_canso');
                            break;
                    }
                    $idioma->save();              
                }
                
                break;
            case 'director':
                $pers = new Director;
                $pers->dni_director=$request->input('dni');
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
        
                $pers->save();                
                break;
            case 'tecnic_sala':
                $pers = new TecnicSala;
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
                        
                $pers->save();
                break;
            case 'traductor':
                $pers = new Traductor;
                $pers->dni_traductor=$request->input('dni');
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
                $pers->save();
                
                foreach($request->input('idioma') as $selected) {
                    $idioma = new TraductorIdioma;
                    $idioma->dni_traductor=$request->input('dni');
                    $idioma->id_idioma=$selected;
                    foreach($request->input('tipus_traductor') as $trad) {
                        switch ($trad){
                            case 1:
                                $idioma->traductor=1;
                                break;
                            case 2:
                                $idioma->ajustador=1;
                                break;
                            case 3:
                                $idioma->linguista=1;
                                break;
                        }
                    }
                    $idioma->tarifa_traductor=$request->input('tarifa_traductor');
                    $idioma->tarifa_ajustador=$request->input('tarifa_ajustador');
                    $idioma->tarifa_linguista=$request->input('tarifa_linguista');
                    $idioma->tarifa_traductor_ajustador=$request->input('tarifa_traductor_ajustador');
                    $idioma->tarifa_totes=$request->input('tarifa_totes');
                    $idioma->save();
                }
                
                break;
        }

        
        /*if (!isset($_POST['dni'])){
            return view('pages', 'error');
        }*/
        //$personal = Personal::alta($_POST['dni'], $_POST['nom'], $_POST['cog1'], $_POST['cog2'], $_POST['email'], $_POST['telefon'], $_POST['dire'], $_POST['naix'], $_POST['nss'], $_POST['iban']);
        return redirect()->action('Personal\CU06_personalController@index');
    }
}
