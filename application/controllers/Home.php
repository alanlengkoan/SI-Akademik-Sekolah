<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        // untuk load model
        $this->load->model('crud');
        $this->load->model('m_siswa');
        $this->load->model('m_agama');
        $this->load->model('m_kategori');
        $this->load->model('m_kuisioner');
        $this->load->model('m_informasi');
    }

    public function index()
    {
        $data = [
            'halaman'   => 'Home',
            'kuisioner' => $this->m_kuisioner->getAll(),
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
            'content'   => 'home/kontak/view',
            'css'       => '',
            'js'        => 'home/kontak/js/view'
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
            'kategori'  => $this->m_kategori->getAll(),
            'berita'    => $this->m_informasi->getWhereStatus('1'),
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
            'kategori'  => $this->m_kategori->getAll(),
            'berita'    => $this->m_informasi->getWhereStatusAndKategori('1', $id_kategori),
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
            'berita'    => $this->m_informasi->getWhereDetail($id_informasi),
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
        $id_kuisioner = base64url_decode($this->uri->segment('2'));

        $data = [
            'halaman'   => 'Tracer Study',
            'kuisioner' => $this->m_kuisioner->getAll(),
            'data'      => $this->m_kuisioner->getAllKuisionerDetail($id_kuisioner),
            'agama'     => $this->m_agama->getAll(),
            'content'   => 'home/kuisioner/view',
            'css'       => '',
            'js'        => 'home/kuisioner/js/view'
        ];
        // untuk load view
        $this->load->view('home/base', $data);
    }

    // untuk simpan kuisioner
    public function kuisioner_simpan()
    {
        $post = $this->input->post(NULL, TRUE);

        $this->db->trans_start();
        // untuk tabel siswa
        $siswa = [
            'id_siswa'  => acak_id('tb_siswa', 'id_siswa'),
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
        $this->crud->i('tb_siswa', $siswa);

        // untuk tabel kuisioner
        for ($i = 0; $i < count($post['inpidkusionersoal']); $i++) {
            $kusioner_hasil = [
                'id_kuisioner_hasil' => acak_id('tb_kuisioner_hasil', 'id_kuisioner_hasil'),
                'id_kuisioner_soal'  => $post['inpidkusionersoal'][$i],
                'id_siswa'           => $siswa['id_siswa'],
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
}
