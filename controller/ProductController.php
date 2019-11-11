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

    public function addProduct()    {
        $naziv = $_POST['product_name'];
        $cijena= $_POST['product_price'];
        $velicina = $_POST['product_size'];
        $pol = $_POST['product_gender'];
        $sifra = $_POST['product_code'];
        $boja = $_POST['product_color'];
        $slika = $_POST['product_img'];

        $dbc = $this->getDatabaseConnection();

        $productModel = new ProductModel($dbc);

$newProduct = $productModel->addProduct($naziv, $cijena,$velicina,$pol,$sifra,$boja,$slika);

$this->redirect("/aura1/admin");
    }

    public function deleteProduct($id)    {
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
    public function postEdit($id){
        $productModel = $this->getEdit($id);

        $dbc = $this->getDatabaseConnection();
        $productModel = new ProductModel($dbc);

        $naziv = filter_input(INPUT_POST, 'product_name', FILTER_SANITIZE_STRING);
        $cijena = filter_input(INPUT_POST,'product_price',FILTER_SANITIZE_STRING);
       $velicina = filter_input(INPUT_POST,'product_size',FILTER_SANITIZE_STRING);
       $pol = filter_input(INPUT_POST,'product_gender',FILTER_SANITIZE_STRING);
       $sifra = filter_input(FILTER_SANITIZE_STRING,'product_code',FILTER_SANITIZE_STRING);
       $boja = filter_input(INPUT_POST,'product_color',FILTER_SANITIZE_STRING);
       $slika = filter_input(INPUT_POST,'product_img',FILTER_SANITIZE_STRING);


       $res =  $productModel->editProduct( $naziv, $cijena,$velicina,$pol,$sifra,$boja,$slika,$id);

var_dump($res);
        if ($res=true){
      echo 'uspjesan update';

        }

//        $this->redirect("/aura1/admin");

    }

}