<?php
namespace App\Controllers;

use App\Core\DatabaseConnection;
use App\Models\CategoryModel;
use App\Models\UserModel;

class MainController
{
    private $dbc;

    public function __construct(DatabaseConnection $dbc)
    {
        $this->dbc = $dbc;
    }

    public function home()
    {
        $categoryModel = new CategoryModel($this->dbc);
        $products = $categoryModel->getAll();

        return ['products' => $products];
    }

    public function users()
    {
        $userModel = new UserModel($this->dbc);
        $users = $userModel->getAll();
        return ['users' => $users];
    }


}
