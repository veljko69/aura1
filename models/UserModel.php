<?php
namespace App\models;
 use App\Core\DatabaseConnection;

class UserModel
{

    private $dbc;

    public function __construct(DatabaseConnection &$dbc)
    {
        $this->dbc = $dbc;
    }

    public  function getById($userId){
        $sql  = 'SELECT * FROM users WHERE  user_id = ?;';
        $prep = $this->dbc->getConnection()->prepare($sql);
        $res  = $prep->execute([$userId]);
        $user = NULL;
        if ($res){
            $user = $prep->fetch(\PDO::FETCH_OBJ);
        }
            return $user;
    }

    public function getAll():array {
        $sql = 'SELECT * FROM users';
        $prep = $this->dbc->getConnection()->prepare($sql);
        $res = $prep->execute();
        $users = [];
        if ($res){
            $users = $prep->fetchAll(\PDO::FETCH_OBJ);
        }
        return $users;

    }
    public  function getByUsername($username){
        $sql  = 'SELECT * FROM users WHERE  username = ?;';
        $prep = $this->dbc->getConnection()->prepare($sql);
        $res  = $prep->execute([$username]);
        $user = NULL;
        if ($res){
            $user = $prep->fetch(\PDO::FETCH_OBJ);
        }
        return $user;
    }
    public  function getByEmail($email){
        $sql  = 'SELECT * FROM users WHERE  email = ?;';
        $prep = $this->dbc->getConnection()->prepare($sql);
        $res  = $prep->execute([$email]);
        $user = NULL;
        if ($res){
            $user = $prep->fetch(\PDO::FETCH_OBJ);
        }
        return $user;
    }


        public  function add($username, $email,$passwordHash,$forename,$surname){
            $sql = 'INSERT INTO users(username, email,password_hash,forename,surname)
                    VALUES(?,?,?,?,?)';
            $prep = $this->dbc->getConnection()->prepare($sql);
            $res  = $prep->execute([$username, $email,$passwordHash,$forename,$surname]);

            return $res;
        }

    public  function addKupac($ime,$prezime, $telefon,$email, $ulica, $grad, $postanskibroj){
        $sql = 'INSERT INTO kupac(ime,prezime, telefon,email, ulica, grad, postanski_broj)
                    VALUES(?,?,?,?,?,?,?)';
        $prep = $this->dbc->getConnection()->prepare($sql);
        $res  = $prep->execute([$ime,$prezime, $telefon,$email, $ulica, $grad, $postanskibroj]);

        return $res;
    }

}