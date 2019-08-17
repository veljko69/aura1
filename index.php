<?php
  require_once 'getRegister.html';
  require_once 'vendor/autoload.php';
  require_once 'controller/MainController.php';

  use App\Core\DatabaseConfiguration;
  use App\Core\DatabaseConnection;
//  use App\Models\UserModel;
//  use App\Controller\MainController;


$databaseConfiguration = new DatabaseConfiguration('localhost','root','','aura');
  $databaseConnection= new DatabaseConnection($databaseConfiguration);

//      $userModel = new UserModel($databaseConnection);
//      $users = $userModel->getAll();
//      print_r($users);

$categoryModel = new App\Models\CategoryModel($databaseConnection);
$proizvodi = $categoryModel->getByPol('m');
//print_r($proizvodi);
$data = ['products'=>$proizvodi];

//   $controller = new App\Controller\MainController($databaseConnection);
//   $data = $controller->home();
   print_r($data);
foreach ($data as $name=>$value) {
    $$name = $value;

   }
//require_once 'views/Main/home.php';
require_once  'views/Pol/muski.html';