<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();


$routes->get('/', 'vistas::index');
$routes->get('productos', 'vistas::productos');
$routes->get('register' , 'vistas::register');
$routes->get('login', 'vistas::login');
$routes->get('contacto', 'vistas::contacto');
$routes->get('servicios', 'vistas::servicios');
$routes->match(['get', 'post'], 'register', 'user::register', ['filter' => 'noauth']);
$routes->match(['get', 'post'], 'login', 'user::login', ['filter' => 'noauth']);
$routes->get('profile', 'user::profile', ['filter' => 'auth']);
$routes->get('logout', 'user::logout');
$routes->post('register' , 'user::register');


if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
