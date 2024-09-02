<?php

use Core\App;
use Core\DataBase;
use Core\Session;

$db = App::resolve(DataBase::class);

$db->query('DELETE FROM cart WHERE user_id = :user_id', [
    'user_id' => Session::get('user_id')['id']
]);

redirect('/');
exit();
