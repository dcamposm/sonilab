<?php

namespace App\Http\Controllers\Personal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CU06_personalController extends Controller
{
    public function index() {
        
        $pers = Personal::all();
        
        return view('personal.index', array('personal'=>$pers));
        
    }
}
