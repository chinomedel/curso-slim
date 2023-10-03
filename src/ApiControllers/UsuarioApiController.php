<?php
namespace App\ApiControllers;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
//use Slim\Psr7\Response as SlimResponse;
use App\Models\UsuariosModel as Usuarios;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 

class UsuarioApiController{

    function datosUsuarios($req, $response, $args) {
        $usuarios = new Usuarios();
        $nombres = $usuarios->all();
       
        

        if (!empty($nombres)) { 
            $response->getBody()->write(json_encode($nombres));
        } else {
            $response->getBody()->write(json_encode(["message" => "No hay usuarios"]));
        }
        
          
        return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);

    }

}