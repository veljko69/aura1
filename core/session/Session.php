<?php


namespace App\core\session;


final class Session
{
    private $sessionStorage;
    private $sessionData;
    private $sessionId;
    private $sessionLife;

    public function __construct(SessionStorage  $sessionStorage, int $sessionLife = 1800)
    {
        $this->sessionLife =$sessionLife;
        $this->sessionStorage = $sessionStorage;
        $this->sessionData = (object)[];
        $this->sessionId = filter_input(INPUT_COOKIE, 'APPSESSION', FILTER_SANITIZE_STRING);
        $this->sessionId = preg_replace('|[^A-Za-z0-9]|', '', $this->sessionId);
        if (strlen($this->sessionId) !== 32) {
            $this->sessionId = $this->generateSessionId();
            setcookie('APPSESSION', $this->sessionId, time() + $this->sessionLife);
        }
    }

    private function generateSessionId()
    {
        $supported = "QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiopasdfghjklzxcvbnm0123456789";
        $id = "";
        for ($i = 0; $i < 32; $i++) {
            $id .= $supported[rand(0, strlen($supported)-1)];
        }
        return $id;
    }

    public function put(string $key, $value)
    {
        $this->sessionData->$key = $value;
    }

    public function get(string $key, $defaultValue)
    {
        return $this->sessionData->$key  ?? $defaultValue;
    }

    public function clear()
    {
        $this->sessionData = (object)[];
    }

    public function remove(string $key){
        if ($this->exists($key)){
            unset($this->sessionData->$key);
        }

    }

    public function exists(string $key)
    {
        return isset($this->sessionData->$key );
    }

    public function has(string $key)
    {
        if (!$this->exists($key)) {
            return false;
        }
        return boolval($this->sessionData->$key );

    }

    public function save()
    {
        $jsonData = json_encode($this->sessionData);
        $this->sessionStorage->save($this->sessionId, $jsonData);
        setcookie('APPSESSION', $this->sessionId, time() + $this->sessionLife);


    }

    public function reload()
    {
        $jsonData = $this->sessionStorage->load($this->sessionId);
        $restroreData = json_decode($jsonData);
        if (!$restroreData) {
            $this->sessionData =(object) [];
            return;
        }
        $this->sessionData = $restroreData;
    }

    public function regenerate()
    {
        $this->reload();
        $this->sessionStorage->delete($this->sessionId);
        $this->sessionId = $this->generateSessionId();
        $this->save();
        setcookie('APPSESSION', $this->sessionId, time() + $this->sessionLife);

    }

}