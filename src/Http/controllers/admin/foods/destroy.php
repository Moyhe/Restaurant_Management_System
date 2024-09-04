<?php

use Core\App;
use Core\DataBase;

$db = App::resolve(DataBase::class);


$food =  $db->query('SELECT image FROM meals WHERE id = :id', [
    'id' => $_GET['id']
])->find();

unlink(BASE_PATH . "Http/controllers/admin/images/" . $food['image']);

$db->query('DELETE FROM meals WHERE id = :id', [
    'id' => $_GET['id']
]);

redirect('/admin/create/food');
exit();
