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

        $userRole = $db->query('SELECT role FROM admins WHERE id = :id', [
            'id' => $user_id
        ])->find();

        if ($userRole['role'] !== 'admin') {

            redirect('/');
            return;
        }

        redirect('/admins/all');
    }
}
