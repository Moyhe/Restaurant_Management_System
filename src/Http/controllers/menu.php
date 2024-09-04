<?php

use Core\App;
use Core\DataBase;

$db = App::resolve(DataBase::class);

$meals_1 = $db->query('select * from meals where meail_id = :meail_id', [
    'meail_id' => 1
])->get();

$meals_2 = $db->query('select * from meals where meail_id = :meail_id', [
    'meail_id' => 2
])->get();


$meals_3 = $db->query('select * from meals where meail_id = :meail_id', [
    'meail_id' => 3
])->get();

view("menu.view.php", [
    'heading' => 'menu',
    'meals_1' => $meals_1,
    'meals_2' => $meals_2,
    'meals_3' => $meals_3
]);
