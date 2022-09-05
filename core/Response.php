<?php

declare(strict_types=1);

namespace core;

class Response
{
    public static function redirect(string $location): never
    {
        header('Location: ' . $location);
        exit();
    }

    public static function result(array $result): never
    {
        echo json_encode($result);
        exit();
    }

    public static function success(array $data = []): never
    {
        self::result(array_merge(['success' => true], $data));
    }

    public static function failure(array $data = []): never
    {
        self::result(array_merge(['success' => false], $data));
    }

    public static function error(int $code, string $message = 'An error has occurred.'): never
    {
        http_response_code($code);
        View::render('error', [
            'message' => $message
        ]);
    }
}