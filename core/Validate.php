<?php

declare(strict_types=1);

namespace core;

class Validate
{
    public static function intInRange(mixed $value, int $min, int $max): bool
    {
        if (intval($value) != $value)
            return false;

        $value = intval($value);
        if ($value < $min || $value > $max)
            return false;

        return true;
    }
}