<?php

namespace App\Http\Controllers\usuari;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CU03_afegirUsuariController extends Controller
{
       
    public function formCreate(){
        return view('usuari.createUsuaris');
    }
    
    public function create() {
        if (!isset($_POST['alias'])){
            return call('pages', 'error');
        }
        
        $user = Usuari::alta($_POST['alias'],$_POST['nom'],$_POST['cog1'],$_POST['cog2'],$_POST['email'],$_POST['tel'],$_POST['pass']);
        
        return view('usuari.createUsuaris.php', array('user'=>$user));
    }
}
