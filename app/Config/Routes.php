<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// Utama
$routes->get('/', 'Home::index');
$routes->get('/pendaftaran', 'Home::pendaftaran');
$routes->post('/pendaftaran/proses', 'Home::proses_pendaftaran');
$routes->get('/pendaftar', 'Home::pendaftar');
$routes->get('/hasil', 'Home::hasil');
$routes->get('/sekolah', 'Home::sekolah');

// Admin
$routes->get('/admin/home', 'Admin::index');
$routes->get('/admin/siswa', 'Admin::siswa');
$routes->post('admin/siswa/verif', 'Admin::siswa_verif');
$routes->post('admin/siswa/update', 'Admin::siswa_update');
$routes->post('admin/siswa/delete', 'Admin::siswa_delete');

// Login
$routes->get('/login', 'Login::index');
$routes->get('/logout', 'Login::logout');
$routes->get('/register', 'Login::register');
$routes->post('/registrasi', 'Login::registrasi');
$routes->get('/login/siswa', 'Login::login_siswa');
$routes->post('/login/siswa/proses', 'Login::proses_login_siswa');
$routes->get('/login/admin', 'Login::login_admin');
$routes->post('/login/admin/proses', 'Login::proses_login_admin');


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
