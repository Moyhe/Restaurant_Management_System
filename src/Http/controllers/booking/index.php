<?php

use Core\App;
use Core\DataBase;
use Core\Session;

$db = App::resolve(DataBase::class);

$bookings = $db->query('select * from bookings where user_id = :user_id', [
    'user_id' => Session::get('user_id')['id']
])->get();

view("booking/index.view.php", [
    'heading' => 'Booking',
    'bookings' => $bookings
]);
