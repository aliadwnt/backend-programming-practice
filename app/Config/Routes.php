<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('insertproduct', 'ProductController::insertProductORM');
$routes->get('readproduct', 'ProductController::readProducts');
$routes->post('insertproduct', 'ProductController::insertProductORM');
