<?php

// users

$router->get('/', 'index.php');
$router->get('/contact', 'contact.php');
$router->get('/about', 'about.php');
$router->get('/service', 'service.php');
$router->get('/menu', 'menu.php');
$router->get('/booking', 'booking/booking.php');

$router->get('/register', 'register/create.php')->only('guest');
$router->post('/register', 'register/store.php')->only('guest');

$router->get('/login', 'session/create.php')->only('guest');
$router->post('/session', 'session/store.php')->only('guest');
$router->delete('/session', 'session/destroy.php')->only('auth');

$router->get('/cart', 'cart/index.php');
$router->get('/items', 'cart/itemDetails.php');
$router->post('/addToCart', 'cart/store.php')->only('auth');
$router->delete('/delete-item', 'cart/destroy.php')->only('auth');

$router->get('/checkout', 'checkout/create.php')->only('auth');
$router->get('/pay', 'payment/paypal.php')->only('auth');;
$router->get('/clear-cart', 'payment/destroy.php')->only('auth');
$router->post('/checkout', 'checkout/store.php')->only('auth');


$router->post('/booking', 'booking/store.php')->only('auth');
$router->get('/bookings', 'booking/index.php')->only('auth');

$router->get('/orders', 'orders/index.php')->only('auth');

$router->get('/review', 'reviews/review.php')->only('auth');
$router->post('/review', 'reviews/store.php')->only('auth');


// admins

$router->get('/admins', 'admin/create.php')->only('role');
$router->get('/admins/all', 'admin/admins.php')->only('admin');
$router->get('/admins/create', 'admin/register/admin_create.php')->only('admin');
$router->post('/admins/create', 'admin/register/store.php')->only('admin');

$router->get('/admins/session', 'admin/session/create.php')->only('admin_guest');
$router->post('/admins/session', 'admin/session/store.php')->only('admin_guest');
$router->delete('/admins/session', 'admin/session/destroy.php')->only('admin_guest');

$router->get('/admin/bookings', 'admin/bookings/create.php')->only('admin');
$router->delete('/admins/bookings', 'admin/bookings/destroy.php')->only('admin');
$router->get('/admins/bookings/edit', 'admin/bookings/edit.php')->only('admin');
$router->patch('/admins/bookings', 'admin/bookings/update.php')->only('admin');


$router->get('/admin/orders', 'admin/orders/create.php')->only('admin');
$router->get('/admins/orders/edit', 'admin/orders/edit.php')->only('admin');
$router->patch('/admins/orders', 'admin/orders/update.php')->only('admin');
$router->delete('/admins/orders', 'admin/orders/destroy.php')->only('admin');


$router->get('/admin/foods', 'admin/foods/create.php')->only('admin');
$router->post('/admin/foods', 'admin/foods/store.php')->only('admin');
$router->get('/admin/foods', 'admin/foods/destroy.php')->only('admin');
$router->get('/admin/create/food', 'admin/foods/food.php')->only('admin');
$router->delete('/admins/foods', 'admin/foods/destroy.php')->only('admin');
