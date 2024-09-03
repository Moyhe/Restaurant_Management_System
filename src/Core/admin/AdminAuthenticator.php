<?php

namespace Core\admin;

use Core\App;
use Core\Authenticator;
use Core\DataBase;


class AdminAuthenticator extends Authenticator
{

    public function attempt($email, $password)
    {
        $user = App::resolve(DataBase::class)
            ->query('select * from admins where email = :email', [
                'email' => $email
            ])->find();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $this->login([
                    'email' => $email
                ]);

                $_SESSION['admin'] = [
                    'name' => $user['name']
                ];

                return true;
            }
        }

        return false;
    }


    public function login($user)
    {
        $_SESSION['admin'] = [
            'email' => $user['email']
        ];

        session_regenerate_id(true);
    }
}
