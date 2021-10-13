<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Controller
{
    public $id_users;
    public $username;
    public $role;

    public function __construct()
    {
        parent::__construct();

        // untuk load model
        $this->load->model('crud');
        $this->load->model('m_guru');
        $this->load->model('m_users');
        $this->load->model('m_siswa');
        $this->load->model('m_agama');
        $this->load->model('m_profil');
        $this->load->model('m_kategori');
        $this->load->model('m_fasilitas');
        $this->load->model('m_kuisioner');
        $this->load->model('m_informasi');
        $this->load->model('m_organisasi');

        // untuk deklarasi variabel global
        $this->id_users = $this->session->userdata('id_users');
        $this->username = $this->session->userdata('username');
        $this->role     = $this->session->userdata('role');
    }

    public function index()
    {
        $data = [
            'halaman'   => 'Home',
            'kuisioner' => $this->m_kuisioner->getAll(),
            'profil'    => $this->m_profil->getAll(),
            'galeri'    => $this->m_informasi->getWhereGaleri(),
            'berita'    => $this->m_informasi->getWhereStatus('1'),
            'content'   => 'home/home/view',
            'css'       => '',
            'js'        => ''
        ];
        // untuk load view
        $this->load->view('home/base', $data);
    }

    public function tentang()
    {
        $data = [
            'halaman'   => 'Tentang',
            'kuisioner' => $this->m_kuisioner->getAll(),
            'profil'    => $this->m_profil->getAll(),
            'content'   => 'home/tentang/view',
            'css'       => '',
            'js'        => ''
        ];
        // untuk load view
        $this->load->view('home/base', $data);
    }

    public function kontak()
    {
        $data = [
            'halaman'   => 'Kontak',
            'kuisioner' => $this->m_kuisioner->getAll(),
            'profil'    => $this->m_profil->getAll(),
            'content'   => 'home/kontak/view',
            'css'       => '',
            'js'        => ''
        ];
        // untuk load view
        $this->load->view('home/base', $data);
    }

    // untuk halaman galeri
    public function galeri()
    {
        $data = [
            'halaman'   => 'Galeri',
            'kuisioner' => $this->m_kuisioner->getAll(),
            'profil'    => $this->m_profil->getAll(),
            'galeri'    => $this->m_informasi->getWhereGaleri(),
            'content'   => 'home/galeri/view',
            'css'       => '',
            'js'        => ''
        ];
        // untuk load view
        $this->load->view('home/base', $data);
    }

    // untuk halaman berita
    public function berita()
    {
        $data = [
            'halaman'   => 'Berita',
            'kuisioner' => $this->m_kuisioner->getAll(),
            'profil'    => $this->m_profil->getAll(),
            'kategori'  => $this->m_kategori->getAll(),
            'berita'    => $this->m_informasi->getWhereStatus('1'),
            'populer'   => $this->m_informasi->getWhereStatusPopuler(),
            'content'   => 'home/berita/view',
            'css'       => '',
            'js'        => ''
        ];
        // untuk load view
        $this->load->view('home/base', $data);
    }

    // untuk halaman kategori berita
    public function berita_kategori()
    {
        $id_kategori = $this->uri->segment('2');

        $data = [
            'halaman'   => 'Rincian',
            'kuisioner' => $this->m_kuisioner->getAll(),
            'profil'    => $this->m_profil->getAll(),
            'kategori'  => $this->m_kategori->getAll(),
            'berita'    => $this->m_informasi->getWhereStatusAndKategori('1', $id_kategori),
            'kategori'  => $this->m_kategori->getAll(),
            'populer'   => $this->m_informasi->getWhereStatusPopuler(),
            'content'   => 'home/berita/view',
            'css'       => '',
            'js'        => ''
        ];
        // untuk load view
        $this->load->view('home/base', $data);
    }

    // untuk halaman detail berita
    public function berita_detail()
    {
        $id_informasi = $this->uri->segment('3');

        $data = [
            'halaman'   => 'Rincian',
            'kuisioner' => $this->m_kuisioner->getAll(),
            'profil'    => $this->m_profil->getAll(),
            'berita'    => $this->m_informasi->getWhereDetail($id_informasi),
            'kategori'  => $this->m_kategori->getAll(),
            'populer'   => $this->m_informasi->getWhereStatusPopuler(),
            'content'   => 'home/berita/detail',
            'css'       => '',
            'js'        => ''
        ];
        // untuk load view
        $this->load->view('home/base', $data);
    }

    // untuk halaman siswa aktif
    public function s_aktif()
    {
        $data = [
            'halaman'   => 'Siswa Aktif',
            'kuisioner' => $this->m_kuisioner->getAll(),
            'profil'    => $this->m_profil->getAll(),
            'data'      => $this->m_siswa->getAllSiswaStatus('0'),
            'content'   => 'home/s_aktif/view',
            'css'       => 'home/s_aktif/css/view',
            'js'        => 'home/s_aktif/js/view'
        ];
        // untuk load view
        $this->load->view('home/base', $data);
    }

    // untuk halaman siswa alumni
    public function s_alumni()
    {
        $data = [
            'halaman'   => 'Siswa Alumni',
            'kuisioner' => $this->m_kuisioner->getAll(),
            'profil'    => $this->m_profil->getAll(),
            'data'      => $this->m_siswa->getAllSiswaStatus('1'),
            'content'   => 'home/s_alumni/view',
            'css'       => 'home/s_alumni/css/view',
            'js'        => 'home/s_alumni/js/view'
        ];
        // untuk load view
        $this->load->view('home/base', $data);
    }

    // untuk halaman kuisioner
    public function kuisioner()
    {
        // untuk mengecek status login
        checking_session($this->username, $this->role, ['users']);

        $id_kuisioner = base64url_decode($this->uri->segment('2'));
        $id_users     = $this->id_users;
        $role         = $this->role;

        $get_siswa = $this->m_users->getRoleUsers($role, $id_users);

        $data = [
            'halaman'         => 'Tracer Study',
            'kuisioner'       => $this->m_kuisioner->getAll(),
            'profil'          => $this->m_profil->getAll(),
            'agama'           => $this->m_agama->getAll(),
            'kuisioner_check' => $this->m_kuisioner->getCheckHasil($id_kuisioner, $get_siswa->id_siswa)->num_rows(),
            'siswa'           => $get_siswa,
            'data'            => $this->m_kuisioner->getAllKuisionerDetail($id_kuisioner),
            'content'         => 'home/kuisioner/view',
            'css'             => '',
            'js'              => 'home/kuisioner/js/view'
        ];
        // untuk load view
        $this->load->view('home/base', $data);
    }

    // untuk simpan kuisioner
    public function kuisioner_simpan()
    {
        $post     = $this->input->post(NULL, TRUE);
        $id_users = $this->id_users;
        $role     = $this->role;

        $get_siswa = $this->m_users->getRoleUsers($role, $id_users);

        $this->db->trans_start();
        if ($get_siswa->nis === null) {
            // untuk tabel siswa
            $siswa = [
                'id_users'  => $id_users,
                'id_agama'  => $post['inpidagama'],
                'nis'       => $post['inpnis'],
                'nama'      => $post['inpnama'],
                'kelamin'   => $post['inpkelamin'],
                'tmp_lahir' => $post['inptmplahir'],
                'tgl_lahir' => $post['inptgllahir'],
                'alamat'    => $post['inpalamat'],
                'ortu_wali' => $post['inportuwali'],
                'status'    => $post['inpstatus'],
                'thn_lulus' => $post['inptahunlulus'],
            ];
            $this->crud->u('tb_siswa', $siswa, ['id_siswa' => $get_siswa->id_siswa, 'id_users' => $id_users]);
            
            // untuk tabel users
            $siswa = [
                'nama' => $post['inpnama'],
            ];
            $this->crud->u('tb_users', $siswa, ['id_users' => $id_users]);
        }
        // untuk tabel kuisioner
        for ($i = 0; $i < count($post['inpidkusionersoal']); $i++) {
            $kusioner_hasil = [
                'id_kuisioner_hasil' => acak_id('tb_kuisioner_hasil', 'id_kuisioner_hasil'),
                'id_kuisioner_soal'  => $post['inpidkusionersoal'][$i],
                'id_siswa'           => $get_siswa->id_siswa,
                'jawaban'            => $post[$i . '_inpjawaban'],
            ];
            $this->crud->i('tb_kuisioner_hasil', $kusioner_hasil);
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

    // untuk profil
    public function profil()
    {
        $id_profil = base64url_decode($this->uri->segment('2'));

        $data = [
            'halaman'   => 'Profil',
            'kuisioner' => $this->m_kuisioner->getAll(),
            'profil'    => $this->m_profil->getAll(),
            'row'       => $this->m_profil->getAllDetail($id_profil),
            'content'   => 'home/profil/view',
            'css'       => '',
            'js'        => ''
        ];
        // untuk load view
        $this->load->view('home/base', $data);
    }

    // untuk halaman guru
    public function guru()
    {
        $data = [
            'halaman'   => 'Guru',
            'kuisioner' => $this->m_kuisioner->getAll(),
            'profil'    => $this->m_profil->getAll(),
            'data'      => $this->m_guru->getAll(),
            'content'   => 'home/guru/view',
            'css'       => 'home/guru/css/view',
            'js'        => 'home/guru/js/view'
        ];
        // untuk load view
        $this->load->view('home/base', $data);
    }

    // untuk halaman fasilitas
    public function fasilitas()
    {
        $data = [
            'kuisioner' => $this->m_kuisioner->getAll(),

            'halaman'   => 'Fasilitas',
            'kuisioner' => $this->m_kuisioner->getAll(),
            'profil'    => $this->m_profil->getAll(),
            'data'      => $this->m_fasilitas->getAll(),
            'content'   => 'home/fasilitas/view',
            'css'       => '',
            'js'        => ''
        ];
        // untuk load view
        $this->load->view('home/base', $data);
    }

    // untuk halaman organisasi
    public function organisasi()
    {
        $data = [
            'halaman'   => 'Organisasi',
            'kuisioner' => $this->m_kuisioner->getAll(),
            'profil'    => $this->m_profil->getAll(),
            'data'      => $this->m_organisasi->getAll(),
            'content'   => 'home/organisasi/view',
            'css'       => '',
            'js'        => ''
        ];
        // untuk load view
        $this->load->view('home/base', $data);
    }

    // untuk halaman organisasi detail
    public function organisasi_detail()
    {
        $id_organisasi = base64url_decode($this->uri->segment('3'));

        $data = [
            'halaman'   => 'Detail Organisasi',
            'kuisioner' => $this->m_kuisioner->getAll(),
            'profil'    => $this->m_profil->getAll(),
            'row'       => $this->m_organisasi->getAllDetail($id_organisasi),
            'content'   => 'home/organisasi/detail',
            'css'       => '',
            'js'        => ''
        ];
        // untuk load view
        $this->load->view('home/base', $data);
    }
}
