<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/chart', 'Home::chart');
$routes->get('/checkout', 'Home::checkout');

$routes->post('/submit', 'Home::submit');

$routes->get('images/(:segment)','Home::image/$1');

$routes->group('admin',['filter' => ['group:admin']], function($routes){
    $routes->get('', 'AdminController::index');
    $routes->get('dashboard', 'AdminController::index');
    
    // Daftar HP routes
    $routes->get('daftar-hp', 'AdminController::daftarHp');
    $routes->get('daftar-hp/tambah', 'AdminController::daftarHpTambah');
    $routes->post('daftar-hp/tambah', 'AdminController::createHp');
    $routes->get('daftar-hp/edit/(:num)', 'AdminController::daftarHpEdit/$1');
    $routes->post('daftar-hp/update/(:num)', 'AdminController::daftarHpUpdate/$1'); // Ditambahkan route untuk update
    $routes->get('admin/daftar-hp/edit/(:num)', 'Admin\DaftarHp::edit/$1');
    $routes->post('admin/daftar-hp/change', 'Admin\DaftarHp::change');
    $routes->post('daftar-hp/edit', 'AdminController::daftarHpEdit');
    $routes->get('daftar-hp/hapus', 'AdminController::daftarHpHapus');
    
    $routes->get('daftar-hp/hapus/(:num)', 'AdminController::hapusHp/$1');
    $routes->get('admin/daftar-hp/hapus/(:num)', 'AdminController::hapusHp/$1');
    $routes->post('admin/daftar-hp/hapus/(:num)', 'AdminController::hapusHp/$1');
    
    // Transaksi routes
    $routes->get('transaksi', 'AdminController::transaksi');
    $routes->get('transaksi/ubah-status', 'AdminController::transaksiUbahStatus');
    $routes->get('transaksi/hapus', 'AdminController::transaksiHapus');
    
    // Pelanggan routes
    $routes->get('pelanggan', 'AdminController::pelanggan');
    $routes->get('pelanggan/hapus', 'AdminController::pelangganHapus');
});

service('auth')->routes($routes);