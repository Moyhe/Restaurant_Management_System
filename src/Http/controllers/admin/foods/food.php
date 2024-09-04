<?php


use Core\App;
use Core\DataBase;

$db = App::resolve(DataBase::class);

$foods = $db->query('select * from meals')->get();

view('admin/foods/food.view.php', [
    'foods' => $foods
]);
