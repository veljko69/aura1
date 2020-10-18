<?php

namespace App\models;

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

    }public function getRandom()
    {
        $sql = 'SELECT * FROM proizvod ORDER BY RAND() LIMIT 4';
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
        $sql = 'SELECT * FROM proizvod WHERE  tip = ?;';
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
        $sql = 'SELECT * FROM proizvod WHERE  pol = ? ORDER BY RAND();';
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
        $sql = 'SELECT * FROM proizvod WHERE  pol = ? AND tip=?;';
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
    public function getBySizeAndPol()
    {
        $sql = 'SELECT * FROM proizvod WHERE pol=? AND  velicina > 42  AND velicina <51   ;';
        $prep = $this->dbc->getConnection()->prepare($sql);
        $res = $prep->execute();
        $products = [];
        if ($res) {
            $products = $prep->fetchAll(\PDO::FETCH_OBJ);
        }
        return $products;
    }

    public function addProduct($tip ,$naziv, $cijena,$pol,$velicina1,$velicina2,$velicina3,$velicina4,$velicina5,$velicina6,$velicina7,$velicina8,$sifra,$boja,$materijal,$slika)
    {
        $sql = 'INSERT INTO proizvod(tip,naziv, cijena,pol,v1,v2,v3,v4,v5,v6,v7,v8,sifra,boja,materijal,slika)
                    VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
        $prep = $this->dbc->getConnection()->prepare($sql);
        $res = $prep->execute([$tip ,$naziv, $cijena,$pol,$velicina1,$velicina2,$velicina3,$velicina4,$velicina5,$velicina6,$velicina7,$velicina8,$sifra,$boja,$materijal,$slika]);

        return $res;
    }

    public function delete($id)
    {
        $sql = 'DELETE FROM proizvod WHERE proizvod_id=?;';
        $prep = $this->dbc->getConnection()->prepare($sql);
        $prep->execute([$id]);
    }

public function editProduct($id, $tip ,$naziv, $cijena,$pol,$velicina1,$velicina2,$velicina3,$velicina4,$velicina5,$velicina6,$velicina7,$velicina8,$sifra,$boja,$materijal,$slika)
    {

      $sql = "UPDATE proizvod SET  tip = ?,naziv = ?, cijena = ?,  pol = ?, v1 = ?, v2 = ?, v3 = ?, v4 = ?, v5 = ?, v6 = ?, v7 = ?, v8 = ?,sifra = ?,boja =?,materijal = ?, slika = ? WHERE  proizvod_id =?  ;";

//        var_dump([ $naziv, $cijena,$velicina,$pol,$sifra,$boja,$slika,$materijal,$id]);

    $prep = $this->dbc->getConnection()->prepare($sql);
    $editProduct = $prep->execute([$tip ,$naziv, $cijena,$pol,$velicina1,$velicina2,$velicina3,$velicina4,$velicina5,$velicina6,$velicina7,$velicina8,$sifra,$boja,$materijal,$slika,$id]);


    var_dump($editProduct);
    if ($editProduct=true){
        echo 'OK';
    }

    return $editProduct;
    }

}