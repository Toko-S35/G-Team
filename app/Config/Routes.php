<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// if (in_groups('kp-toko')) {
//     $routes->get('/', 'Home::index');
// } elseif (in_groups('bos')) {
//     $routes->get('/', 'bos::index');
// } else {
//     $routes->get('/', 'Home::index');
// }

$routes->get('/', 'Home::index');

$routes->get('/inventaris', 'C_inventaris::inventaris');
$routes->get('/input_barang_j', 'C_inventaris::input_barang_j');
$routes->get('/input_barang_t', 'C_inventaris::input_barang_t');

$routes->post('/save_j', 'C_inventaris::save_j');
$routes->delete("/delete_j/(:num)", "C_inventaris::delete_j/$1");
$routes->get("/edit_j/(:num)", "C_inventaris::edit_j/$1");
$routes->post("/edit_j/(:num)", "C_inventaris::edit_j/$1");
$routes->put("/update_j/(:num)", "C_inventaris::update_j/$1");


$routes->post('/save_t', 'C_inventaris::save_t');
$routes->delete("/delete_t/(:num)", "C_inventaris::delete_t/$1");
$routes->get("/edit_t/(:num)", "C_inventaris::edit_t/$1");
$routes->post("/edit_t/(:num)", "C_inventaris::edit_t/$1");
$routes->put("/update_t/(:num)", "C_inventaris::update_t/$1");



$routes->get('/pengiriman_barang', 'C_ekspedisi::pengiriman_barang');
$routes->post('/simpan', 'C_ekspedisi::simpan');

$routes->get('/toko', 'C_toko::toko');
$routes->post('/savet', 'C_toko::savet');

// $routes->get('/input_toko', 'Home::input_toko');

$routes->get('/details', 'Home::details');

$routes->get('/keuangan', 'Home::keuangan');

$routes->get('/bos', 'bos::index', ['filter' => 'role:bos']);
$routes->get('/bos/index', 'bos::index', ['filter' => 'role:bos']);

$routes->get('/kp-gudang', 'kpGudang::index', ['filter' => 'role:kp-gudang']);
$routes->get('/kp-gudang/index', 'kpGudang::index', ['filter' => 'role:kp-gudang']);





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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}