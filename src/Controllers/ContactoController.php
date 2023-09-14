<?php

namespace App\Controllers;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class ContactoController{

    function index($request, $response, $args){
        $view = Twig::fromRequest($req);
       // En el array parámetros le envío datos al html en este caso al index.html
       // En el index.html le mandé el title y lo llamo en tre docles llaves {{}}
       $parametros = [
        "title"=>"Página principal",
        "categoria"=>"home"
       ];
        return $view->render($res, "index.html", $parametros);
    }
}