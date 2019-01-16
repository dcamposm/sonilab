<?php

namespace App\Http\Controllers\Personal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class CU09_eliminarPersonalController extends Controller
{
    public function delete() {        
        if (!isset($_GET['dni'])) {
            return view('pages', 'error');
        }
       
        Personal::eliminar($_GET['dni']);
        
        $pers = App\personal::where('dni', $get['dni'])->delete();
        
        $pers->delete();
        $pers = Personal::all();
        //$pers = Personal::mostrarTots();
        return view('personal.index');
    
    }
}
