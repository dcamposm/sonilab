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
        
        $actor = Actor::all();
        $director = Director::all();
        $tecnic = TecnicSala::all();
        $traductor = Traductor::all();
        
        $pers = array_merge($actor, $director, $tecnic, $traductor);
        
        return view('personal.index', array('personal'=>$pers));
        
    }
}
