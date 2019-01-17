<?php

namespace App\Http\Controllers\Personal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class CU09_eliminarPersonalController extends Controller
{
    public function delete($rol) {        
        if (!isset($_GET['dni'])) {
            return view('pages', 'error');
        }
       
        //Personal::eliminar($_GET['dni']);
        
        //$pers = App\personal::where('dni', $get['dni'])->delete();
        
        return redirect()->action('usuari\CU06_personalController@index'); 
    }
}
