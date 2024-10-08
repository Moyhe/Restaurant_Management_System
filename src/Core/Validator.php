<?php

namespace Core;

class Validator
{

    public static function string(string $value, int  $min = 1, int $max = INF): bool
    {
        trim($value);

        return strlen($value) >= $min && strlen($value) <= $max;
    }

    public static function email(string $value): bool
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }

    public static function greaterThan(int $value,  int  $greaterThan): bool
    {
        return $value > $greaterThan;
    }
}
