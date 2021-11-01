<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = 'not_found';
$route['translate_uri_dashes'] = FALSE;

// route admin
$route['admin'] = 'admin/dashboard';
$route['users'] = 'home';

// route home
$route['galeri']  = 'home/galeri';
$route['tentang'] = 'home/tentang';
$route['kontak']  = 'home/kontak';

// route berita
$route['berita']               = 'home/berita';
$route['berita/(:any)']        = 'home/berita_kategori';
$route['berita/detail/(:any)'] = 'home/berita_detail';

// route siswa
$route['siswa/aktif']  = 'home/s_aktif';
$route['siswa/alumni'] = 'home/s_alumni';

// route kuisioner
$route['kuisioner/(:any)']       = 'home/kuisioner';
$route['kuisioner_chart/(:any)'] = 'home/kuisioner_chart';
$route['kuisioner_simpan']       = 'home/kuisioner_simpan';

// route profil
$route['profil/(:any)']            = 'home/profil';
$route['guru']                     = 'home/guru';
$route['fasilitas']                = 'home/fasilitas';
$route['organisasi']               = 'home/organisasi';
$route['organisasi/detail/(:any)'] = 'home/organisasi_detail';

// route users
$route['akun']            = 'home/akun';
$route['simpan_akun']     = 'home/simpan_akun';
$route['simpan_keamanan'] = 'home/simpan_keamanan';

// route laporan
$route['laporan'] = 'home/laporan';