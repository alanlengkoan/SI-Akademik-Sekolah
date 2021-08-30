<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = 'not_found';
$route['translate_uri_dashes'] = FALSE;

// route admin
$route['admin'] = 'admin/dashboard';

// route fotografer
$route['fotografer'] = 'fotografer/dashboard';

// route users
$route['rumah']               = 'users/rumah';
$route['rumah/detail/(:any)'] = 'users/rumah/detail';
$route['sewa']                = 'users/sewa';
$route['sewa/add']            = 'users/sewa/add';
$route['sewa/del']            = 'users/sewa/del';
$route['sewa/finish']         = 'users/sewa/finish';
$route['nota/(:any)']         = 'users/sewa/nota';
$route['transfer/(:any)']     = 'users/sewa/transfer';
$route['pembayaran/(:any)']   = 'users/sewa/pembayaran';
$route['riwayat']             = 'users/riwayat';

// route home
$route['tentang'] = 'home/tentang';
$route['kontak']  = 'home/kontak';