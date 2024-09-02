<?php

use Core\App;
use Core\DataBase;
use Core\Session;

$review = $_POST['review'];
$user_id = Session::get('user_id')['id'];

$db = App::resolve(DataBase::class);

$db->query('INSERT INTO reviews(review, user_id) VALUES(:review, :user_id)', [
    'review' => $review,
    'user_id' => $user_id,

]);

redirect('/');
exit();
