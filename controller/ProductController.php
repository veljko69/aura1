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

        if (!$product){
            header('Location :/aura1/home');
            exit();
        }
        $this->set('product', $product);
    }
}