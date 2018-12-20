<?php

namespace App\Http\Controllers\Personal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class CU07_afegirPersonalController extends Controller {

    public function formCreate() {
        return view('personal.formInsert');
    }

}
