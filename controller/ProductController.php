<?php

namespace App\controller;

use App\core\Controller;
use App\Models\ProductModel;

class ProductController extends Controller
{
    public function showProductById($id)
    {
        $dbc = $this->getDatabaseConnection();
        $productModel = new ProductModel($dbc);
        $product = $productModel->getById($id);

        if (!$product) {
            header('Location :/aura1/home');
            exit();
        }
        $this->set('product', $product);
    }

    public function showKorpa($id)
    {
        $dbc = $this->getDatabaseConnection();
        $productModel = new ProductModel($dbc);
        $product = $productModel->getById($id);

        if (!$product) {
            header('Location :/aura1/home');
            exit();
        }
        $this->set('product', $product);
    }

    public function showKorpa1($id)
    {
        $dbc = $this->getDatabaseConnection();
        $productModel = new ProductModel($dbc);

        $product = $productModel->getById($id);

        if (!$product) {
            header('Location :/aura1/home');
            exit();
        }
        $this->set('product', $product);
    }

    public function showProductByName($productname)
    {
        $dbc = $this->getDatabaseConnection();
        $productModel = new ProductModel($dbc);
        $product = $productModel->getByProductName($productname);

        if (!$product) {
            header('Location :/aura1/home');
            exit();
        }
        $this->set('products', $product);
    }

    public function showProductByPolAndName($pol, $productname)
    {
        $dbc = $this->getDatabaseConnection();
        $productModel = new ProductModel($dbc);
        $product = $productModel->getByPolAndName($pol, $productname);

        if (!$product) {

            header('Location :/aura1/home');
            exit();
        }
        $this->set('products', $product);
    }

    public function addProduct()
    {
        $tip = $_POST['product_tip'];
        $naziv = $_POST['product_name'];
        $cijena = $_POST['product_price'];
        $pol = $_POST['product_gender'];
        $velicina1 = $_POST['product_size_v1'];
        $velicina2 = $_POST['product_size_v2'];
        $velicina3 = $_POST['product_size_v3'];
        $velicina4 = $_POST['product_size_v4'];
        $velicina5 = $_POST['product_size_v5'];
        $velicina6 = $_POST['product_size_v6'];
        $velicina7 = $_POST['product_size_v7'];
        $velicina8 = $_POST['product_size_v8'];
        $sifra = $_POST['product_code'];
        $boja = $_POST['product_color'];
        $materijal = $_POST['product_materijal'];
        $slika = $_POST['product_img'];

        $dbc = $this->getDatabaseConnection();

        $productModel = new ProductModel($dbc);

        $newProduct = $productModel->addProduct($tip, $naziv, $cijena, $pol, $velicina1, $velicina2, $velicina3, $velicina4, $velicina5, $velicina6, $velicina7, $velicina8, $sifra, $boja, $materijal, $slika);

        $this->redirect("/aura1/admin");
    }

    public function deleteProduct($id)
    {
        $dbc = $this->getDatabaseConnection();
        $productModel = new ProductModel($dbc);
        $productModel->delete($id);

        $this->redirect("/aura1/admin");
    }

    public function getEdit($id)
    {
        $dbc = $this->getDatabaseConnection();
        $productModel = new ProductModel($dbc);
        $product = $productModel->getById($id);

        if (!$product) {
            header('Location :/aura1/home');

        }
        $this->set('product', $product);
        return $productModel;


    }

    public function postEdit($id)
    {
        $productModel = $this->getEdit($id);

        $dbc = $this->getDatabaseConnection();
        $productModel = new ProductModel($dbc);

        $tip = filter_input(INPUT_POST, 'product_tip', FILTER_SANITIZE_STRING);
        $naziv = filter_input(INPUT_POST, 'product_name', FILTER_SANITIZE_STRING);
        $cijena = filter_input(INPUT_POST, 'product_price', FILTER_SANITIZE_STRING);
        $pol = filter_input(INPUT_POST, 'product_gender', FILTER_SANITIZE_STRING);
        $v1 = filter_input(INPUT_POST, 'product_size_v1', FILTER_SANITIZE_STRING);
        $v2 = filter_input(INPUT_POST, 'product_size_v2', FILTER_SANITIZE_STRING);
        $v3 = filter_input(INPUT_POST, 'product_size_v3', FILTER_SANITIZE_STRING);
        $v4 = filter_input(INPUT_POST, 'product_size_v4', FILTER_SANITIZE_STRING);
        $v5 = filter_input(INPUT_POST, 'product_size_v5', FILTER_SANITIZE_STRING);
        $v6 = filter_input(INPUT_POST, 'product_size_v6', FILTER_SANITIZE_STRING);
        $v7 = filter_input(INPUT_POST, 'product_size_v7', FILTER_SANITIZE_STRING);
        $v8 = filter_input(INPUT_POST, 'product_size_v8', FILTER_SANITIZE_STRING);
        $sifra = filter_input(INPUT_POST, 'product_code', FILTER_SANITIZE_STRING);
        $boja = filter_input(INPUT_POST, 'product_color', FILTER_SANITIZE_STRING);
        $materijal = filter_input(INPUT_POST, 'product_materijal', FILTER_SANITIZE_STRING);
        $slika = filter_input(INPUT_POST, 'product_img', FILTER_SANITIZE_STRING);


        $res = $productModel->editProduct($id,$tip, $naziv, $cijena,  $pol,$v1,$v2,$v3,$v4,$v5,$v6,$v7,$v8, $sifra, $boja,$materijal, $slika);

//var_dump($res);
//        if ($res=true){
//      echo 'uspjesan update';
//
//        }

        $this->redirect("/aura1/admin");

    }
//
}