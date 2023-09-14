<?php
namespace App\Models;
use App\Models\MysqlModel;

class UsuariosModel extends MysqlModel{
    static $tabla = 'usuarios';

    public function all(){
        $mysqlmodel = self::select();
        $nombres = array(); // Inicializamos un nuevo array para los nombres

        foreach ($mysqlmodel as $fila) {
            // Verificamos si existe la clave "nombre" en cada fila y la agregamos al array de nombres
            if (isset($fila["nombre"])) {
                $nombres[] = $fila["nombre"];
            }
        }
        //var_dump($nombres); 
        return $nombres;
    }

}