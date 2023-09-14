<?php
namespace App\Models;
use PDO;

class MysqlModel{
    private static $tabla = 'tbl';

    protected static function select(){
        $sql="select nombre from ".static::$tabla;

        return self::ejecutarSql($sql);
    }
    protected static function ejecutarSql($sql){
        $conn = new PDO("mysql:host=localhost;dbname=slim_prueba","root", "admin");
    // Verifica si la conexión a la base de datos se estableció correctamente
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $stm = $conn->prepare($sql);
        $resultados = $stm->execute();

        $filas = [];

        while($r = $stm->fetch(PDO::FETCH_ASSOC)){
            $filas[] = $r;
        }
        return $filas;
    }
    
}