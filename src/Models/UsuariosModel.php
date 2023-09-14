<?php
namespace App\Models;
use App\Models\MysqlModel;

class UsuariosModel extends MysqlModel{

    public function all(){
        $sql="select nombre from usuarios";
        $mysqlmodel = new MysqlModel();
        $resultados = $mysqlmodel->ejecutarSql($sql);
        var_dump($resultados); 
    }

}