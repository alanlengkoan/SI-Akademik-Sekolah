<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        // untuk mengecek status login
        checking_session($this->session->userdata('username'), $this->session->userdata('role'), ['admin']);

        // untuk load model
        $this->load->model('crud');
        $this->load->model('m_agama');
        $this->load->model('m_siswa');
    }

    // untuk default
    public function index()
    {
        $data = [
            'halaman' => 'Siswa',
            'agama'   => $this->m_agama->getAll(),
            'content' => 'admin/siswa/view',
            'css'     => 'admin/siswa/css/view',
            'js'      => 'admin/siswa/js/view'
        ];
        // untuk load view
        $this->load->view('admin/base', $data);
    }

    // untuk get data siswa aktif
    public function get_data_siswa_aktif_dt()
    {
        return $this->m_siswa->getAllDataDt('0');
    }

    // untuk get data siswa alumni
    public function get_data_siswa_alumni_dt()
    {
        return $this->m_siswa->getAllDataDt('1');
    }

    // untuk proses ubah status siswa
    public function upd_status()
    {
        $post = $this->input->post(NULL, TRUE);

        $data = [
            'status' => '1',
        ];

        $this->db->trans_start();
        $this->crud->u('tb_siswa', $data, ['id_siswa' => $post['id']]);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $response = ['title' => 'Gagal!', 'text' => 'Gagal Hapus!', 'type' => 'error', 'button' => 'Ok!'];
        } else {
            $response = ['title' => 'Berhasil!', 'text' => 'Berhasil Hapus!', 'type' => 'success', 'button' => 'Ok!'];
        }
        // untuk response json
        $this->_response($response);
    }

    // untuk get data by id
    public function get()
    {
        $post = $this->input->post(NULL, TRUE);

        $result = $this->crud->gda('tb_siswa', ['id_siswa' => $post['id']]);
        $response = [
            'id_siswa'  => $result['id_siswa'],
            'id_agama'  => $result['id_agama'],
            'nis'       => $result['nis'],
            'nama'      => $result['nama'],
            'kelamin'   => $result['kelamin'],
            'tmp_lahir' => $result['tmp_lahir'],
            'tgl_lahir' => $result['tgl_lahir'],
            'alamat'    => $result['alamat'],
            'ortu_wali' => $result['ortu_wali'],
        ];
        // untuk response json
        $this->_response($response);
    }

    // untuk proses tambah data
    public function process_save()
    {
        $post = $this->input->post(NULL, TRUE);

        $this->db->trans_start();
        if (empty($post['inpidsiswa'])) {
            $data = [
                'id_siswa'  => acak_id('tb_siswa', 'id_siswa'),
                'id_agama'  => $post['inpidagama'],
                'nis'       => $post['inpnis'],
                'nama'      => $post['inpnama'],
                'kelamin'   => $post['inpkelamin'],
                'tmp_lahir' => $post['inptmplahir'],
                'tgl_lahir' => $post['inptgllahir'],
                'alamat'    => $post['inpalamat'],
                'ortu_wali' => $post['inpalamat'],
                'status'    => '0',
            ];

            $this->crud->i('tb_siswa', $data);
        } else {
            $data = [
                'id_siswa'  => $post['inpidsiswa'],
                'id_agama'  => $post['inpidagama'],
                'nis'       => $post['inpnis'],
                'nama'      => $post['inpnama'],
                'kelamin'   => $post['inpkelamin'],
                'tmp_lahir' => $post['inptmplahir'],
                'tgl_lahir' => $post['inptgllahir'],
                'alamat'    => $post['inpalamat'],
                'ortu_wali' => $post['inpalamat'],
            ];

            $this->crud->u('tb_siswa', $data, ['id_siswa' => $post['inpidsiswa']]);
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
        $this->crud->d('tb_siswa', $post['id'], 'id_siswa');
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