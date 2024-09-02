<?php

use Core\App;
use Core\DataBase;
use Core\Session;

$db = App::resolve(DataBase::class);

$cart = $db->query('SELECT * FROM cart  where user_id = :user_id', [
    'user_id' => Session::get('user_id')['id']
])->get();

$cartPrice = $db->query('SELECT SUM(price) as total_price from cart WHERE user_id = :user_id', [
    'user_id' => Session::get('user_id')['id']
])->find();

view('cart/cart.view.php', [
    'cart' => $cart,
    'heading' => 'Cart',
    'cartPrice' => $cartPrice,
]);
