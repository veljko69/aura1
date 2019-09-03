<?php


namespace App\core;


final class Route
{
    private $requestMethod;
    private $pattern;
    private $controller;
    private $method;

    private function __construct(string $requestMethod, string $pattern, string $controller, string $method)
    {
        $this->requestMethod = $requestMethod;
        $this->pattern = $pattern;
        $this->controller = $controller;
        $this->method = $method;

    }

    public static function get(string $pattern, string $controller, string $method):Route
    {
        return new Route('GET', $pattern, $controller, $method);

    }

    public static function post(string $pattern, string $controller, string $method)
    {
        return new Route('POST',$pattern, $controller, $method);

    }

    public static function any(string $pattern, string $controller, string $method)
    {
        return new Route('GET|POST',$pattern,$controller,$method);
    }

    public function matches(string $method, string $url)
    {
        if (!preg_match('/^' . $this->requestMethod . '$/', $method)){
            return false;
        } ;


        return boolval(preg_match($this->pattern, $url));
    }

    public function getControllerName()
    {
        return $this->controller;
    }

    public function getMethodName()
    {
        return $this->method;
    }

    public function extractArguments( $url ):array
    {
        $matches = [];
        $arguments=[];
        preg_match($this->pattern,$url,$matches);
        if(isset($matches[1])){
         $arguments=[$matches[1]];
        }
        return $arguments;

    }

}