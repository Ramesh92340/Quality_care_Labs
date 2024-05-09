<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('about', 'Home::about');
$routes->get('lab', 'Home::lab');
$routes->get('services', 'Home::services');
$routes->get('service1', 'Home::service1');
$routes->get('service2', 'Home::service2');
$routes->get('service3', 'Home::service3');
$routes->get('service4', 'Home::service4');
$routes->get('service5', 'Home::service5');
$routes->get('service6', 'Home::service6');
$routes->get('packages', 'Home::packages');
$routes->get('contact', 'Home::contact');
$routes->get('cart', 'Home::cart');
$routes->get('checkout', 'Home::checkout');




//admin routes


$routes->get('login' , 'Admin');
$routes->post('login_dashboard','Admin::login');
$routes->get('admin/dashboard', 'Admin::dashboard');
$routes->get('package', 'Admin::packages');
$routes->get('add_package','Admin::add_package');
$routes->post('insert/package', 'Admin::insert');
$routes->get('edit/package/(:num)','Admin::edit/$1');
$routes->post('update/package' ,'Admin::update_data');
$routes->get('delete/package/(:num)', 'Admin::delete/$1');

//category routes
$routes->get('category', 'Category');
$routes->get('add_category', 'Category::add_category');
$routes->post('insert/category', 'Category::insert');
$routes->get('edit/category/(:num)','Category::edit/$1');
$routes->post('update/category','Category::update');
$routes->get('delete/category/(:num)' , 'Category::delete/$1');


//test Routes

$routes->get('test/(:num)', 'Tests::index/$1');
$routes->get('add-test/(:num)', 'Tests::add_test/$1');
$routes->post('insert/test', 'Tests::insert');
$routes->get('edit/test/(:num)' , 'Tests::edit/$1');
$routes->post('update/test', 'Tests::update');
$routes->get('delete/test/(:num)/(:num)','Tests::delete/$1/$2');


// Depaartment Routes 

$routes->get('department', 'Department');
$routes->get('add_department', 'Department::add');
$routes->post('insert/department','Department::insert');
$routes->get('edit/department/(:num)','Department::edit/$1');
$routes->post('update/department','Department::update');
$routes->get('delete/department/(:num)','Department::delete/$1');


//Services Routes

$routes->get('servicess','Service');
$routes->get('add_service','Service::add');
$routes->post('insert/service','Service::insert');
$routes->get('edit/service/(:num)','Service::edit/$1');
$routes->post('update/service','Service::update');
$routes->get('delete/service/(:num)','Service::delete/$1');


// Service-test Routes

$routes->get('test-service/(:num)', 'Servicetest::index/$1');
