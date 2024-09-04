<?php

use Core\App;
use Core\DataBase;

$name = $_POST['name'];
$price = $_POST['price'];
$image =  $_FILES['image']['name'];
$description = $_POST['description'];
$meal_id = $_POST['meal'];

$dir = BASE_PATH . "Http/controllers/admin/images/" . basename($image);

$db = App::resolve(DataBase::class);


if (move_uploaded_file($_FILES['image']['tmp_name'], $dir)) {
    $user =  $db->query('INSERT INTO meals(name, price, image, description, meail_id)
 VALUES(:name, :price, :image, :description, :meail_id)', [
        'name' => $name,
        'price' => $price,
        'image' => $image,
        'description' => $description,
        'meail_id' => $meal_id,
    ]);

    redirect('/admin/create/food');
    exit();
}
