<?php

namespace App\Http\Controllers\Personal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class CU09_eliminarPersonalController extends Controller
{
    public function delete() {        
        /*if (!isset($_GET['dni'])) {
            return view('pages', 'error');
        }*/
        
        $pers = App\personal::where('dni', $get['dni'])->delete();
        
        return redirect()->action('Personal\CU06_personalController@index');
    
    }
}
