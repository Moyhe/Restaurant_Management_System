<?php

use Core\App;
use Core\Authenticator;
use Core\DataBase;
use Core\Validator;

$db = App::resolve(DataBase::class);

$errors = [];

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

if (!Validator::string($name, 4, 8)) {
    $errors['name'] = 'Please provide a name of at least 4 characters. and max of 8 chars';
}

if (!Validator::email($email)) {
    $errors['email'] = 'please provide a valid email..';
}

if (!Validator::string($password, 7, 255)) {
    $errors['password'] = 'please provide a password of at least 7 characters';
}

if (! empty($errors)) {
    return view('registration/create.view.php', [
        'errors' => $errors
    ]);
}

$user = $db->query('select email from users where email = :email', [
    'email' => $email
])->find();

if ($user) {
    redirect('/');
    exit();
} else {

    $user =  $db->query('INSERT INTO users(name, email, password, role) VALUES(:name, :email, :password, :role)', [
        'name' => $name,
        'email' => $email,
        'password' => password_hash($password, PASSWORD_BCRYPT),
        'role' => 'user'
    ]);

    (new Authenticator)->login(['email' => $email]);

    header('location: /login');
    exit();
}
