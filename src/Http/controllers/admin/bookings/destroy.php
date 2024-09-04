<?php

use Core\App;
use Core\DataBase;

$db = App::resolve(DataBase::class);

$db->query('DELETE FROM bookings WHERE id = :id', [
    'id' => $_GET['id']
]);

redirect('/admin/bookings');
exit();
