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
}
