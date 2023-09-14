<?php
namespace App\ApiControllers;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Psr7\Response as SlimResponse;

use App\Models\UsuariosModel as Usuarios;


class UsuarioApiController{

    function datosUsuarios($req, $response) {
        $usuarios = new Usuarios();
        $nombres = $usuarios->all();
        
        // Crear una respuesta SlimResponse con el contenido JSON
        $response = new SlimResponse();
        if(!empty($nombres)){
            $response->getBody()->write(json_encode($nombres));
        }else{
            $response->getBody()->write("No hay usuarios");
        }

        // Establecer los encabezados de respuesta apropiados para JSON
        $response = $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(200); // Código de estado 200 OK
        
        return $response;
        
    }
}