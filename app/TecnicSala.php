<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TecnicSala extends Model
{
    protected $table = 'tecnic_sala';
    protected $primaryKey = 'dni_tecnic_sala';
    public $timestamps = false;
    
    /*
    public static function mostrarTots() {
        $list = [];
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM usuari ORDER BY alias_usuari');
        
        foreach($req->fetchAll() as $user) {
            $list[] = new Usuari($user['alias_usuari'], $user['nom_usuari'], $user['primer_cognom_usuari'], $user['segon_cognom_usuari'], $user['email_usuari'], $user['telefon_usuari'], $user['contrasenya_usuari'], $user['id_rol']);
        }
        return $list;
    }
    */
}
