<?php

use Core\App;
use Core\DataBase;

$db = App::resolve(DataBase::class);

$db->query('DELETE FROM meals WHERE id = :id', [
    'id' => $_GET['id']
]);

redirect('/admin/create/food');
exit();
