<?php

use Core\admin\AdminAuthenticator;
use Http\Forms\LoginForm;

$form = LoginForm::validate($attributes = [
    'email' => $_POST['email'],
    'password' => $_POST['password']
]);

$signedIn = (new AdminAuthenticator)->attempt(
    $attributes['email'],
    $attributes['password']
);

if (!$signedIn) {
    $form->error(
        'email',
        'No matching account found for that email address and password.'
    )->throw();
}

redirect('/admins');
