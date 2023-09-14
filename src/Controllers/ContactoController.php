<?php

namespace App\Controllers;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig; //llamo a la clase Twig

class ContactoController{

    function index($request, $response, $args){
        $view = Twig::fromRequest($request);
       // En el array parámetros le envío datos al html en este caso al index.html
       // En el index.html le mandé el title y lo llamo en tre docles llaves {{}}
       $parametros = [
        "title"=>"Contacto",
        "categoria"=>"contacto"
       ];
        return $view->render($response, "contacto.html", $parametros);
    }
}