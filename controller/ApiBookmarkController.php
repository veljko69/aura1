<?php


namespace App\controller;


use App\core\ApiController;
use App\Models\ProductModel;

class ApiBookmarkController extends ApiController
{
    public function getBookmarks(){
       $bookmarks =  $this->getSession()->get('bookmarks',[1]);
       $this->set('bookmarks',$bookmarks);
    }

    public function addBookmark($productId){
        $dbc = $this->getDatabaseConnection();
        $productModel = new ProductModel($dbc);
        $product = $productModel->getById($productId);

        if (!$product){
            $this->set('error', -1);
            return;
        }
        $bookmarks =  $this->getSession()->get('bookmarks',[]);

        foreach ($bookmarks as $bookmark){

            if ($bookmark->proizvod_id ==$productId){
               $this->set('error', -2);
               return;
            };
        }
        $bookmarks[] = $product;
        $this->getSession()->put('bookmarks', $bookmarks);

        $this->set('error', 0);
        return;
    }
    public function clear(){
        $this->getSession()->put('bookmarks', []);
        $this->set('error', 0);
//        header('Location :/aura1/home');

    }
}