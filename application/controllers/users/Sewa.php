<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sewa extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        // untuk load model
        $this->load->model('crud');
        $this->load->model('m_bank');
        $this->load->model('m_sewa');
        $this->load->model('m_users');
        $this->load->model('m_penyewa');
        $this->load->model('m_transfer');
    }

    // untuk halaman default
    public function index()
    {
        $data = [
            'halaman' => 'Sewa',
            'rumah'   => $this->m_sewa->getBookingCustomerSewa($this->session->userdata('id_users')),
            'user'    => $this->m_users->getRoleUsers('users', $this->session->userdata('id_users')),
            'bank'    => $this->m_bank->getAll($this->session->userdata('id_users')),
            'content' => 'home/sewa/view',
            'css'     => '',
            'js'      => 'home/sewa/js/view'
        ];
        // untuk load view
        $this->load->view('home/base', $data);
    }

    // untuk detail produk
    public function add()
    {
        $post = $this->input->post(NULL, TRUE);

        $get = $this->m_sewa->getCheckSewa($post['inpidusers']);
        $num = $get->num_rows();
        $row = $get->row();

        if ($num == 1) {
            $response = ['title' => 'Gagal!', 'text' => 'Maaf Transaksi Anda belum selesai!', 'type' => 'error', 'button' => 'Ok!', 'id_sewa' => $row->id_sewa];
        } else {
            $data = [
                'id_users' => $post['inpidusers'],
                'id_rumah' => $post['inpidrumah'],
                'status'   => '0'
            ];

            $this->db->trans_start();
            $this->crud->i('tb_sewa', $data);
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

    // untuk simpan sewa
    public function finish()
    {
        $post = $this->input->post(NULL, TRUE);

        $id_users          = $this->session->userdata('id_users');
        $id_bank           = $post['inpidbank'];
        $nama              = $post['inpnama'];
        $email             = $post['inpemail'];
        $telepon           = $post['inptelepon'];
        $kelamin           = $post['inpkelamin'];
        $alamat            = $post['inpalamat'];
        $metode_pembayaran = $post['inpmetodepembayaran'];

        $this->db->trans_start();
        // update tabel users
        $tb_users = [
            'nama'  => $nama,
            'email' => $email
        ];
        $this->crud->u('tb_users', $tb_users, ['id_users' => $id_users]);

        // update tabel pelanggan
        $tb_pelanggan = [
            'kelamin' => $kelamin,
            'telepon' => $telepon,
            'alamat'  => $alamat
        ];
        $this->crud->u('tb_pelanggan', $tb_pelanggan, ['id_users' => $id_users]);

        // insert tabel penyewa
        $sewa = $this->m_sewa->getBookingCustomerSewa($this->session->userdata('id_users'));
        $rows = $sewa->row();

        $tb_penyewa = [
            'id_penyewa'        => acak_id('tb_penyewa', 'id_penyewa'),
            'id_rumah'          => $rows->id_rumah,
            'id_users'          => $id_users,
            'tgl_penyewa'       => date('Y-m-d H:i:s'),
            'metode_pembayaran' => $metode_pembayaran,
            'status_pembayaran' => '0',
            'status_lihat'      => 'belum-lihat',
        ];
        $this->crud->i('tb_penyewa', $tb_penyewa);

        // untuk simpan data pembayaran
        if ($metode_pembayaran == 't') {
            $tb_transfer = [
                'id_penyewa' => $tb_penyewa['id_penyewa'],
                'id_bank'    => $id_bank,
            ];
            $this->crud->i('tb_transfer', $tb_transfer);
        }

        $this->crud->d('tb_sewa', $id_users, 'id_users');
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $response = ['title' => 'Gagal!', 'text' => 'Gagal Simpan!', 'type' => 'error', 'button' => 'Ok!'];
        } else {
            $response = ['title' => 'Berhasil!', 'text' => 'Berhasil Simpan!', 'type' => 'success', 'button' => 'Ok!', 'id_penyewa' => base64url_encode($tb_penyewa['id_penyewa'])];
        }
        // untuk response json
        $this->_response($response);
    }

    // untuk nota
    public function nota()
    {
        $id_users   = $this->session->userdata('id_users');
        $id_penyewa = base64url_decode($this->uri->segment('2'));

        // untuk data users
        $get_users = $this->m_users->getRoleUsers('users', $id_users);

        // untuk data penyewa
        $get_penyewa = $this->m_penyewa->getPenyewaDetail($id_penyewa);
        $row_penyewa = $get_penyewa->row();

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
            'content'         => 'home/sewa/nota',
            'css'             => '',
            'js'              => ''
        ];
        // untuk load view
        $this->load->view('home/base', $data);
    }

    // untuk form transfer
    // untuk transfer
    public function transfer()
    {
        $id_penyewa = base64url_decode($this->uri->segment('2'));

        $data = [
            'halaman'    => 'Bayar',
            'id_penyewa' => $this->uri->segment('2'),
            'pembayaran' => $this->m_transfer->getBankDetail($id_penyewa)->row(),
            'total'      => $this->m_penyewa->getPenyewaDetail($id_penyewa)->row(),
            'content'    => 'home/sewa/transfer',
            'css'        => '',
            'js'         => 'home/sewa/js/transfer'
        ];
        // untuk load view
        $this->load->view('home/base', $data);
    }

    // untuk pemabayaran transfer
    public function pembayaran()
    {
        $post = $this->input->post(NULL, TRUE);

        $id_penyewa = base64url_decode($this->uri->segment('2'));

        $config['upload_path']   = './' . upload_path('gambar');
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['encrypt_name']  = TRUE;
        $config['overwrite']     = TRUE;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('inpbukti')) {
            // apa bila gagal
            $error = array('error' => $this->upload->display_errors());

            $response = ['title' => 'Gagal!', 'text' => strip_tags($error['error']), 'type' => 'error', 'button' => 'Ok!'];
        } else {
            // apa bila berhasil
            $detailFile = $this->upload->data();

            // update transfer
            $transfer = [
                'nama_penyetor'    => $post['inpnamapenyetor'],
                'atas_nama'        => $post['inpatasnama'],
                'tanggal_transfer' => date('Y-m-d H:i:s'),
                'bukti'            => $detailFile['file_name']
            ];

            // update penyewa
            $penyewa = [
                'status_pembayaran' => '1'
            ];
            $this->db->trans_start();
            $this->crud->u('tb_transfer', $transfer, ['id_penyewa' => $id_penyewa]);
            $this->crud->u('tb_penyewa', $penyewa, ['id_penyewa' => $id_penyewa]);
            $this->db->trans_complete();
            if ($this->db->trans_status() === FALSE) {
                $response = ['title' => 'Gagal!', 'text' => 'Gagal Simpan!', 'type' => 'error', 'button' => 'Ok!'];
            } else {
                $response = ['title' => 'Berhasil!', 'text' => 'Berhasil Simpan!', 'type' => 'success', 'button' => 'Ok!', 'id_penyewa' => base64url_encode($id_penyewa)];
            }
        }
        // untuk response json
        $this->_response($response);
    }
}
