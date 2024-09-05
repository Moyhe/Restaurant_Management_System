<?php

use Core\admin\AdminAuthenticator;
use Core\App;
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
    return view('admin/register/create.view.php', [
        'errors' => $errors
    ]);
}

$user = $db->query('select email from admins where email = :email', [
    'email' => $email
])->find();

if ($user) {
    redirect('/admins');
    exit();
} else {

    $user =  $db->query('INSERT INTO admins(name, email, password, role) VALUES(:name, :email, :password, :role)', [
        'name' => $name,
        'email' => $email,
        'password' => password_hash($password, PASSWORD_BCRYPT),
        'role' => 'admin'
    ]);

    (new AdminAuthenticator)->login(['email' => $email]);

    header('location: /admins/session');
    exit();
}
