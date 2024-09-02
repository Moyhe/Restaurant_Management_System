<?php

use Core\App;
use Core\DataBase;
use Core\Session;

$name = $_POST['name'];
$email = $_POST['email'];
$people = $_POST['people'];
$status = 'pending';
$date = $_POST['date'];
$special_request = $_POST['special_request'];
$user_id = Session::get('user_id')['id'];

$db = App::resolve(DataBase::class);

if ($date >= date('m/d/Y h:i:sa')) {
    $db->query('INSERT INTO bookings(name, email, people, status, date, special_request, user_id)
    VALUES(:name, :email, :people, :status, :date, :special_request, :user_id)', [
        'name' => $name,
        'email' => $email,
        'people' => $people,
        'status' => $status,
        'date' => $date,
        'special_request' => $special_request,
        'user_id' => $user_id

    ]);

    redirect('/');
    exit();
}


return;
