<?php
  require_once 'vendor/autoload.php';

  use App\Core\DatabaseConfiguration;
  use App\Core\DatabaseConnection;
  use App\Models\UserModel;


$databaseConfiguration = new DatabaseConfiguration('localhost','root','','aura');
  $databaseConnection= new DatabaseConnection($databaseConfiguration);

      $userModel = new UserModel($databaseConnection);
      $users = $userModel->getAll();
      print_r($users);


