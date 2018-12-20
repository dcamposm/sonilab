<?php

namespace App\Http\Controllers\Personal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class CU08_modificarPersonalController extends Controller
{
    public function formUpdate() {
        return view('personal.formUpdate');
    }
}
