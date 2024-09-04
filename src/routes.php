<?php

// users

$router->get('/', 'index.php');
$router->get('/contact', 'contact.php');
$router->get('/about', 'about.php');
$router->get('/service', 'service.php');
$router->get('/menu', 'menu.php');
$router->get('/booking', 'booking/booking.php');

$router->get('/register', 'register/create.php');
$router->post('/register', 'register/store.php');

$router->get('/login', 'session/create.php');
$router->post('/session', 'session/store.php');
$router->delete('/session', 'session/destroy.php');

$router->get('/cart', 'cart/index.php');
$router->get('/items', 'cart/itemDetails.php');
$router->post('/addToCart', 'cart/store.php');
$router->delete('/delete-item', 'cart/destroy.php');

$router->get('/checkout', 'checkout/create.php');
$router->get('/pay', 'payment/paypal.php');
$router->get('/clear-cart', 'payment/destroy.php');
$router->post('/checkout', 'checkout/store.php');


$router->post('/booking', 'booking/store.php');
$router->get('/bookings', 'booking/index.php');


$router->get('/orders', 'orders/index.php');

$router->get('/review', 'reviews/review.php');
$router->post('/review', 'reviews/store.php');


// admins

$router->get('/admins', 'admin/create.php');
$router->get('/admins/all', 'admin/admins.php');
$router->get('/admins/create', 'admin/register/admin_create.php');
$router->post('/admins/create', 'admin/register/store.php');

$router->get('/admins/session', 'admin/session/create.php');
$router->post('/admins/session', 'admin/session/store.php');
$router->delete('/admins/session', 'admin/session/destroy.php');

$router->get('/admin/bookings', 'admin/bookings/create.php');
$router->delete('/admins/bookings', 'admin/bookings/destroy.php');
$router->get('/admins/bookings/edit', 'admin/bookings/edit.php');
$router->patch('/admins/bookings', 'admin/bookings/update.php');


$router->get('/admin/orders', 'admin/orders/create.php');
$router->get('/admins/orders/edit', 'admin/orders/edit.php');
$router->patch('/admins/orders', 'admin/orders/update.php');
$router->delete('/admins/orders', 'admin/orders/destroy.php');


$router->get('/admin/foods', 'admin/foods/create.php');
$router->post('/admin/foods', 'admin/foods/store.php');
$router->get('/admin/foods', 'admin/foods/destroy.php');
$router->get('/admin/create/food', 'admin/foods/food.php');
$router->delete('/admins/foods', 'admin/foods/destroy.php');
