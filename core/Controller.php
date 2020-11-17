<?php


namespace App\core;


use App\Core\Session\Session;

class Controller
{
    protected $dbc;
    private $session;
    private $data = [];

    public function __pre(){

    }

    final public function __construct(DatabaseConnection &$dbc)
    {
        $this->dbc = $dbc;
    }
    final public function &getSession(): Session{
        return $this->session;
    }
    final public function setSession($session){
         $this->session = $session;
    }

    final public function &getDatabaseConnection(): DatabaseConnection
    {
        return $this->dbc;
    }

    final protected function set(string $name, $value)
    {
        $result = false;
        if (preg_match('/^[a-z][a-z0-9]+([A-Z][a-z0-9]+)*$/', $name)) {
            $this->data[$name] = $value;
            $result = true;
        }
        return $result;
    }

    public function getData()
    {
        return $this->data;
    }


    final  public function redirect( string $path, int $code = 303)
    {
        ob_clean();
        header('Location:'. $path, true, $code);
        exit;
    }

}