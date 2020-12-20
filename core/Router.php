<?php

class Router{

    public $routes = [
        'GET' =>[],
        'POST'=>[]
    ];

    public static function load($file)
    {
        $router = new static;
        require $file;
        return $router;
    }

    public function define($routes)
    {
        $this->routes = $routes;
    }

    public function get($uri,$controller){

        return $this->routes['GET'][$uri] = $controller;

    }

    public function post($uri,$controller){

        return $this->routes['POST'][$uri] = $controller;

    }

    public function direct($uri,$requestType)
    {
        // example.com/.../
        if(array_key_exists($uri,$this->routes[$requestType]))
        {
            // return $this->routes[$requestType][$uri];
            return $this->callingToRedirect(
                ...explode('@',$this->routes[$requestType][$uri])
            );
        }

        throw new Exception("this uri is not defined");
    }

    public function callingToRedirect($controller,$page)
    {
        if(! method_exists($controller,$page))
        {
            throw new Exception(
                "This {$controller} is not response in {$page}"
            );
        }
        return (new $controller)->$page();
    }

}