<?php
require_once 'vendor/autoload.php';

use App\Core\DatabaseConfiguration;
use App\Core\DatabaseConnection;
use App\Models\UserModel;

$databaseConfiguration = new DatabaseConfiguration('localhost', 'root', '', 'aura');
$databaseConnection = new DatabaseConnection($databaseConfiguration);

    $username = filter_input(INPUT_POST, 'log_username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'log_password', FILTER_SANITIZE_STRING);
//print_r([$username, $password]);

        $userModel = new UserModel($databaseConnection);


        $user = $userModel->getByUsername($username);
        if (!$user) {
            echo 'Korisnicko ime ne postoji';
            exit();
        }
        $passwordHash =$user->password_hash;

        if(!password_verify($password,$passwordHash)){
            echo 'Unesite ispravnu lozinku';
        }
        else{
            header('location: ../../aura1/views/Main/home.php');
        }

echo "kraj";