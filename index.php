<?php

ini_set('session.gc_maxlifetime', 6048000);
ini_set('session.use_only_cookies', 0);

ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_WARNING);

session_start();

use core\Router;

spl_autoload_register(function($class) {
    $path = str_replace('\\', '/', $class . '.php');
    if (file_exists($path))
        require $path;
});

(new Router())->run();