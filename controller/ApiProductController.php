<?php


namespace App\controller;


use App\core\ApiController;
use App\Models\ProductModel;

class ApiProductController extends ApiController
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


}