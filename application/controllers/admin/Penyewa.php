<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penyewa extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        // untuk mengecek status login
        checking_session($this->session->userdata('username'), $this->session->userdata('role'), ['admin']);

        // untuk load model
        $this->load->model('crud');
        $this->load->model('m_users');
        $this->load->model('m_penyewa');
        $this->load->model('m_transfer');
    }

    // untuk default
    public function index()
    {
        $data = [
            'halaman' => 'Penyewa',
            'content' => 'admin/penyewa/view',
            'css'     => 'admin/penyewa/css/view',
            'js'      => 'admin/penyewa/js/view'
        ];
        // untuk load view
        $this->load->view('admin/base', $data);
    }

    // untuk ambil data penyewa
    public function get_data_penyewa_dt()
    {
        return $this->m_penyewa->getAllDataDt();
    }

    // untuk detail pemesanan
    public function detail()
    {
        $id_penyewa = base64url_decode($this->uri->segment('4'));

        // untuk data penyewa
        $get_penyewa = $this->m_penyewa->getPenyewaDetail($id_penyewa);
        $row_penyewa = $get_penyewa->row();

        // untuk data users
        $get_users = $this->m_users->getRoleUsers('users', $row_penyewa->id_users);

        // mengecek metode pembayaran
        if ($row_penyewa->metode_pembayaran == 't') {
            // untuk data transfer
            $get_pembayaran = $this->m_transfer->getBankDetail($id_penyewa);
        }

        $data = [
            'halaman'         => 'Nota',
            'data_user'       => $get_users,
            'data_penyewa'    => $get_penyewa->row(),
            'data_pembayaran' => $get_pembayaran->row(),
            'content'         => 'admin/penyewa/detail',
            'css'             => '',
            'js'              => 'admin/penyewa/js/detail'
        ];
        // untuk load view
        $this->load->view('admin/base', $data);
    }

    // untuk pemabayaran transfer
    public function pembayaran()
    {
        $post = $this->input->post(NULL, TRUE);

        $data = [
            'jumlah_transfer' => remove_separator($post['inpjumlahtransfer']),
        ];
        $this->db->trans_start();
        $this->crud->u('tb_transfer', $data, ['id_penyewa' => $post['inpidpenyewa']]);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $response = ['title' => 'Gagal!', 'text' => 'Gagal Simpan!', 'type' => 'error', 'button' => 'Ok!'];
        } else {
            $response = ['title' => 'Berhasil!', 'text' => 'Berhasil Simpan!', 'type' => 'success', 'button' => 'Ok!'];
        }
        // untuk response json
        $this->_response($response);
    }
}
