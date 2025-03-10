<?php

use CodeIgniter\Router\RouteCollection;
$routes->setAutoRoute(true);
//$route['default_controller'] = 'Theme\Home';
/**
 * @var RouteCollection $routes
 */
//$routes->get('home', 'Theme\Home::index');
$routes->get('/', 'Theme\Home::index');
$routes->get('about-us', 'Theme\Home::aboutus');
$routes->get('add-listing', 'Theme\Home::add_listing');
$routes->get('business-list', 'Theme\Home::business_list');
$routes->get('dashboard', 'Theme\Home::dash_board');
$routes->get('my-listings', 'Theme\Home::my_listings');

//$routes->get('test', 'Test::index');

$routes->get('mycontroller', 'MyController::index');


$routes->group('admin', function ($routes) {
    $routes->get('dashboard', 'Admin\Dashboard::index'); // Admin dashboard
    $routes->get('users', 'Admin\Users::index'); // Users dashboard
    $routes->get('users/list', 'Admin\Users::list'); // List all users
    $routes->get('users/view/(:num)', 'Admin\Users::view/$1'); // View a specific user by ID
    $routes->get('users/add', 'Admin\Users::add'); // Add a new user
    $routes->get('users/edit/(:num)', 'Admin\Users::edit/$1'); // Edit a user by ID
    $routes->get('users/delete/(:num)', 'Admin\Users::delete/$1'); // Delete a user by ID

    // Menu management //
    $routes->get('menu', 'Admin\MenuController::index');
    $routes->get('menu/add', 'Admin\MenuController::add');
    $routes->post('menu/save', 'Admin\MenuController::save');
    $routes->get('menu/edit/(:num)', 'Admin\MenuController::edit/$1');
    $routes->post('menu/update/(:num)', 'Admin\MenuController::update/$1');
    $routes->get('menu/delete/(:num)', 'Admin\MenuController::delete/$1');


    // Menu Reorder - Drag and Drop // 
    $routes->get('menuorder', 'Admin\AdminMenuController::index');
    $routes->post('menuorder/save-order', 'Admin\AdminMenuController::saveMenuOrder');

});