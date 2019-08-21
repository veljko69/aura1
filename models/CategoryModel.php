<?php
namespace App\Models;
use App\Core\DatabaseConnection;

class CategoryModel
{
    private $dbc;

    public function __construct(DatabaseConnection &$dbc)
    {
        $this->dbc = $dbc;
    }

//    public  function getById($userId){
//        $sql  = 'SELECT * FROM user WHERE  user_id = ?;';
//        $prep = $this->dbc->getConnection()->prepare($sql);
//        $res  = $prep->execute([$userId]);
//        $user = NULL;
//        if ($res){
//            $user = $prep->fetch(\PDO::FETCH_OBJ);
//        }
//        return $user;
//    }

    public function getAll():array {
        $sql = 'SELECT * FROM proizvodi';
        $prep = $this->dbc->getConnection()->prepare($sql);
        $res = $prep->execute();
        $products = [];
        if ($res){
            $products = $prep->fetchAll(\PDO::FETCH_OBJ);
        }
        return $products;

    }
    public  function getByProductName($productname){
        $sql  = 'SELECT * FROM proizvod WHERE  naziv = ?;';
        $prep = $this->dbc->getConnection()->prepare($sql);
        $res  = $prep->execute([$productname]);
        $products = [];
        if ($res){
            $products = $prep->fetchAll(\PDO::FETCH_OBJ);
        }
        return $products;
    }

    public function getByPol(string $pol)
    {
        $sql  = 'SELECT * FROM proizvod WHERE  pol = ?;';
        $prep = $this->dbc->getConnection()->prepare($sql);
        $res  = $prep->execute([$pol]);
        $products = [];
        if ($res){
            $products = $prep->fetchAll(\PDO::FETCH_OBJ);
        }
        return $products;
    }


}