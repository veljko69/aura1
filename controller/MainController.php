<?php

namespace App\Controller;

use App\core\Controller;
use App\Models\ProductModel;
use App\Models\UserModel;

class MainController extends Controller
{


    public function home()
    {
        $dbc = $this->getDatabaseConnection();
        $productModel = new ProductModel($dbc);
        $products = $productModel->getAll();
        $this->set('products', $products);
    }

    public function muski()
    {
        $dbc = $this->getDatabaseConnection();
        $productModel = new ProductModel($dbc);
        $products = $productModel->getByPol('m');
        $this->set('products', $products);
    }

    public function zenski()
    {
        $dbc = $this->getDatabaseConnection();
        $productModel = new ProductModel($dbc);
        $products = $productModel->getByPol('z');

        $this->set('products', $products);

    }

    public function sizeplus()
    {
        $dbc = $this->getDatabaseConnection();

        $productModel = new ProductModel($dbc);
        $products = $productModel->getBySize();

        $this->set('products', $products);
    }

    public function postRegister()
    {
        $username = filter_input(INPUT_POST, 'reg_username', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'reg_email', FILTER_SANITIZE_EMAIL);
        $forename = filter_input(INPUT_POST, 'reg_forename', FILTER_SANITIZE_STRING);
        $surname = filter_input(INPUT_POST, 'reg_surname', FILTER_SANITIZE_STRING);
        $password1 = filter_input(INPUT_POST, 'reg_password1', FILTER_SANITIZE_STRING);
        $password2 = filter_input(INPUT_POST, 'reg_password2', FILTER_SANITIZE_STRING);

        print_r($username);

        if ($password1 !== $password2) {
            echo 'Niste dva puta unijeli isti password .';
            exit();
        }

        $dbc = $this->getDatabaseConnection();
        $userModel = new UserModel($dbc);


        $user = $userModel->getByUsername($username);
        if ($user) {
            echo 'Korisnicko ime vec postoji';
            exit();
        }

        $user = $userModel->getByEmail($email);
        if ($user) {
            echo 'Vec postoji korisnik sa tim e-mailom';
            exit();

        }
        $passwordHash = password_hash($password1, PASSWORD_DEFAULT);

        $newuser = $userModel->add($username, $email, $passwordHash, $forename, $surname);
        if ($newuser) {
            header("Location:getlogin ");
        }
    }

    public function getRegister()
    {

    }

    public function postLogin()
    {

        $username = filter_input(INPUT_POST, 'log_username', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'log_password', FILTER_SANITIZE_STRING);

        $dbc = $this->getDatabaseConnection();
        $userModel = new UserModel($dbc);

        $user = $userModel->getByUsername($username);
        if (!$user) {
            echo 'Korisnicko ime ne postoji';
            exit();
        }
        $passwordHash = $user->password_hash;

        if (!password_verify($password, $passwordHash)) {
            echo 'Unesite ispravnu lozinku';
        }
        header("Location:/aura1/home ");
    }

    public function getLogin()
    {

    }
    public function showProductById($id)
    {
        $dbc = $this->getDatabaseConnection();
        $productModel = new ProductModel($dbc);
        $products = $productModel->getById($id);
        $this->set('products', $products);
    }
}
