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


$routes->get('category', 'Category');
$routes->get('add_category', 'Category::add_category');
$routes->post('insert/category', 'Category::insert');