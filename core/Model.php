<?php


namespace App\core;


class Model
{
    private $dbc;

    public function __construct(DatabaseConnection &$dbc)
    {
        $this->dbc = $dbc;
    }

    final private function getTableName(){
        $fullName = static::class;
        $matches = [];
        preg_match('|^.*\\\(([A-Z][a-z]+)+)Model$|',$fullName,$matches);
        $className = $matches[1] ?? '';
        $underscoredClassName = preg_replace('|[A-Z]|','_$0',$className);
        $lowercaseUnderscoredClassName = strtolower($underscoredClassName);
        return substr($lowercaseUnderscoredClassName,1);


    }

    final protected function getConnection(){
        return $this->dbc->getConnection();
    }

public  function getById($id){
        $tableName = $this->getTableName();
    $sql  = 'SELECT * FROM'.$tableName.'  WHERE '.$tableName.'_id = ?;';
    $prep = $this->dbc->getConnection()->prepare($sql);
    $res  = $prep->execute([$id]);
    $products = null;
    if ($res){
        $products = $prep->fetch(\PDO::FETCH_OBJ);
    }
    return $products;
}
    public function getAll():array {
        $tableName = $this->getTableName();

        $sql = 'SELECT * FROM' .$tableName;
        $prep = $this->dbc->getConnection()->prepare($sql);
        $res = $prep->execute();
        $products = [];
        if ($res){
            $products = $prep->fetchAll(\PDO::FETCH_OBJ);
        }
        return $products;

    }





}