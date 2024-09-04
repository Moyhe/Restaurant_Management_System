<?php


use Core\App;
use Core\DataBase;

$db = App::resolve(DataBase::class);

$orders = $db->query('select * from orders')->get();

view('admin/orders/create.view.php', [
    'orders' => $orders
]);
