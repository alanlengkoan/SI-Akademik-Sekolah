<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        // untuk mengecek status login
        checking_session($this->session->userdata('username'), $this->session->userdata('role'), ['admin']);

        // untuk load model
        $this->load->model('crud');
        $this->load->model('m_jadwal');
    }

    // untuk default
    public function index()
    {
        $data = [
            'halaman' => 'Jadwal',
            'content' => 'admin/jadwal/view',
            'css'     => 'admin/jadwal/css/view',
            'js'      => 'admin/jadwal/js/view'
        ];
        // untuk load view
        $this->load->view('admin/base', $data);
    }

    // untuk get data bank by datatable
    public function get_data_jadwal_dt()
    {
        return $this->m_jadwal->getAllDataDt();
    }

    // untuk get data by id
    public function get()
    {
        $post = $this->input->post(NULL, TRUE);

        $result = $this->crud->gda('tb_jadwal', ['id_jadwal' => $post['id']]);
        $response = [
            'id_jadwal' => $result['id_jadwal'],
            'nama'      => $result['nama'],
        ];
        // untuk response json
        $this->_response($response);
    }

    // untuk proses tambah data
    public function process_save()
    {
        $post = $this->input->post(NULL, TRUE);
        
        $this->db->trans_start();
        if (empty($post['inpidjadwal'])) {
            $data = [
                'id_jadwal' => acak_id('tb_jadwal', 'id_jadwal'),
                'nama'      => $post['inpnama'],
            ];

            $this->crud->i('tb_jadwal', $data);
        } else {
            $data = [
                'id_jadwal' => $post['inpidjadwal'],
                'nama'      => $post['inpnama'],
            ];

            $this->crud->u('tb_jadwal', $data, ['id_jadwal' => $post['inpidjadwal']]);
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
        $this->crud->d('tb_jadwal', $post['id'], 'id_jadwal');
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
