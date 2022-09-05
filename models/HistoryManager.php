<?php

declare(strict_types=1);

namespace models;

use core\Model;

class HistoryManager extends Model
{
    public static function add(int $X, int $Y, int $R)
    {
        $_SESSION['history'][] = [
            'X' => $X,
            'Y' => $Y,
            'R' => $R,
            'time' => date('H:i:s'),
            'executionTime' => round((microtime(true) - $_SERVER['REQUEST_TIME_FLOAT']) * 1000, 2),
            'isHit' => self::checkPoint($X, $Y, $R),
        ];
    }

    private static function checkPoint(int $X, int $Y, int $R): bool
    {
        if ($X <= 0 && $Y <= 0 && $X >= -$R && $Y >= -$R)
            return true;
        if ($X <= 0 && $Y >= 0 && $X >= -($R - $Y) / 2 && $Y <= ($R+2 * $X))
            return true;
        if ($X >= 0 && $Y <= 0 && $X * $X + $Y * $Y <= $R * $R / 4)
            return true;

        return false;
    }

    public static function get(): array
    {
        return $_SESSION['history'] ?? [];
    }

    public static function clear(): void
    {
        $_SESSION['history'] = [];
    }
}