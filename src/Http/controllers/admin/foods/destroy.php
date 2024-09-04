<?php

use Core\App;
use Core\DataBase;

$db = App::resolve(DataBase::class);

unlink(BASE_PATH . "Http/controllers/admin/images/" . $_POST['image']);

$db->query('DELETE FROM meals WHERE id = :id', [
    'id' => $_GET['id']
]);

redirect('/admin/create/food');
exit();
