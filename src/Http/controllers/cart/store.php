<?php

use Core\App;
use Core\DataBase;
use Core\Session;

$db = App::resolve(DataBase::class);

$items = $db->query('select * from meals where id = :id', [
    'id' => $_GET['id']
])->findOrFail();


$db->query('INSERT INTO cart(item_id, name, image, user_id, price)
 VALUES(:item_id, :name, :image, :user_id, :price)', [
    'item_id' => $items['id'],
    'name' => $items['name'],
    'image' => $items['image'],
    'user_id' => Session::get('user_id')['id'],
    'price' => $items['price'],

]);


header('location: /cart');
exit();
