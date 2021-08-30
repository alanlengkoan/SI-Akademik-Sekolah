<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Latar_belakang extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        // untuk mengecek status login
        checking_session($this->session->userdata('username'), $this->session->userdata('role'), ['admin']);

        // untuk load model
        $this->load->model('crud');
        $this->load->model('m_latar_belakang');
    }

    // untuk default
    public function index()
    {
        $data = [
            'halaman' => 'Latar Belakang',
            'content' => 'admin/latar_belakang/view',
            'css'     => 'admin/latar_belakang/css/view',
            'js'      => 'admin/latar_belakang/js/view'
        ];
        // untuk load view
        $this->load->view('admin/base', $data);
    }

    // untuk get data bank by datatable
    public function get_data_latar_belakang_dt()
    {
        return $this->m_latar_belakang->getAllDataDt();
    }

    // untuk get data by id
    public function get()
    {
        $post = $this->input->post(NULL, TRUE);

        $result = $this->crud->gda('tb_latar_belakang', ['id_latar_belakang' => $post['id']]);
        $response = [
            'id_latar_belakang' => $result['id_latar_belakang'],
            'gambar'            => $result['gambar'],
        ];
        // untuk response json
        $this->_response($response);
    }

    // untuk proses tambah data
    public function process_save()
    {
        $post = $this->input->post(NULL, TRUE);

        $result = $this->crud->gda('tb_latar_belakang', ['id_latar_belakang' => $post['inpidlatarbelakang']]);

        $config['upload_path']   = './' . upload_path('gambar');
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['encrypt_name']  = TRUE;
        $config['overwrite']     = TRUE;

        $this->load->library('upload', $config);

        $this->db->trans_start();
        if (empty($post['inpidlatarbelakang'])) {
            if (!$this->upload->do_upload('inpgambar')) {
                // apa bila gagal
                $error = array('error' => $this->upload->display_errors());

                $response = ['title' => 'Gagal!', 'text' => strip_tags($error['error']), 'type' => 'error', 'button' => 'Ok!'];
            } else {
                // apa bila berhasil
                $detailFile = $this->upload->data();

                $data = [
                    'id_latar_belakang' => acak_id('tb_latar_belakang', 'id_latar_belakang'),
                    'gambar'            => $detailFile['file_name'],
                ];

                $this->crud->i('tb_latar_belakang', $data);
            }
        } else {
            if (isset($post['ubah_gambar']) && $post['ubah_gambar'] === 'on') {
                if (!$this->upload->do_upload('inpgambar')) {
                    // apa bila gagal
                    $error = array('error' => $this->upload->display_errors());

                    $response = ['title' => 'Gagal!', 'text' => strip_tags($error['error']), 'type' => 'error', 'button' => 'Ok!'];
                } else {
                    // apa bila berhasil
                    $detailFile = $this->upload->data();

                    $nma_file = $result['gambar'];
                    // menghapus foto yg tersimpan
                    if ($nma_file !== '' || $nma_file !== null) {
                        if (file_exists(upload_path('gambar') . $result['gambar'])) {
                            unlink(upload_path('gambar') . $result['gambar']);
                        }
                    }

                    $data = [
                        'id_latar_belakang' => $post['inpidlatarbelakang'],
                        'gambar'            => $detailFile['file_name'],
                    ];

                    $this->crud->u('tb_latar_belakang', $data, ['id_latar_belakang' => $post['inpidlatarbelakang']]);
                }
            }
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

        $result = $this->crud->gda('tb_latar_belakang', ['id_latar_belakang' => $post['id']]);
        $nma_file = $result['gambar'];
        // menghapus foto yg tersimpan
        if ($nma_file !== '' || $nma_file !== null) {
            if (file_exists(upload_path('gambar') . $result['gambar'])) {
                unlink(upload_path('gambar') . $result['gambar']);
            }
        }
        $this->db->trans_start();
        $this->crud->d('tb_latar_belakang', $post['id'], 'id_latar_belakang');
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
