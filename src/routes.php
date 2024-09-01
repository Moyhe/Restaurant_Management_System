<?php


$router->get('/', 'index.php');
$router->get('/contact', 'contact.php');
$router->get('/about', 'about.php');
$router->get('/service', 'service.php');
$router->get('/menu', 'menu.php');
$router->get('/team', 'team.php');
$router->get('/testimonial', 'testimonial.php');
$router->get('/booking', 'booking/booking.php');

$router->get('/register', 'register/create.php');
$router->post('/register', 'register/store.php');

$router->get('/login', 'session/create.php');
$router->post('/login', 'session/store.php');

$router->get('/cart', 'cart/index.php');
