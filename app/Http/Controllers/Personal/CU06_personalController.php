<?php

namespace App\Http\Controllers\Personal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Actor;
use App\Director;
use App\TecnicSala;
use App\Traductor;

class CU06_personalController extends Controller
{
    public function index() {
        
        $actors = Actor::all();
        $directors = Director::all();
        $tecnic = TecnicSala::all();
        $traductor = Traductor::all();

        return view('personal.index', array('actors'=>$actors, 'directors'=>$directors, 'tecnics'=>$tecnic, 'traductors'=>$traductor));
        
    }
}
