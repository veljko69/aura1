<?php
require_once 'vendor/autoload.php';

use App\Core\DatabaseConfiguration;
use App\Core\DatabaseConnection;
use App\Models\UserModel;

$databaseConfiguration = new DatabaseConfiguration('localhost', 'root', '', 'aura');
$databaseConnection = new DatabaseConnection($databaseConfiguration);

        $username = filter_input(INPUT_POST, 'reg_username', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'reg_email', FILTER_SANITIZE_EMAIL);
        $forename = filter_input(INPUT_POST, 'reg_forename', FILTER_SANITIZE_STRING);
        $surname = filter_input(INPUT_POST, 'reg_surname', FILTER_SANITIZE_STRING);
        $password1 = filter_input(INPUT_POST, 'reg_password1', FILTER_SANITIZE_STRING);
        $password2 = filter_input(INPUT_POST, 'reg_password2', FILTER_SANITIZE_STRING);

        print_r($username);

     if($password1 !== $password2){
         echo 'Niste dva puta unijeli isti password .';
        exit();
     }

     $userModel = new UserModel($databaseConnection);


         $user=$userModel->getByUsername($username);
         if($user){
             echo 'Korisnicko ime vec postoji';
             exit();
         }

         $user = $userModel->getByEmail($email);
         if ($user){
             echo 'Vec postoji korisnik sa tim e-mailom';
             exit();

         }
         $passwordHash =password_hash($password1,PASSWORD_DEFAULT);

         $newuser = $userModel->add($username, $email,$passwordHash,$forename,$surname);
         if($newuser){
             header("Location: views/Main/getLogin.html ");
         }