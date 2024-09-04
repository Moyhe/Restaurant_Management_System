<?php

use Core\App;
use Core\DataBase;

$db = App::resolve(DataBase::class);

$admins = $db->query('select COUNT(*) as admin_count from admins')->find();
$foods = $db->query('select COUNT(*) as food_count from meals')->find();
$orders = $db->query('select COUNT(*) as order_count from orders')->find();
$bookings = $db->query('select COUNT(*) as booking_count from bookings')->find();


view('admin/dashboard.view.php', [
    'admins' => $admins,
    'foods' => $foods,
    'orders' => $orders,
    'bookings' => $bookings
]);
