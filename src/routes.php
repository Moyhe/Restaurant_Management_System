<?php


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
