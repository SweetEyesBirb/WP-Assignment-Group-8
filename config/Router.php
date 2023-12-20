<?php
/*
class Router
{
    private $routes = [];

    public function addRoute($method, $uri, $controller)
    {
        $this->routes[] = [
            'method' => $method,
            'uri' => $uri,
            'controller' => $controller,
        ];
    }

    public function dispatch()
    {
        $uri = $_SERVER['REQUEST_URI'];
        $method = $_SERVER['REQUEST_METHOD'];

        foreach ($this->routes as $route) {
            if ($route['method'] === $method && $this->matchUri($route['uri'], $uri)) {
                $this->executeController($route['controller']);
                return;
            }
        }

        $this->notFound();
    }

    private function matchUri($pattern, $uri)
    {
        return preg_match("#^{$pattern}$#", $uri);
    }

    private function executeController($controller)
    {
        list($controllerName, $action) = explode('@', $controller);

        require_once("app/controllers/{$controllerName}.php");

        $controllerInstance = new $controllerName();
        $controllerInstance->$action();
    }

    private function notFound()
    {
        http_response_code(404);
        echo '404 Not Found';
    }
}

*/