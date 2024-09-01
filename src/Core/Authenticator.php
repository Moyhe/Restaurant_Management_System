<?php

namespace Core;

class Authenticator
{

    public function login($user)
    {
        $_SESSION['user'] = [
            'email' => $user['email']
        ];

        session_regenerate_id(true);
    }
}
