<?php

namespace App\Http\Controllers\usuari;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CU04_modificarUsuariController extends Controller
{
    public function formUpdate(){
        return view('usuari.modificarUsuaris');
    }
}
