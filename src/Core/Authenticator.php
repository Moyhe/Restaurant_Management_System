<?php

namespace Core;

class Authenticator
{

    public function attempt($email, $password)
    {
        $user = App::resolve(DataBase::class)
            ->query('select * from users where email = :email', [
                'email' => $email
            ])->find();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $this->login([
                    'email' => $email
                ]);

                $_SESSION['user_id'] = [
                    'id' => $user['id']
                ];

                return true;
            }
        }

        return false;
    }


    public function login($user)
    {
        $_SESSION['user'] = [
            'email' => $user['email']
        ];

        session_regenerate_id(true);
    }

    public function logout()
    {
        Session::destroy();
    }
}
