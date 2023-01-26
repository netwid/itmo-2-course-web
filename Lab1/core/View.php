<?php

declare(strict_types=1);

namespace core;

class View
{
    public static function render(string $view, array $data = []): never
    {
        $view = str_replace('.', '/', $view);
        $view = 'views/' . $view . '.view.php';

        if (file_exists($view)) {
            extract($data);
            require_once $view;
            exit();
        } else {
            echo 'View not found';
            exit(1);
        }
    }
}