<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use App\Controllers\HomeController;

require __DIR__.'/vendor/autoload.php';


$app = AppFactory::create();

//Configuración de la ruta base, sin esto la app no sabe donde iniciar
$app->setBasePath("/curso-slim");

$app->get('/',HomeController::class.':index');
$app->get('/contacto',function($request, $response, $args){
    $response->getBody()->write('Estoy en el contacto');
    return $response;
});


$app->run();