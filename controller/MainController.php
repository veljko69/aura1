<?php

namespace App\controller;

use App\core\Controller;
use App\Models\ProductModel;
use App\Models\UserModel;
use App\core\session\Session;

class MainController extends Controller
{

    public function home()
    {
        $dbc = $this->getDatabaseConnection();
        $productModel = new ProductModel($dbc);
        $products = $productModel->getRandom();
        $this->set('products', $products);

    }

    public function admin()
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
//        $this->getSession()->put('neki kljuc', 'neka vrijednost' . rand(100, 999));
        $this->getSession()->save();
        $staraVrijednost = $this->getSession()->get('neki kljuc', '/');
        $this->set('podatak', $staraVrijednost);
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
            header('Location:getlogin' );
//            $this->redirect('{{ BASE }}/getlogin');

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
            exit();
        }
        $this->getSession()->put('user_id', $user->user_id);
        $this->getSession()->save();

        header("Location:/aura1/home ");
        echo "LOGIN USPJESAN";
//        $this->redirect('/aura1/user/profile');
        $this->redirect('/aura1/home');

    }

    public function getLogin()
    {

    }

    public function getLogout()
    {
        $this->getSession()->remove('user_id');
        $this->getSession()->save();

        $this->redirect('/aura1/home');

    }

    public function postSlanje()
    {

        $dbc = $this->getDatabaseConnection();
        $userModel = new UserModel($dbc);

        $ime = filter_input(INPUT_POST, 'slanje_forename', FILTER_SANITIZE_STRING);
        $prezime = filter_input(INPUT_POST, 'slanje_surname', FILTER_SANITIZE_STRING);
        $telefon = filter_input(INPUT_POST, 'slanje_telefon', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'slanje_email', FILTER_SANITIZE_EMAIL);
        $ulica = filter_input(INPUT_POST, 'slanje_ulica', FILTER_SANITIZE_STRING);
        $grad = filter_input(INPUT_POST, 'slanje_grad', FILTER_SANITIZE_STRING);
        $postanskibroj = filter_input(INPUT_POST, 'slanje_postanskibroj', FILTER_SANITIZE_STRING);

        $novikupac = $userModel->addKupac($ime,$prezime, $telefon,$email, $ulica, $grad, $postanskibroj);

        if ($novikupac) {
            header('Location:hvala' );
//            $this->redirect('{{ BASE }}/getlogin');

        }


    }

    public function getSlanje(){

    }
}
