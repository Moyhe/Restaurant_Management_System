<?php

use Core\App;
use Core\DataBase;

$db = App::resolve(DataBase::class);

$db->query('DELETE FROM orders WHERE id = :id', [
    'id' => $_GET['id']
]);

redirect('/admin/orders');
exit();
