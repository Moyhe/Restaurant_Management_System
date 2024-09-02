<?php

use Core\App;
use Core\DataBase;

$db = App::resolve(DataBase::class);

$db->query('DELETE FROM cart WHERE id = :id', [
    'id' => $_GET['id']
]);

redirect('/cart');
exit();
