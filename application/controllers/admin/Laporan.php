<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        // untuk mengecek status login
        checking_session($this->session->userdata('username'), $this->session->userdata('role'), ['admin']);

        // untuk load model
        $this->load->model('crud');
        $this->load->model('m_guru');
        $this->load->model('m_siswa');
        $this->load->model('m_keuangan');
    }

    // untuk default
    public function index()
    {
    }

    // untuk halaman laporan keuangan
    public function l_keuangan()
    {
        $data = [
            'halaman' => 'Laporan Keuangan',
            'content' => 'admin/l_keuangan/view',
            'css'     => '',
            'js'      => 'admin/l_keuangan/js/view'
        ];
        // untuk load view
        $this->load->view('admin/base', $data);
    }

    // untuk lihat laporan keuangan
    public function l_keuangan_show()
    {
        $post = $this->input->post(NULL, TRUE);

        $data = [
            'halaman'  => "Daftar Keuangan",
            'keuangan' => $this->m_keuangan->getReportKeuangan($post['tgl_awal'], $post['tgl_akhir']),
        ];

        // untuk load view
        $this->load->view('admin/l_keuangan/table', $data);
    }

    // untuk export laporan keuangan
    public function l_keuangan_export()
    {
        $post = $this->input->get(NULL, TRUE);

        $data = [
            'halaman'  => "Daftar Keuangan",
            'keuangan' => $this->m_keuangan->getReportKeuangan(base64url_decode($post['tgl_awal']), base64url_decode($post['tgl_akhir'])),
        ];

        // untuk load view
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->cetakPdf('laporan_pembelian', 'admin/l_keuangan/print', $data);
    }

    // untuk halaman laporan siswa
    public function l_siswa()
    {
        $data = [
            'halaman' => 'Laporan Siswa',
            'aktif'   => $this->m_siswa->getAllSiswaStatus('0'),
            'alumni'  => $this->m_siswa->getAllSiswaStatus('1'),
            'content' => 'admin/l_siswa/view',
            'css'     => 'admin/l_siswa/css/view',
            'js'      => 'admin/l_siswa/js/view'
        ];
        // untuk load view
        $this->load->view('admin/base', $data);
    }

    // untuk halaman laporan guru
    public function l_guru()
    {
        $data = [
            'halaman' => 'Laporan Guru',
            'data'    => $this->m_guru->getAll(),
            'content' => 'admin/l_guru/view',
            'css'     => 'admin/l_guru/css/view',
            'js'      => 'admin/l_guru/js/view'
        ];
        // untuk load view
        $this->load->view('admin/base', $data);
    }
}
