<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        // untuk load model
        $this->load->model('crud');
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
}