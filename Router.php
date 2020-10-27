<?php

class Router
{
    public $routes = [
        'GET' => [],
        'POST' => []

    ];

    public static function load($file)
    {
        $router = new static;

        require $file;
        var_dump($router);

        return $router;
    }



    public function get($uri, $controller){
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller){
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct($uri, $requestMethod)
    {

        if (array_key_exists($uri, $this->routes[$requestMethod])) {
            return $this->executeAction(...explode("@", $this->routes[$requestMethod][$uri]));
        }
        throw new Exception('No route defined for this URI.');
    }

    protected function executeAction($controller, $action){
        $controller = new $controller;

        if(!method_exists($controller, $action)){
            throw new Exception("controoler have no action");
        }

        return $controller->$action();

    }
}