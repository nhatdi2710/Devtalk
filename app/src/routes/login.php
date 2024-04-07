<?php
require __DIR__ . '/../../../vendor/autoload.php';

use \Bramus\Router\Router;

function login_routes(Router $router): Router {
    $router->get('/', 'App\Controllers\LoginController@index');

    return $router;
}