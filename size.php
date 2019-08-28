<?php

use App\Configuration;

require_once 'vendor/autoload.php';


$databaseConfiguration = new \App\Core\DatabaseConfiguration(
    Configuration::DATABASE_HOST,
    Configuration::DATABASE_USER,
    Configuration::DATABASE_PASSWORD,
    Configuration::DATABASE_NAME );
$databaseConnection= new \App\Core\DatabaseConnection($databaseConfiguration);




$model = new \App\Models\CategoryModel($databaseConnection);
$vel = $model->getBySize();


$controller = new \App\Controller\MainController($databaseConnection);
$data = $controller->sizePlus();




foreach ($data as $name=>$value) {
    $$name = $value;
}

require_once 'views/Main/size.php';

