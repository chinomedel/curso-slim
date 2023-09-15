<?php
namespace App\Controllers;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig; //llamo a la clase Twig
use App\Models\UsuariosModel as Usuarios;



class UsuarioController{

    function datosUsuarios($req, $res, $args){
        $view = Twig::fromRequest($req);
        $usuarios = new Usuarios();
        $nombres = $usuarios->all();
        
        //var_dump($nombres);
       // En el array parámetros le envío datos al html en este caso al index.html
       // En el index.html le mandé el title y lo llamo en tre docles llaves {{}}
       $parametros = [
        "title"=>"Usuarios",
        "categoria"=>"usuarios",
        "nombres" => $nombres
       ];
        return $view->render($res, "usuarios.html", $parametros);
    }
}