<?php

namespace Core\Middleware;

use Core\Session;

class Admin
{

    public function handle()
    {
        if (!Session::has('admin')) {
            redirect('/admins/session');
            return;
        }
    }
}
