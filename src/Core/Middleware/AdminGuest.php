<?php

namespace Core\Middleware;

use Core\Session;

class AdminGuest
{

    public function handle()
    {
        if (Session::has('admin')) {
            redirect('/admins/all');
            return;
        }
    }
}
