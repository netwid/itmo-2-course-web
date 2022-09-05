<?php

declare(strict_types=1);

namespace core;

class Validate
{
    public function intInRange(mixed $value, int $min, int $max): bool
    {
        if (!is_integer($value))
            return false;

        if ($value < $min || $value > $max)
            return false;

        return true;
    }
}