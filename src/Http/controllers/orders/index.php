<?php

use Core\App;
use Core\DataBase;
use Core\Session;

$db = App::resolve(DataBase::class);

$orders = $db->query('select * from orders where user_id = :user_id', [
    'user_id' => Session::get('user_id')['id']
])->get();

view("orders/orders.view.php", [
    'heading' => 'Orders',
    'orders' => $orders
]);
