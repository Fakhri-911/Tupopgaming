<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// test koneksi database
$routes->get('/testdb', 'TestDB::index');

// halaman dasboard
$routes->get('/dashboard', 'Dashboard::index');

// halaman utama
$routes->get('/', 'Home::index');

// secondary pages
$routes->get('/event', 'Event::index');
$routes->get('/artikel', 'Artikel::index');

// route login
$routes->get('/login', 'Auth::login');
$routes->post('/login/auth', 'Auth::auth');

// route logout
$routes->get('/auth/logout', 'Auth::logout');

// route register
$routes->get('/register', 'Auth::register');
$routes->post('/register/authregister', 'Auth::authregister');

?>