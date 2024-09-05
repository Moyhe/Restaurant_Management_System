<?php

namespace Core\Middleware;

use Core\Session;

class Guest
{
    public function handle(): void
    {
        if (Session::has('user') ?? false) {
            header('location: /');
            exit();
        }
    }
}
