<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kuisioner extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        // untuk mengecek status login
        checking_session($this->session->userdata('username'), $this->session->userdata('role'), ['admin']);

        // untuk load model
        $this->load->model('crud');
        $this->load->model('m_kuisioner');
    }

    // untuk default
    public function index()
    {
        $data = [
            'halaman' => 'Kuisioner',
            'content' => 'admin/kuisioner/view',
            'css'     => 'admin/kuisioner/css/view',
            'js'      => 'admin/kuisioner/js/view'
        ];
        // untuk load view
        $this->load->view('admin/base', $data);
    }

    // untuk get data bank by datatable
    public function get_data_jadwal_dt()
    {
        return $this->m_kuisioner->getAllDataDt();
    }

    // untuk get data by id
    public function get()
    {
        $post = $this->input->post(NULL, TRUE);

        $result = $this->crud->gda('tb_kuisioner', ['id_kuisioner' => $post['id']]);
        $response = [
            'id_kuisioner' => $result['id_kuisioner'],
            'nama'         => $result['nama'],
        ];
        // untuk response json
        $this->_response($response);
    }

    // untuk proses tambah data
    public function process_save()
    {
        $post = $this->input->post(NULL, TRUE);

        $this->db->trans_start();
        if (empty($post['inpidkuisioner'])) {
            $data = [
                'id_kuisioner' => acak_id('tb_kuisioner', 'id_kuisioner'),
                'nama'         => $post['inpnama'],
            ];

            $this->crud->i('tb_kuisioner', $data);
        } else {
            $data = [
                'id_kuisioner' => $post['inpidkuisioner'],
                'nama'         => $post['inpnama'],
            ];

            $this->crud->u('tb_kuisioner', $data, ['id_kuisioner' => $post['inpidkuisioner']]);
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
        $this->crud->d('tb_kuisioner', $post['id'], 'id_kuisioner');
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
