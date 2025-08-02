<?php

use App\Controllers\Home;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [Home::class, 'index']);
$routes->get('/about', [Home::class, 'about']);
$routes->get('/contact', [Home::class, 'contact']);
$routes->get('/projects', [Home::class, 'projects']);
$routes->get('/store', [Home::class, 'store']);
