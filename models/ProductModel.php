<?php

namespace App\Models;

use App\Core\DatabaseConnection;
//use App\core\Model;

class ProductModel
{
    private $dbc;

    public function __construct(DatabaseConnection &$dbc)
    {
        $this->dbc = $dbc;
    }

    public function getById($id)
    {
        $sql = 'SELECT * FROM proizvod  WHERE proizvod_id = ?;';
        $prep = $this->dbc->getConnection()->prepare($sql);
        $res = $prep->execute([$id]);
        $products = null;
        if ($res) {
            $products = $prep->fetch(\PDO::FETCH_OBJ);
        }
        return $products;
    }

    public function getAll(): array
    {
        $sql = 'SELECT * FROM proizvod';
        $prep = $this->dbc->getConnection()->prepare($sql);
        $res = $prep->execute();
        $products = [];
        if ($res) {
            $products = $prep->fetchAll(\PDO::FETCH_OBJ);
        }
        return $products;

    }

    public function getByProductName($productname)
    {
        $sql = 'SELECT * FROM proizvod WHERE  naziv = ?;';
        $prep = $this->dbc->getConnection()->prepare($sql);
        $res = $prep->execute([$productname]);
        $products = [];
        if ($res) {
            $products = $prep->fetchAll(\PDO::FETCH_OBJ);
        }
        return $products;
    }

    public function getByPol(string $pol)
    {
        $sql = 'SELECT * FROM proizvod WHERE  pol = ?;';
        $prep = $this->dbc->getConnection()->prepare($sql);
        $res = $prep->execute([$pol]);
        $products = [];
        if ($res) {
            $products = $prep->fetchAll(\PDO::FETCH_OBJ);
        }
        return $products;
    }

    public function getByPolAndName(string $pol, string $productname)
    {
        $sql = 'SELECT * FROM proizvod WHERE  pol = ? AND naziv=?;';
        $prep = $this->dbc->getConnection()->prepare($sql);
        $res = $prep->execute([$pol, $productname]);
        $products = [];
        if ($res) {
            $products = $prep->fetchAll(\PDO::FETCH_OBJ);
        }
        return $products;
    }

    public function getBySize()
    {
        $sql = 'SELECT * FROM proizvod WHERE velicina > 42  AND velicina <51   ;';
        $prep = $this->dbc->getConnection()->prepare($sql);
        $res = $prep->execute();
        $products = [];
        if ($res) {
            $products = $prep->fetchAll(\PDO::FETCH_OBJ);
        }
        return $products;
    }

    public function addProduct(string $naziv, string $cijena, string $velicina,string $pol,string $sifra, string $boja,string $slika)
    {
        $sql = 'INSERT INTO proizvod(naziv, cijena,velicina,pol,sifra,boja,slika)
                    VALUES(?,?,?,?,?,?,?)';
        $prep = $this->dbc->getConnection()->prepare($sql);
        $res = $prep->execute([$naziv, $cijena, $velicina, $pol, $sifra, $boja, $slika]);

        return $res;
    }

    public function delete($id)
    {
        $sql = 'DELETE FROM proizvod WHERE proizvod_id=?;';
        $prep = $this->dbc->getConnection()->prepare($sql);
        $prep->execute([$id]);
    }

public function editProduct( $naziv, $id,$cijena,$velicina,$pol,$sifra,$boja,$slika)
    {

      $sql = "UPDATE proizvod SET  naziv = ?, cijena = ?, velicina = ?, pol = ?,sifra = ?,boja =?, slika = ? WHERE  proizvod_id =?  ;";

        var_dump([ $naziv, $cijena,$velicina,$pol,$sifra,$boja,$slika,$id]);

    $prep = $this->dbc->getConnection()->prepare($sql);
    $editProduct = $prep->execute([$id, $naziv, $cijena,$velicina,$pol,$sifra,$boja,$slika]);


    var_dump($editProduct);
    if ($editProduct=true){
        echo 'OK';
    }

    return $editProduct;
    }

}