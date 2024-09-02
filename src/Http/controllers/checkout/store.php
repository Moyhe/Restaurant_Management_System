<?php

use Core\App;
use Core\DataBase;
use Core\Session;

$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$town = $_POST['town'];
$country = $_POST['country'];
$total_price = Session::get('total_price');
$phoneNumber = $_POST['phoneNumber'];
$zipcode = $_POST['zipcode'];
$user_id = Session::get('user_id')['id'];

$db = App::resolve(DataBase::class);


$user =  $db->query('INSERT INTO orders(name, email, town, country, address, total_price, phoneNumber, zipcode, user_id)
 VALUES(:name, :email, :address, :town, :country, :total_price, :phoneNumber, :zipcode, :user_id)', [
    'name' => $name,
    'email' => $email,
    'address' => $address,
    'town' => $town,
    'country' => $country,
    'total_price' => $total_price,
    'phoneNumber' => $phoneNumber,
    'zipcode' => $zipcode,
    'user_id' => $user_id
]);

redirect('/pay');
exit();
