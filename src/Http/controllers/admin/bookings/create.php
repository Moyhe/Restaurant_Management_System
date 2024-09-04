<?php


use Core\App;
use Core\DataBase;

$db = App::resolve(DataBase::class);

$bookings = $db->query('select * from bookings')->get();

view('admin/bookings/create.view.php', [
    'bookings' => $bookings
]);
