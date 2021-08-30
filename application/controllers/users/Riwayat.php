<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Riwayat extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        // untuk load model
        $this->load->model('crud');
        $this->load->model('m_riwayat');
    }

    // untuk halaman default
    public function index()
    {
        $data = [
            'halaman' => 'Riwayat',
            'riwayat' => $this->m_riwayat->getAllByUsers($this->session->userdata('id_users')),
            'content' => 'home/riwayat/view',
            'css'     => '',
            'js'      => ''
        ];
        // untuk load view
        $this->load->view('home/base', $data);
    }
}
