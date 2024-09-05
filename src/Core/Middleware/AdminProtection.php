<?php

namespace Core\Middleware;

use Core\App;
use Core\DataBase;
use Core\Session;

class AdminProtection
{

    public function handle(): void
    {
        $db = App::resolve(DataBase::class);

        $user_id =  Session::get('admin_name')['id'] ?? null;

        if (!$user_id) {

            redirect('/');
            return;
        }
    }
}
