<?php

use Core\App;
use Core\DataBase;

$db = App::resolve(DataBase::class);

$db->query('update bookings set status = :status where id = :id', [
    'id' => $_POST['id'],
    'status' => $_POST['status']
]);

redirect('/admin/bookings');
exit();
