<?php

declare(strict_types=1);

namespace core;

class Router
{
    private array $routes = [];
    protected array $parameters = [];

    public function __construct()
    {
        foreach ((require 'configs/routes.config.php') as $route => $parameters)
            $this->routes['#^' . preg_replace('/{([a-z]+):([^}]+)}/', '(?P<\1>\2)', $route) . '$#'] = $parameters;
    }

    public function run()
    {
        if (str_starts_with($_SERVER['REQUEST_URI'], '/public/')) {
            $path = ltrim($_SERVER['REQUEST_URI'], '/');
            if (!file_exists($path))
                Response::error(404);

            readfile($path);
            exit();
        }

        if (!$this->match())
            return Response::error(404);

        if (!empty($this->parameters['action'])) {
            $controller = '\\' . $this->parameters['action'][0];
            if (class_exists($controller)) {
                $action = $this->parameters['action'][1];
                if (method_exists($controller, $action)) {
                    (new $controller($this->parameters))->$action();
                } else Response::error(404);
            } else Response::error(404);
        } else Response::error(404);
    }

    public function match(): bool
    {
        $uri = str_replace('/~s335084', '', $_SERVER['REQUEST_URI']);
        $uri = rtrim(explode('?', $uri)[0], '/');
        if (empty($uri))
            $uri = '/';

        foreach ($this->routes as $route => $parameters) {
            if (!preg_match($route, $uri, $matches))
                continue;

            $this->parameters = $parameters;
            return true;
        }

        return false;
    }
}