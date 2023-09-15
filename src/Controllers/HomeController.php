<?php
namespace App\Controllers;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig; //llamo a la clase Twig



class HomeController{

    function index($req, $res, $args){
       $view = Twig::fromRequest($req);
       // En el array parámetros le envío datos al html en este caso al index.html
       // En el index.html le mandé el title y lo llamo en tre docles llaves {{}}
       $parametros = [
        "title"=>"Home",
        "categoria"=>"home",
        "nombres" => ["Andrea","Nelson","Antonia"]
       ];
        return $view->render($res, "index.html", $parametros);
    }
    function datosUsuarios(){
        
    }
}