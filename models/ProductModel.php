<?php
namespace App\Models;
use App\Core\DatabaseConnection;

class ProductModel
{
    private $dbc;

    public function __construct(DatabaseConnection &$dbc)
    {
        $this->dbc = $dbc;
    }


    public function getAll():array {
        $sql = 'SELECT * FROM proizvod';
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
    }public  function getById($id){
        $sql  = 'SELECT * FROM proizvod WHERE  proizvod_id = ?;';
        $prep = $this->dbc->getConnection()->prepare($sql);
        $res  = $prep->execute([$id]);
        $products = null;
        if ($res){
            $products = $prep->fetch(\PDO::FETCH_OBJ);
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
    public function getBySize()
    {
        $sql  = 'SELECT * FROM proizvod WHERE velicina > 42  AND velicina <51   ;';
        $prep = $this->dbc->getConnection()->prepare($sql);
        $res  = $prep->execute();
        $products = [];
        if ($res){
            $products = $prep->fetchAll(\PDO::FETCH_OBJ);
        }
        return $products;
    }


}