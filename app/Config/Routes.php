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

// PROGRAM CRUD
$routes->get('/program/create', 'Program::create');
$routes->post('/program/store', 'Program::store');
$routes->get('/program/edit/(:num)', 'Program::edit/$1');
$routes->post('/program/update/(:num)', 'Program::update/$1');
$routes->get('/program/delete/(:num)', 'Program::delete/$1');
$routes->get('/program/show/(:num)', 'Program::show/$1');

// ✅ BOOKMARK ROUTES - SEMUA WAJIB DITAHAN
$routes->get('/saved', 'Bookmark::index');           // Halaman daftar bookmark
$routes->get('/bookmark/(:num)', 'Bookmark::save/$1'); // Simpan bookmark
$routes->get('/save-program/(:num)', 'Program::saveProgram/$1'); // Alternatif dari Program controller
$routes->get('/unsave-program/(:num)', 'Program::unsaveProgram/$1');

$routes->get('/account', 'User::account');
$routes->get('/admin/users-content', 'Admin::users');
$routes->get('/admin/programs-content', 'Admin::programs');