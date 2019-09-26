<?php

namespace App;
require_once 'vendor/autoload.php';
use App\Controller\MainController;
use App\core\ApiController;
use App\Core\DatabaseConfiguration;
use App\Core\DatabaseConnection;
use App\Core\Router;
use App\core\session\Session;
use App\Models\ProductModel;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use Twig\Loader\FilesystemLoader;

ob_start();

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
//var_dump($arguments);
$fullControllerName = '\\App\\Controller\\' . $route->getControllerName() . 'Controller';
$controller = new $fullControllerName($databaseconnection);

$sessionStorageClassName = Configuration::SESSION_STORAGE;
$sessionStorageConstructorArguments = Configuration::SESSION_STORAGE_DATA;
$sessionStorage= new $sessionStorageClassName(...$sessionStorageConstructorArguments);

$session = new Session($sessionStorage,Configuration::SESSION_LIFETIME);
$controller->setSession($session);
call_user_func_array([$controller, $route->getMethodName()], $arguments);

$data = $controller->getData();


#bez rutiranja
//var_dump($data);
//foreach ($data as $name => $value) {
//    $$name = $value;
//}
//require_once 'views/'.$route->getControllerName().'/'.$route->getMethodName().'.php' ;

if($controller instanceof  ApiController){
  ob_clean();
    header('Content-type:application/json; charset=utf-8');
        header('Access-Control-Allow-Origin: *');

    echo json_encode($data);
  exit();
}

$loader = new FilesystemLoader('./views/');
$twig = new Environment($loader, [
    "cache" => "./twig-cache",
    "auto_reload"=>true
]);
try {
    echo $twig->render($route->getControllerName() . '/' . $route->getMethodName() .'.html', $data);
} catch (LoaderError $e) {
} catch (RuntimeError $e) {
} catch (SyntaxError $e) {
}












































































