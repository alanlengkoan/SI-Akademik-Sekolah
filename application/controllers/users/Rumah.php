<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rumah extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        // untuk load model
        $this->load->model('m_rumah');
        $this->load->model('m_fasilitas');
    }

    // untuk halaman default
    public function index()
    {
        $data = [
            'halaman' => 'Rumah',
            'rumah'   => $this->m_rumah->getAll(),
            'content' => 'home/rumah/view',
            'css'     => '',
            'js'      => 'home/rumah/js/view'
        ];
        // untuk load view
        $this->load->view('home/base', $data);
    }

    // untuk halaman detail
    public function detail()
    {
        $id_rumah = base64url_decode($this->uri->segment('3'));

        $data = [
            'halaman'   => 'Detail Rumah',
            'rumah'     => $this->m_rumah->getDetail($id_rumah),
            'fasilitas' => $this->m_fasilitas->getFasilitasDetail($id_rumah),
            'content'   => 'home/rumah/detail',
            'css'       => '',
            'js'        => 'home/rumah/js/detail'
        ];
        // untuk load view
        $this->load->view('home/base', $data);
    }
}
