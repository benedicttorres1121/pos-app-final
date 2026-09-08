<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Landing page
$routes->get('/', 'Pages::index');

// About page
$routes->get('about', 'Pages::about');

// Customer Accounts page
$routes->get('customers', 'Customers::index');

// User Accounts page
$routes->get('users', 'Users::index');
