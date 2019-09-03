<?php


namespace App\core;


class Controller
{
    private $dbc;
    private $data = [];

    final public function __construct(DatabaseConnection &$dbc)
    {
        $this->dbc = $dbc;
    }

    final public function getDatabaseConnection(): DatabaseConnection
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
}