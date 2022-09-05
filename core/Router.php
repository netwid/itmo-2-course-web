<?php

namespace core;

class Router
{
    private array $routes = [];

    public function __construct() {
        # Объявление routes
        foreach ((require 'configs/routes.config.php') as $route => $parameters)
            $this->routes['#^' . preg_replace('/{([a-z]+):([^}]+)}/', '(?P<\1>\2)', $route) . '$#'] = $parameters;
    }

    public function run() {

    }

    public function match(): bool {
        # Перебор routes
        foreach ($this->routes as $route => $parameters) {
            $uri = rtrim(explode('?', $_SERVER['REQUEST_URI'])[0], '/');
            if (empty($uri))
                $uri = '/';

            # Проверка наличия входной ссылки в routes
            if (preg_match($route, $uri, $matches)) {
                # Перебор и объявление входных параметров
                foreach ($matches as $key => $match) {
                    if (is_string($key)) {
                        if (is_numeric($match))
                            $match = (int) $match;

                        $parameters[$key] = $match;
                    }
                }

                $this->parameters = $parameters;
                return true;
            }
        }

        return false;
    }
}