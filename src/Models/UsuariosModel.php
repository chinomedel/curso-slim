<?php
namespace App\Models;
use App\Models\MysqlModel;

class UsuariosModel extends MysqlModel{
    static $tabla = 'usuarios';

    public function all(){
        $mysqlmodel = self::select();
        var_dump($mysqlmodel); 
    }

}