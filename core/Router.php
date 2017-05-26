<?php

class Router
{
    protected $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($routesFile)
    {
        // instantiate the class inside the static method
        // using $router = new self; or $router = new static;
        $router = new static;
        require $routesFile;

        return $router;
    }

    public function define(array $routes)
    {
        $this->routes = $routes;
    }

    public function get(array $routes)
    {
        foreach($routes as $route => $controller) {
            $this->routes['GET'][$route] = $controller;
        }

    }

    public function post(array $routes)
    {
        foreach($routes as $route => $controller) {
            $this->routes['POST'][$route] = $controller;
        }
    }

    public function navigate($uri, $method)
    {
        if (array_key_exists($uri, $this->routes[$method])) {
            return $this->routes[$method][$uri];
        }

        return 'controllers/notfound.php';
    }
}