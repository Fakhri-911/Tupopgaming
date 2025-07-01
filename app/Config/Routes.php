<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 // halaman utama
$routes->get('/', 'Home::index');

// test koneksi database
$routes->get('/testdb', 'TestDB::index');

// halaman dasboard
$routes->group('admin', ['namespace' => 'App\Controllers\Admin'], function($routes) {
    $routes->get('dashboard', 'Dashboard::index');
    $routes->get('banners', 'Dashboard::banners');
    $routes->get('games', 'Dashboard::games');
    $routes->get('articles', 'Dashboard::articles');
    $routes->get('tournaments', 'Dashboard::tournaments');
    $routes->get('transactions', 'Dashboard::transactions');
    $routes->get('history', 'Dashboard::history');
});

// secondary pages
$routes->get('/event', 'Event::index');
$routes->get('/artikel', 'Artikel::index');

// route login
$routes->get('/login', 'Auth::login');
$routes->post('/login/auth', 'Auth::auth');

// route logout
$routes->get('/auth/logout', 'Auth::logout');

// route register
$routes->get('/register', 'Auth::register');        // Tampilkan form
$routes->post('/register/save', 'Auth::saveRegister'); // Proses simpan
?>