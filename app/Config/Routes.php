<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'vistas::index');
$routes->get('productos', 'vistas::productos');