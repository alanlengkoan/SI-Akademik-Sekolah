<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rumah extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        // untuk mengecek status login
        checking_session($this->session->userdata('username'), $this->session->userdata('role'), ['admin']);

        // untuk load model
        $this->load->model('crud');
        $this->load->model('m_rumah');
        $this->load->model('m_jenis');
        $this->load->model('m_kategori');
        $this->load->model('m_fasilitas');
    }

    // untuk default
    public function index()
    {
        $data = [
            'halaman' => 'Rumah',
            'content' => 'admin/rumah/view',
            'css'     => 'admin/rumah/css/view',
            'js'      => 'admin/rumah/js/view'
        ];
        // untuk load view
        $this->load->view('admin/base', $data);
    }

    // untuk get data bank by datatable
    public function get_data_rumah_dt()
    {
        return $this->m_rumah->getAllDataDt();
    }

    // untuk halaman tambah
    public function add()
    {
        $data = [
            'halaman'  => 'Rumah',
            'jenis'    => $this->m_jenis->getAll(),
            'kategori' => $this->m_kategori->getAll(),
            'content'  => 'admin/rumah/add',
            'css'      => '',
            'js'       => 'admin/rumah/js/add'
        ];
        // untuk load view
        $this->load->view('admin/base', $data);
    }

    // untuk proses tambah data
    public function process_add()
    {
        $post = $this->input->post(NULL, TRUE);

        $config['upload_path']   = './' . upload_path('gambar');
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['encrypt_name']  = TRUE;
        $config['overwrite']     = TRUE;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('inpgambar')) {
            // apa bila gagal
            $error = array('error' => $this->upload->display_errors());

            $response = ['title' => 'Gagal!', 'text' => strip_tags($error['error']), 'type' => 'error', 'button' => 'Ok!'];
        } else {
            // apa bila berhasil
            $detailFile = $this->upload->data();

            $data = [
                'id_rumah'    => acak_id('tb_rumah', 'id_rumah'),
                'id_jenis'    => $post['inpidjenis'],
                'id_kategori' => $post['inpidkategori'],
                'nama'        => $post['inpnama'],
                'harga'       => remove_separator($post['inpharga']),
                'gambar'      => $detailFile['file_name'],
                'keterangan'  => $post['inpketerangan'],
                'alamat'      => $post['inpalamat'],
                'latitude'    => $post['inplatitude'],
                'longitude'   => $post['inplongitude'],
            ];
            $this->db->trans_start();
            $this->crud->i('tb_rumah', $data);
            $this->db->trans_complete();
            if ($this->db->trans_status() === FALSE) {
                $response = ['title' => 'Gagal!', 'text' => 'Gagal Simpan!', 'type' => 'error', 'button' => 'Ok!', 'id_rumah' => null];
            } else {
                $response = ['title' => 'Berhasil!', 'text' => 'Berhasil Simpan!', 'type' => 'success', 'button' => 'Ok!', 'id_rumah' => $data['id_rumah']];
            }
        }
        // untuk response json
        $this->_response($response);
    }

    // untuk halaman ubah
    public function upd()
    {
        $id_rumah = base64url_decode($this->uri->segment('4'));

        $data = [
            'halaman'  => 'Rumah',
            'id_rumah' => $id_rumah,
            'rumah'    => $this->m_rumah->getDetail($id_rumah),
            'jenis'    => $this->m_jenis->getAll(),
            'kategori' => $this->m_kategori->getAll(),
            'content'  => 'admin/rumah/upd',
            'css'      => 'admin/rumah/css/upd',
            'js'       => 'admin/rumah/js/upd'
        ];
        // untuk load view
        $this->load->view('admin/base', $data);
    }

    // untuk proses ubah data
    public function process_upd()
    {
        $id_rumah = base64url_decode($this->uri->segment('4'));

        $post = $this->input->post(NULL, TRUE);

        $result = $this->crud->gda('tb_rumah', ['id_rumah' => $id_rumah]);

        if (isset($post['ubah_gambar']) && $post['ubah_gambar'] === 'on') {
            $config['upload_path']   = './' . upload_path('gambar');
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['encrypt_name']  = TRUE;
            $config['overwrite']     = TRUE;

            $this->load->library('upload', $config);

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
                    'id_jenis'    => $post['inpidjenis'],
                    'id_kategori' => $post['inpidkategori'],
                    'nama'        => $post['inpnama'],
                    'harga'       => remove_separator($post['inpharga']),
                    'gambar'      => $detailFile['file_name'],
                    'keterangan'  => $post['inpketerangan'],
                    'alamat'      => $post['inpalamat'],
                    'latitude'    => $post['inplatitude'],
                    'longitude'   => $post['inplongitude'],
                ];
                $this->db->trans_start();
                $this->crud->u('tb_rumah', $data, ['id_rumah' => $id_rumah]);
                $this->db->trans_complete();
                if ($this->db->trans_status() === FALSE) {
                    $response = ['title' => 'Gagal!', 'text' => 'Gagal Simpan!', 'type' => 'error', 'button' => 'Ok!'];
                } else {
                    $response = ['title' => 'Berhasil!', 'text' => 'Berhasil Simpan!', 'type' => 'success', 'button' => 'Ok!'];
                }
            }
        } else {
            $data = [
                'id_jenis'    => $post['inpidjenis'],
                'id_kategori' => $post['inpidkategori'],
                'nama'        => $post['inpnama'],
                'harga'       => remove_separator($post['inpharga']),
                'keterangan'  => $post['inpketerangan'],
                'alamat'      => $post['inpalamat'],
                'latitude'    => $post['inplatitude'],
                'longitude'   => $post['inplongitude'],
            ];
            $this->db->trans_start();
            $this->crud->u('tb_rumah', $data, ['id_rumah' => $id_rumah]);
            $this->db->trans_complete();
            if ($this->db->trans_status() === FALSE) {
                $response = ['title' => 'Gagal!', 'text' => 'Gagal Simpan!', 'type' => 'error', 'button' => 'Ok!'];
            } else {
                $response = ['title' => 'Berhasil!', 'text' => 'Berhasil Simpan!', 'type' => 'success', 'button' => 'Ok!'];
            }
        }
        // untuk response json
        $this->_response($response);
    }

    // untuk proses hapus data
    public function process_del()
    {
        $post = $this->input->post(NULL, TRUE);

        $result_rumah = $this->crud->gda('tb_rumah', ['id_rumah' => $post['id']]);
        $gambar_rumah = $result_rumah['gambar'];
        // menghapus foto yg tersimpan produk
        if ($gambar_rumah !== '' || $gambar_rumah !== null) {
            if (file_exists(upload_path('gambar') . $result_rumah['gambar'])) {
                unlink(upload_path('gambar') . $result_rumah['gambar']);
            }
        }

        // menghapus foto yg tersimpan topper
        $result_fasilitas = $this->m_fasilitas->getFasilitasDetail($post['id']);
        foreach ($result_fasilitas->result() as $key => $row) {
            $gambar_fasilitas = $row->gambar;
            if ($gambar_fasilitas !== '' || $gambar_fasilitas !== null) {
                if (file_exists(upload_path('gambar') . $row->gambar)) {
                    unlink(upload_path('gambar') . $row->gambar);
                }
            }
        }

        $this->db->trans_start();
        $this->crud->d('tb_rumah', $post['id'], 'id_rumah');
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $response = ['title' => 'Gagal!', 'text' => 'Gagal Hapus!', 'type' => 'error', 'button' => 'Ok!'];
        } else {
            $response = ['title' => 'Berhasil!', 'text' => 'Berhasil Hapus!', 'type' => 'success', 'button' => 'Ok!'];
        }
        // untuk response json
        $this->_response($response);
    }

    // untuk ambil data fasilitas
    public function get_data_fasilitas_dt()
    {
        $id_rumah = base64url_decode($this->uri->segment('4'));
        return $this->m_fasilitas->getAllDataDt($id_rumah);
    }

    // untuk get data by id
    public function get_data_fasilitas()
    {
        $post = $this->input->post(NULL, TRUE);

        $result = $this->crud->gda('tb_fasilitas', ['id_fasilitas' => $post['id']]);
        $response = [
            'id_fasilitas' => $result['id_fasilitas'],
            'id_rumah'     => $result['id_rumah'],
            'nama'         => $result['nama'],
            'gambar'       => $result['gambar'],
        ];
        // untuk response json
        $this->_response($response);
    }

    // untuk simpan fasilitas
    public function process_save_fasilitas()
    {
        $post = $this->input->post(NULL, TRUE);

        if (empty($post['inpidfasilitas'])) {
            $config['upload_path']   = './' . upload_path('gambar');
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['encrypt_name']  = TRUE;
            $config['overwrite']     = TRUE;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('inpgambarfasilitas')) {
                // apa bila gagal
                $error = array('error' => $this->upload->display_errors());

                $response = ['title' => 'Gagal!', 'text' => strip_tags($error['error']), 'type' => 'error', 'button' => 'Ok!'];
            } else {
                // apa bila berhasil
                $detailFile = $this->upload->data();

                $data = [
                    'id_fasilitas' => acak_id('tb_fasilitas', 'id_fasilitas'),
                    'id_rumah'     => $post['inpidrumah'],
                    'nama'         => $post['inpnamafasilitas'],
                    'gambar'       => $detailFile['file_name'],
                ];
                $this->db->trans_start();
                $this->crud->i('tb_fasilitas', $data);
                $this->db->trans_complete();
                if ($this->db->trans_status() === FALSE) {
                    $response = ['title' => 'Gagal!', 'text' => 'Gagal Simpan!', 'type' => 'error', 'button' => 'Ok!'];
                } else {
                    $response = ['title' => 'Berhasil!', 'text' => 'Berhasil Simpan!', 'type' => 'success', 'button' => 'Ok!'];
                }
            }
        } else {
            $result = $this->crud->gda('tb_fasilitas', ['id_fasilitas' => $post['inpidfasilitas']]);

            if (isset($post['ubah_gambar_fasilitas']) && $post['ubah_gambar_fasilitas'] === 'on') {
                $config['upload_path']   = './' . upload_path('gambar');
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['encrypt_name']  = TRUE;
                $config['overwrite']     = TRUE;

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('inpgambarfasilitas')) {
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
                        'id_fasilitas' => $post['inpidfasilitas'],
                        'id_rumah'     => $post['inpidrumah'],
                        'nama'         => $post['inpnamafasilitas'],
                        'gambar'       => $detailFile['file_name'],
                    ];
                    $this->db->trans_start();
                    $this->crud->u('tb_fasilitas', $data, ['id_fasilitas' => $post['inpidfasilitas']]);
                    $this->db->trans_complete();
                    if ($this->db->trans_status() === FALSE) {
                        $response = ['title' => 'Gagal!', 'text' => 'Gagal Simpan!', 'type' => 'error', 'button' => 'Ok!'];
                    } else {
                        $response = ['title' => 'Berhasil!', 'text' => 'Berhasil Simpan!', 'type' => 'success', 'button' => 'Ok!'];
                    }
                }
            } else {
                $data = [
                    'id_fasilitas' => $post['inpidfasilitas'],
                    'id_rumah'     => $post['inpidrumah'],
                    'nama'         => $post['inpnamafasilitas'],
                ];
                $this->db->trans_start();
                $this->crud->u('tb_fasilitas', $data, ['id_fasilitas' => $post['inpidfasilitas']]);
                $this->db->trans_complete();
                if ($this->db->trans_status() === FALSE) {
                    $response = ['title' => 'Gagal!', 'text' => 'Gagal Simpan!', 'type' => 'error', 'button' => 'Ok!'];
                } else {
                    $response = ['title' => 'Berhasil!', 'text' => 'Berhasil Simpan!', 'type' => 'success', 'button' => 'Ok!'];
                }
            }
        }
        // untuk response json
        $this->_response($response);
    }

    // untuk proses hapus fasilitas
    public function process_del_fasilitas()
    {
        $post = $this->input->post(NULL, TRUE);

        $result = $this->crud->gda('tb_fasilitas', ['id_fasilitas' => $post['id']]);
        $nma_file = $result['gambar'];
        // menghapus foto yg tersimpan
        if ($nma_file !== '' || $nma_file !== null) {
            if (file_exists(upload_path('gambar') . $result['gambar'])) {
                unlink(upload_path('gambar') . $result['gambar']);
            }
        }
        $this->db->trans_start();
        $this->crud->d('tb_fasilitas', $post['id'], 'id_fasilitas');
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