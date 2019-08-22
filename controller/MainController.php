<?php
namespace App\Controller;

use App\Core\DatabaseConnection;
use App\Models\CategoryModel;

class MainController
{
    private $dbc;

    public function __construct(DatabaseConnection $dbc)
    {
        $this->dbc=$dbc;
    }

    public function home(){
        $categoryModel = new CategoryModel($this->dbc);
        $products = $categoryModel->getAll();

        return [ 'products'=>$products] ;
    }
    public function muski(){
        $categoryModel = new CategoryModel($this->dbc);
        $products = $categoryModel->getByPol('m');

        return [ 'products'=>$products] ;
    }
    public function zenski(){
        $categoryModel = new CategoryModel($this->dbc);
        $products = $categoryModel->getByPol('z');

        return [ 'products'=>$products] ;
    }



}