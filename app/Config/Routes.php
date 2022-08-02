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

$routes->get('login', 'Auth\LoginController::loginView');
$routes->post('login', 'Auth\LoginController::loginAction');
$routes->group('', ['filter' => 'auth'] ,function($routes) {
    
    $routes->get('/', 'master\UserController::index');

    service('auth')->routes($routes, ['except' => ['login']]);

    $routes->group('master', function($routes){
        $routes->get('/', 'SuratPesananBosController::index');
    
        $routes->group('users', function($routes){
            $routes->get('/', 'master\UserController::index');
            $routes->get('create', 'master\UserController::create'); 
            $routes->post('create', 'master\UserController::actionCreate');
            $routes->get('edit/(:any)', 'master\UserController::edit/$1');
            $routes->put('edit/(:alphanum)', 'master\UserController::edit/$1');
            $routes->delete('detele/(:alphanum)', 'master\UserController:delete/$1');
            $routes->get('(:alphanum)', 'master\UserController::detail/$1');
        });
    
        $routes->group('roles', function($routes){
            $routes->get('/', 'master\RoleController::index');
            $routes->get('create', 'master\RoleController::create'); 
            $routes->post('create', 'master\RoleController::actionCreate');
            $routes->get('edit/(:alphanum)', 'master\RoleController::edit/$1');
            $routes->put('edit/(:alphanum)', 'master\RoleController::actionEdit/$1');
            $routes->get('(:alphanum)', 'master\RoleController::detail/$1');
            $routes->delete('detele/(:alphanum)', 'master\RoleController:delete/$1');
        });
    
        $routes->group('buku', function($routes){
            $routes->get('/', 'master\BukuController::index');
            $routes->get('create', 'master\BukuController::create'); 
            $routes->post('create', 'master\BukuController::actionCreate');
            $routes->get('(:alphanum)', 'master\BukuController::detail/$1');
            $routes->get('edit/(:alphanum)', 'master\BukuController::edit/$1');
            $routes->put('edit/(:alphanum)', 'master\BukuController::actionEdit/$1');
            $routes->delete('detele/(:alphanum)', 'master\BukuController:delete/$1');
        });
    
        $routes->group('customer', function($routes){
            $routes->get('/', 'master\CustomerController::index');
            $routes->get('create', 'master\CustomerController::create'); 
            $routes->post('create', 'master\CustomerController::actionCreate');
            $routes->get('(:alphanum)', 'master\CustomerController::detail/$1');
            $routes->get('edit/(:alphanum)', 'master\CustomerController::edit/$1');
            $routes->put('edit/(:alphanum)', 'master\CustomerController::actopmEdit/$1');
            $routes->delete('detele/(:alphanum)', 'master\CustomerController:delete/$1');
        });
    
        $routes->group('area', function($routes){
            $routes->get('/', 'master\AreaController::index');
            $routes->get('create', 'master\AreaController::create'); 
            $routes->post('create', 'master\AreaController::actionCreate');
            $routes->get('(:alphanum)', 'master\AreaController::detail/$1');
            $routes->get('edit/(:alphanum)', 'master\AreaController::edit/$1');
            $routes->put('edit/(:alphanum)', 'master\AreaController::actionEdit/$1');
            $routes->delete('detele/(:alphanum)', 'master\AreaController:delete/$1');
        });
    
        $routes->group('cabang', function($routes){
            $routes->get('/', 'master\CabangController::index');
            $routes->get('create', 'master\CabangController::create'); 
            $routes->post('create', 'master\CabangController::actionCreate');
            $routes->get('(:alphanum)', 'master\CabangController::detail/$1');
            $routes->get('edit/(:alphanum)', 'master\CabangController::edit/$1');
            $routes->put('edit/(:alphanum)', 'master\CabangController::actionEdit/$1');
            $routes->delete('detele/(:alphanum)', 'master\CabangController:delete/$1');
        });
    
        $routes->group('karyawan', function($routes){
            $routes->get('/', 'master\EmployeeController::index');
            $routes->get('create', 'master\EmployeeController::create'); 
            $routes->post('create', 'master\EmployeeController::actionCreate');
            $routes->get('(:alphanum)', 'master\EmployeeController::detail/$1');
            $routes->get('edit/(:alphanum)', 'master\EmployeeController::edit/$1');
            $routes->put('edit/(:alphanum)', 'master\EmployeeController::actionEdit/$1');
            $routes->delete('detele/(:alphanum)', 'master\EmployeeController:delete/$1');
        });
        
    });
    
    $routes->group("operasional", function($routes){

    
        $routes->group("sp", function($routes){
    
            $routes->get('/', 'SuratPesananController::index');
        
            $routes->group('siswa', function($routes){
                $routes->get('/', 'sp\SuratPesananSiswaController::index');
                $routes->get('create', 'sp\SuratPesananSiswaController::create'); 
                $routes->post('create', 'sp\SuratPesananSiswaController::post');
                $routes->get('(:alphanum)', 'sp\SuratPesananSiswaController::detail/$1');
                $routes->get('edit/(:alphanum)', 'sp\SuratPesananSiswaController::edit/$1');
                $routes->put('edit/(:alphanum)', 'sp\SuratPesananSiswaController::edit/$1');
                $routes->delete('detele/(:alphanum)', 'sp\SuratPesananSiswaController:delete/$1');
            });
        
            $routes->group('bos', function($routes){
                $routes->get('/', 'SuratPesananBosController::index');
                $routes->get('create', 'master\UserController::create'); 
                $routes->post('create', 'SuratPemesanan::post');
                $routes->get('(:alphanum)', 'SuratPemesanan::detail/$1');
                $routes->get('edit/(:alphanum)', 'SuratPesanan::edit/$1');
                $routes->put('edit/(:alphanum)', 'SuratPemesanan::edit/$1');
                $routes->delete('detele/(:alphanum)', 'SuratPemesanan:delete/$1');
            });
        });
        
        
        $routes->group('faktur', function($routes){
        
            $routes->get('/', 'SuratPesananController::index');
        
            $routes->group('siswa', function($routes){
                $routes->get('/', 'sp\SuratPesananSiswaController::index');
                $routes->get('create', 'sp\SuratPesananSiswaController::create'); 
                $routes->post('create', 'sp\SuratPesananSiswaController::post');
                $routes->get('(:alphanum)', 'sp\SuratPesananSiswaController::detail/$1');
                $routes->get('edit/(:alphanum)', 'sp\SuratPesananSiswaController::edit/$1');
                $routes->put('edit/(:alphanum)', 'sp\SuratPesananSiswaController::edit/$1');
                $routes->delete('detele/(:alphanum)', 'sp\SuratPesananSiswaController:delete/$1');
            });
        
            $routes->group('bos', function($routes){
                $routes->get('/', 'SuratPesananBosController::index');
                $routes->get('create', 'master\UserController::create'); 
                $routes->post('create', 'SuratPemesanan::post');
                $routes->get('(:alphanum)', 'SuratPemesanan::detail/$1');
                $routes->get('edit/(:alphanum)', 'SuratPesanan::edit/$1');
                $routes->put('edit/(:alphanum)', 'SuratPemesanan::edit/$1');
                $routes->delete('detele/(:alphanum)', 'SuratPemesanan:delete/$1');
            });
        
        });
        
        
        $routes->group('promo', function($routes){
        
            $routes->get('/', 'SuratPesananController::index');
            $routes->get('create', 'master\UserController::create'); 
            $routes->post('create', 'SuratPemesanan::post');
            $routes->get('(:alphanum)', 'SuratPemesanan::detail/$1');
            $routes->get('edit/(:alphanum)', 'SuratPesanan::edit/$1');
            $routes->put('edit/(:alphanum)', 'SuratPemesanan::edit/$1');
            $routes->delete('detele/(:alphanum)', 'SuratPemesanan:delete/$1');
        });

    });
    
    
    $routes->group('gudang', function($routes){
    
        $routes->get('/', 'SuratPesananController::index');
        $routes->get('history', 'SuratPesananBosController::create'); 
        $routes->get('stock', 'SuratPesananBosController::create'); 
        $routes->post('create', 'SuratPemesanan::post');
        $routes->get('(:alphanum)', 'SuratPemesanan::detail/$1');
        $routes->get('edit/(:alphanum)', 'SuratPesanan::edit/$1');
        $routes->put('edit/(:alphanum)', 'SuratPemesanan::edit/$1');
        $routes->delete('detele/(:alphanum)', 'SuratPemesanan:delete/$1');
    
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
