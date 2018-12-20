<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CU02_usuariController extends Controller
{
    public function index(){
        return view('usuaris.index');
    }
}
