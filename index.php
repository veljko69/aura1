<?php

namespace App;

use App\Controller\MainController;
use App\Core\DatabaseConfiguration;
use App\Core\DatabaseConnection;
use App\Core\Router;
use App\core\Route;

require_once 'views/Main/home.php';
require_once 'vendor/autoload.php';

$databaseConfiguration = new DatabaseConfiguration(
    Configuration::DATABASE_HOST,
    Configuration::DATABASE_USER,
    Configuration::DATABASE_PASSWORD,
    Configuration::DATABASE_NAME);
$databaseconnection = new DatabaseConnection($databaseConfiguration);
// $controller = new MainController($databaseconnection)
//     $controller->home();
// $data= $controller->getData();
//
// foreach ($data as $name=>$value )



//$httpMethod = filter_input(INPUT_SERVER, 'REQUEST_METHOD');
$url = filter_input(INPUT_GET, 'URL');
echo $url;
//print_r($httpMethod);

$router = new Router();
$routes = require_once 'Routes.php';
foreach ($routes as $route){
    $route = $router->add($httpMethod,$url);
    print_r($route);
}


    echo $url;
print_r($httpMethod);