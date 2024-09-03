<?php

use Core\App;
use Core\DataBase;

$db = App::resolve(DataBase::class);

$admins = $db->query('select * from admins')->get();


view('admin/admins.view.php', [
    'admins' => $admins
]);
