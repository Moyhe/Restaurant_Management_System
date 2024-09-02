<?php

use Core\App;
use Core\DataBase;
use Core\Session;

$db = App::resolve(DataBase::class);

$items = $db->query('select * from meals where id = :id', [
    'id' => $_GET['id']
])->findOrFail();

if (Session::has('user_id')) {
    $cart = $db->query('SELECT id FROM cart WHERE item_id = :item_id AND user_id = :user_id', [
        'item_id' => $_GET['id'],
        'user_id' => Session::get('user_id')['id']
    ])->find();
}

view('cart/itemDetails.view.php', [
    'items' => $items,
    'cart' => $cart ?? [],
    'heading' => $items['name']
]);
