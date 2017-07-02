<?php
use Illuminate\Http\Request;
use PlatziPHP\Http\Controllers\HomeController;
require_once __DIR__ . '/../vendor/autoload.php';


$container = new \Illuminate\Container\Container();

$router = new \Illuminate\Routing\Router(
    new \Illuminate\Events\Dispatcher($container),
    $container
);

$router->get('/', HomeController::class . '@index');
$router->get('/post/{id}', HomeController::class . '@show');

$response = $router->dispatch(Request::capture());

$response->send();