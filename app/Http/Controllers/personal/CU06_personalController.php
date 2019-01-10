<?php

namespace App\Http\Controllers\Personal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CU06_personalController extends Controller
{
    public function index() {
        return view('personal.index');
    }
}
