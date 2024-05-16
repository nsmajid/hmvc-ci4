<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// $routes->get('admin', '\App\Modules\Admin\Controllers\Home::index');
// $routes->get('admin/users', '\App\Modules\Admin\Controllers\Users::index');
$routes->group('admin', ['namespace' => '\App\Modules\Admin\Controllers'], function ($routes) {
    $routes->get('/', 'Home::index');
    $routes->get('users', 'Users::index');
});

$routes->group('sales', ['namespace' => '\App\Modules\Sales\Controllers'], function ($routes) {
    $routes->get('/', 'Home::index');
    // $routes->get('users', 'Users::index');
});
