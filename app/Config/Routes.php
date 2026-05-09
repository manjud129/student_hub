<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/program', 'Program::index');
$routes->get('/tambah', 'Home::tambah');
$routes->post('/simpan', 'Home::simpan');
$routes->get('/register', 'Auth::register');
$routes->post('/save-register', 'Auth::saveRegister');

$routes->get('/login', 'Auth::login');
$routes->post('/process-login', 'Auth::processLogin');

$routes->get('/logout', 'Auth::logout');
$routes->get('/admin', 'Admin::index');

$routes->get('/admin/users', 'Admin::users');
$routes->get('/admin/approve-user/(:num)', 'Admin::approveUser/$1');

$routes->get('/admin/programs', 'Admin::programs');
$routes->get('/admin/approve-program/(:num)', 'Admin::approveProgram/$1');