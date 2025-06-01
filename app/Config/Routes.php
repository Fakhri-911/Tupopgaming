<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/event', 'Event::index');
$routes->get('/artikel', 'Artikel::index');
