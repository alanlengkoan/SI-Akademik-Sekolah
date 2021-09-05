<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        // untuk load model
        $this->load->model('crud');
        $this->load->model('m_siswa');
        $this->load->model('m_kategori');
        $this->load->model('m_informasi');
    }

    public function index()
    {
        $data = [
            'halaman' => 'Home',
            'content' => 'home/home/view',
            'css'     => '',
            'js'      => ''
        ];
        // untuk load view
        $this->load->view('home/base', $data);
    }

    public function tentang()
    {
        $data = [
            'halaman' => 'Tentang',
            'content' => 'home/tentang/view',
            'css'     => '',
            'js'      => ''
        ];
        // untuk load view
        $this->load->view('home/base', $data);
    }

    public function kontak()
    {
        $data = [
            'halaman' => 'Kontak',
            'content' => 'home/kontak/view',
            'css'     => '',
            'js'      => 'home/kontak/js/view'
        ];
        // untuk load view
        $this->load->view('home/base', $data);
    }

    // untuk halaman galeri
    public function galeri()
    {
        $data = [
            'halaman' => 'Galeri',
            'galeri'  => $this->m_informasi->getWhereGaleri(),
            'content' => 'home/galeri/view',
            'css'     => '',
            'js'      => ''
        ];
        // untuk load view
        $this->load->view('home/base', $data);
    }

    // untuk halaman berita
    public function berita()
    {
        $data = [
            'halaman'  => 'Berita',
            'kategori' => $this->m_kategori->getAll(),
            'berita'   => $this->m_informasi->getWhereStatus('1'),
            'content'  => 'home/berita/view',
            'css'      => '',
            'js'       => ''
        ];
        // untuk load view
        $this->load->view('home/base', $data);
    }

    // untuk halaman kategori berita
    public function berita_kategori()
    {
        $id_kategori = $this->uri->segment('2');

        $data = [
            'halaman'  => 'Rincian',
            'kategori' => $this->m_kategori->getAll(),
            'berita'   => $this->m_informasi->getWhereStatusAndKategori('1', $id_kategori),
            'content'  => 'home/berita/view',
            'css'      => '',
            'js'       => ''
        ];
        // untuk load view
        $this->load->view('home/base', $data);
    }

    // untuk halaman detail berita
    public function berita_detail()
    {
        $id_informasi = $this->uri->segment('3');

        $data = [
            'halaman'  => 'Rincian',
            'berita'   => $this->m_informasi->getWhereDetail($id_informasi),
            'content'  => 'home/berita/detail',
            'css'      => '',
            'js'       => ''
        ];
        // untuk load view
        $this->load->view('home/base', $data);
    }

    // untuk halaman siswa aktif
    public function s_aktif()
    {
        $data = [
            'halaman' => 'Siswa Aktif',
            'data'    => $this->m_siswa->getAllSiswaStatus('0'),
            'content' => 'home/s_aktif/view',
            'css'     => 'home/s_aktif/css/view',
            'js'      => 'home/s_aktif/js/view'
        ];
        // untuk load view
        $this->load->view('home/base', $data);
    }

    // untuk halaman siswa alumni
    public function s_alumni()
    {
        $data = [
            'halaman' => 'Siswa Alumni',
            'data'    => $this->m_siswa->getAllSiswaStatus('1'),
            'content' => 'home/s_alumni/view',
            'css'     => 'home/s_alumni/css/view',
            'js'      => 'home/s_alumni/js/view'
        ];
        // untuk load view
        $this->load->view('home/base', $data);
    }
}
