<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('insertproduct', 'ProductController::insertPage');
$routes->get('readproduct', 'ProductController::readProducts');
$routes->post('insertproduct', 'ProductController::insertProductORM');
$routes->get('edit-product/(:any)', 'ProductController::getProduct/$1');
$routes->get('edit-product/(:any)', 'ProductController::updateProduct/$1');
$routes->post('product-update/(:any)', 'ProductController::updateProduct/$1');
$routes->get('delete-product/(:any)', 'ProductController::deleteProduct/$1');