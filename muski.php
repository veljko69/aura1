<?php

use App\Configuration;
use App\Controller\MainController;
use App\Core\DatabaseConfiguration;
use App\Core\DatabaseConnection;

require_once 'vendor/autoload.php';


$databaseConfiguration = new DatabaseConfiguration(
    Configuration::DATABASE_HOST,
    Configuration::DATABASE_USER,
    Configuration::DATABASE_PASSWORD,
    Configuration::DATABASE_NAME );
$databaseConnection= new DatabaseConnection($databaseConfiguration);


$controller = new MainController($databaseConnection);
$mdata = $controller->muski();


foreach ($mdata as $name=>$value) {
    $$name = $value;
}



require_once 'views/Pol/muskiView.php';
