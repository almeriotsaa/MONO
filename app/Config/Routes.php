<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//Collection Product
$routes->get('/collection', 'ProductController::index');
$routes->get('/detail', 'ProductController::index');

//Admin
$routes->get('/master/login', 'AdminController::index');
$routes->get('/master/dashboard', 'AdminController::dashboard');
$routes->get('/master/orders', 'AdminController::orders');
$routes->get('/master/products', 'AdminController::products');
$routes->get('/master/customers', 'AdminController::customers');