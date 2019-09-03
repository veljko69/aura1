<?php

namespace App;
require_once 'vendor/autoload.php';
use App\Controller\MainController;
use App\Core\DatabaseConfiguration;
use App\Core\DatabaseConnection;
use App\Core\Router;


$databaseConfiguration = new DatabaseConfiguration(
    Configuration::DATABASE_HOST,
    Configuration::DATABASE_USER,
    Configuration::DATABASE_PASSWORD,
    Configuration::DATABASE_NAME);
$databaseconnection = new DatabaseConnection($databaseConfiguration);
 $controller = new MainController($databaseconnection);
     $controller->home();
 $data= $controller->getData();

 foreach ($data as $name=>$value )


$httpMethod = filter_input(INPUT_SERVER, 'REQUEST_METHOD');
$url = filter_input(INPUT_GET, 'URL');


$router = new Router();
$routes = require_once 'Routes.php';

foreach ($routes as $route) {
    $router->add($route);
}
$route = $router->find($httpMethod, $url);

$arguments = $route->extractArguments($url);

$fullControllerName = '\\App\\Controller\\' . $route->getControllerName() . 'Controller';
$controller = new $fullControllerName($databaseconnection);

call_user_func_array([$controller, $route->getMethodName()], $arguments);

$data = $controller->getData();

foreach ($data as $name => $value) {
    $$name = $value;
}
require_once 'views/'.$route->getControllerName().'/'.$route->getMethodName().'.php' ;
