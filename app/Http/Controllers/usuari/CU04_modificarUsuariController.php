<?php

namespace App\Http\Controllers\usuari;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Usuari;
use App\DepartamentUsuari;

class CU04_modificarUsuariController extends Controller
{
    public function formUpdate($alias_usuari) {
        /*if (!isset($_GET['alias'])) {
            return view('pages.error');
        }*/
     

        //$user=Usuari::findOrFail($alias_usuari);
        
        $user = Usuari::where('alias_usuari', $alias_usuari)->firstOrFail();
        $departament = DepartamentUsuari::where('id_rol', $user->id_departament)->firstOrFail();
        //$user = Usuari::buscar($_GET['alias']);
        
        return view('usuari.modificarUsuaris', array('user'=>$user,'departament'=>$departament));
    }

    public function update() {
        if (!isset($_GET['alias'])){
            return view('pages.error');
        }
        
        $user = new Usuari;
        $user->alias_usuari = $_GET['alias'];
        $user->dni_usuari = $_POST['dni'];
        $user->nom_usuari = $_POST['nom '];
        $user->primer_cognom_usuari = $_POST['cog1'];
        $user->segon_cognom_usuari = $_POST['cog2'];
        $user->email_usuari = $_POST['email'];
        $user->telefon_usuari = $_POST['tel'];
        $user->contrasenya_usuari = $_POST['pass'];
        $user->id_departament = $_POST['id_dep'];
        $user->save();
        
        //Usuari::modificar($get['alias'],$post['nom'],$post['cog1'],$post['cog2'],$post['email'],$post['tel'],$post['pass']);
        
        return redirect()->action('usuari\CU02_usuariController@index');
    }
}
