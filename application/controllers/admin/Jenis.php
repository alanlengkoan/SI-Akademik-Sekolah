<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jenis extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        // untuk mengecek status login
        checking_session($this->session->userdata('username'), $this->session->userdata('role'), ['admin']);

        // untuk load model
        $this->load->model('crud');
        $this->load->model('m_jenis');
    }

    // untuk default
    public function index()
    {
        $data = [
            'halaman' => 'Jenis',
            'content' => 'admin/jenis/view',
            'css'     => 'admin/jenis/css/view',
            'js'      => 'admin/jenis/js/view'
        ];
        // untuk load view
        $this->load->view('admin/base', $data);
    }

    // untuk get data bank by datatable
    public function get_data_jenis_dt()
    {
        return $this->m_jenis->getAllDataDt();
    }

    // untuk get data by id
    public function get()
    {
        $post = $this->input->post(NULL, TRUE);

        $result = $this->crud->gda('tb_jenis', ['id_jenis' => $post['id']]);
        $response = [
            'id_jenis' => $result['id_jenis'],
            'nama'     => $result['nama'],
        ];
        // untuk response json
        $this->_response($response);
    }

    // untuk proses tambah data
    public function process_save()
    {
        $post = $this->input->post(NULL, TRUE);

        $this->db->trans_start();
        if (empty($post['inpidjenis'])) {
            $data = [
                'id_jenis' => acak_id('tb_jenis', 'id_jenis'),
                'nama'     => $post['inpnama'],
            ];

            $this->crud->i('tb_jenis', $data);
        } else {
            $data = [
                'id_jenis' => $post['inpidjenis'],
                'nama'     => $post['inpnama'],
            ];

            $this->crud->u('tb_jenis', $data, ['id_jenis' => $post['inpidjenis']]);
        }
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $response = ['title' => 'Gagal!', 'text' => 'Gagal Simpan!', 'type' => 'error', 'button' => 'Ok!'];
        } else {
            $response = ['title' => 'Berhasil!', 'text' => 'Berhasil Simpan!', 'type' => 'success', 'button' => 'Ok!'];
        }
        // untuk response json
        $this->_response($response);
    }

    // untuk proses hapus data
    public function process_del()
    {
        $post = $this->input->post(NULL, TRUE);
       
        $this->db->trans_start();
        $this->crud->d('tb_jenis', $post['id'], 'id_jenis');
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $response = ['title' => 'Gagal!', 'text' => 'Gagal Hapus!', 'type' => 'error', 'button' => 'Ok!'];
        } else {
            $response = ['title' => 'Berhasil!', 'text' => 'Berhasil Hapus!', 'type' => 'success', 'button' => 'Ok!'];
        }
        // untuk response json
        $this->_response($response);
    }
}
