<?php

namespace Core\Middleware;

use Exception;


class Middleware
{
    public const MAP = [
        'guest' => Guest::class,
        'auth' => Authenticated::class,
        'admin' => Admin::class,
        'role' => AdminProtection::class,
        'admin_guest' => AdminGuest::class
    ];

    /**
     * @throws Exception
     */
    public static function resolve($key): void
    {
        if (!$key) return;
        $middleware = static::MAP[$key] ?? false;
        if (!$middleware) {
            throw new Exception("No matching middleware found for key '{$key}'.");
        }

        (new $middleware)->handle();
    }
}
