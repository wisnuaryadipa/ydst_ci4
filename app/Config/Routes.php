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
$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->group('', function($routes) {

    $routes->group('master', function($routes){
        $routes->get('/', 'SuratPesananBosController::index');
    
        $routes->group('users', function($routes){
            $routes->get('/', 'master\UserController::index');
            $routes->get('create', 'master\UserController::create'); 
            $routes->post('create', 'master\UserController::post');
            $routes->get('edit/(:any)', 'master\UserController::edit/$1');
            $routes->put('edit/(:alphanum)', 'master\UserController::edit/$id');
            $routes->delete('detele/(:alphanum)', 'master\UserController:delete/$id');
            $routes->get('(:alphanum)', 'master\UserController::detail/$id');
        });
    
        $routes->group('roles', function($routes){
            $routes->get('/', 'master\RoleController::index');
            $routes->get('create', 'master\RoleController::create'); 
            $routes->post('create', 'master\RoleController::post');
            $routes->get('edit/(:alphanum)', 'master\RoleController::edit/$id');
            $routes->put('edit/(:alphanum)', 'master\RoleController::edit/$id');
            $routes->get('(:alphanum)', 'master\RoleController::detail/$id');
            $routes->delete('detele/(:alphanum)', 'master\RoleController:delete/$id');
        });
    
        $routes->group('buku', function($routes){
            $routes->get('/', 'master\BukuController::index');
            $routes->get('create', 'master\BukuController::create'); 
            $routes->post('create', 'master\BukuController::post');
            $routes->get('(:alphanum)', 'master\BukuController::detail/$id');
            $routes->get('edit/(:alphanum)', 'master\BukuController::edit/$id');
            $routes->put('edit/(:alphanum)', 'master\BukuController::edit/$id');
            $routes->delete('detele/(:alphanum)', 'master\BukuController:delete/$id');
        });
    
        $routes->group('customer', function($routes){
            $routes->get('/', 'master\CustomerController::index');
            $routes->get('create', 'master\CustomerController::create'); 
            $routes->post('create', 'master\CustomerController::post');
            $routes->get('(:alphanum)', 'master\CustomerController::detail/$id');
            $routes->get('edit/(:alphanum)', 'master\CustomerController::edit/$id');
            $routes->put('edit/(:alphanum)', 'master\CustomerController::edit/$id');
            $routes->delete('detele/(:alphanum)', 'master\CustomerController:delete/$id');
        });
    
        $routes->group('area', function($routes){
            $routes->get('/', 'master\AreaController::index');
            $routes->get('create', 'master\AreaController::create'); 
            $routes->post('create', 'master\AreaController::post');
            $routes->get('(:alphanum)', 'master\AreaController::detail/$id');
            $routes->get('edit/(:alphanum)', 'master\AreaController::edit/$id');
            $routes->put('edit/(:alphanum)', 'master\AreaController::edit/$id');
            $routes->delete('detele/(:alphanum)', 'master\AreaController:delete/$id');
        });
    
        $routes->group('cabang', function($routes){
            $routes->get('/', 'master\CabangController::index');
            $routes->get('create', 'master\CabangController::create'); 
            $routes->post('create', 'master\CabangController::post');
            $routes->get('(:alphanum)', 'master\CabangController::detail/$id');
            $routes->get('edit/(:alphanum)', 'master\CabangController::edit/$id');
            $routes->put('edit/(:alphanum)', 'master\CabangController::edit/$id');
            $routes->delete('detele/(:alphanum)', 'master\CabangController:delete/$id');
        });
        
    });
    
    $routes->group("operasional", function($routes){

    
        $routes->group("sp", function($routes){
    
            $routes->get('/', 'SuratPesananController::index');
        
            $routes->group('siswa', function($routes){
                $routes->get('/', 'sp\SuratPesananSiswaController::index');
                $routes->get('create', 'sp\SuratPesananSiswaController::create'); 
                $routes->post('create', 'sp\SuratPesananSiswaController::post');
                $routes->get('(:alphanum)', 'sp\SuratPesananSiswaController::detail/$id');
                $routes->get('edit/(:alphanum)', 'sp\SuratPesananSiswaController::edit/$id');
                $routes->put('edit/(:alphanum)', 'sp\SuratPesananSiswaController::edit/$id');
                $routes->delete('detele/(:alphanum)', 'sp\SuratPesananSiswaController:delete/$id');
            });
        
            $routes->group('bos', function($routes){
                $routes->get('/', 'SuratPesananBosController::index');
                $routes->get('create', 'master\UserController::create'); 
                $routes->post('create', 'SuratPemesanan::post');
                $routes->get('(:alphanum)', 'SuratPemesanan::detail/$id');
                $routes->get('edit/(:alphanum)', 'SuratPesanan::edit/$id');
                $routes->put('edit/(:alphanum)', 'SuratPemesanan::edit/$id');
                $routes->delete('detele/(:alphanum)', 'SuratPemesanan:delete/$id');
            });
        });
        
        
        $routes->group('faktur', function($routes){
        
            $routes->get('/', 'SuratPesananController::index');
        
            $routes->group('siswa', function($routes){
                $routes->get('/', 'sp\SuratPesananSiswaController::index');
                $routes->get('create', 'sp\SuratPesananSiswaController::create'); 
                $routes->post('create', 'sp\SuratPesananSiswaController::post');
                $routes->get('(:alphanum)', 'sp\SuratPesananSiswaController::detail/$id');
                $routes->get('edit/(:alphanum)', 'sp\SuratPesananSiswaController::edit/$id');
                $routes->put('edit/(:alphanum)', 'sp\SuratPesananSiswaController::edit/$id');
                $routes->delete('detele/(:alphanum)', 'sp\SuratPesananSiswaController:delete/$id');
            });
        
            $routes->group('bos', function($routes){
                $routes->get('/', 'SuratPesananBosController::index');
                $routes->get('create', 'master\UserController::create'); 
                $routes->post('create', 'SuratPemesanan::post');
                $routes->get('(:alphanum)', 'SuratPemesanan::detail/$id');
                $routes->get('edit/(:alphanum)', 'SuratPesanan::edit/$id');
                $routes->put('edit/(:alphanum)', 'SuratPemesanan::edit/$id');
                $routes->delete('detele/(:alphanum)', 'SuratPemesanan:delete/$id');
            });
        
        });
        
        
        $routes->group('promo', function($routes){
        
            $routes->get('/', 'SuratPesananController::index');
            $routes->get('create', 'master\UserController::create'); 
            $routes->post('create', 'SuratPemesanan::post');
            $routes->get('(:alphanum)', 'SuratPemesanan::detail/$id');
            $routes->get('edit/(:alphanum)', 'SuratPesanan::edit/$id');
            $routes->put('edit/(:alphanum)', 'SuratPemesanan::edit/$id');
            $routes->delete('detele/(:alphanum)', 'SuratPemesanan:delete/$id');
        });

    });
    
    
    $routes->group('gudang', function($routes){
    
        $routes->get('/', 'SuratPesananController::index');
        $routes->get('history', 'SuratPesananBosController::create'); 
        $routes->get('stock', 'SuratPesananBosController::create'); 
        $routes->post('create', 'SuratPemesanan::post');
        $routes->get('(:alphanum)', 'SuratPemesanan::detail/$id');
        $routes->get('edit/(:alphanum)', 'SuratPesanan::edit/$id');
        $routes->put('edit/(:alphanum)', 'SuratPemesanan::edit/$id');
        $routes->delete('detele/(:alphanum)', 'SuratPemesanan:delete/$id');
    
    });
});


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
