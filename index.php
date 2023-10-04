<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory; 
use Slim\Views\Twig; //Se llama al motor de plantillas Twig
use Slim\Views\TwigMiddleware; // Se llama al Middleware para integrar twig con Slim
use App\Controllers\HomeController;
use App\Controllers\ContactoController as Contacto;
use App\Controllers\UsuarioController as Usuario;
use App\ApiControllers\UsuarioApiController as UsuarioApi;

require __DIR__.'/vendor/autoload.php';


$app = AppFactory::create();


$twig = Twig::create('templates',['cache'=>false]);
$app->add(TwigMiddleware::create($app, $twig));

//Configuración de la ruta base o raíz de la aplicación, sin esto la app no sabe donde iniciar
$app->setBasePath("/nbustamante/seguros");

//Intercepta los errores y los muestra ordenados.
$app->addErrorMiddleware(true,true,false);

//Agrega Middleware de enrutamiento.
$app->addRoutingMiddleware();
//Función que llama a la clase HomeController y la funcion index cuando la url sea la raíz ("/")
$app->get('/',HomeController::class.':index');

//Función que llama a la clase HomeController y la funcion index cuando la url sea la raíz/contacto ("/contacto")
$app->get('/contacto', Contacto::class.':index');
$app->get('/usuarios', Usuario::class.':datosUsuarios');
$app->get('/api/usuarios', UsuarioApi::class.':datosUsuarios');



$app->run();