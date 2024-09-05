<?php

namespace Core\Middleware;

use Core\Session;

class Authenticated
{
    public function handle(): void
    {
        if (!Session::has('user') ?? false) {
            header('location: /');
            exit();
        }
    }
}
