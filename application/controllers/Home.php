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
        // untuk cek session
        if (!empty($this->session->userdata('username'))) {
            checking_session($this->session->userdata('username'), $this->session->userdata('role'), ['users']);
        }

        // untuk load model
        $this->load->model('crud');
        $this->load->model('m_guru');
        $this->load->model('m_dana');
        $this->load->model('m_users');
        $this->load->model('m_siswa');
        $this->load->model('m_agama');
        $this->load->model('m_profil');
        $this->load->model('m_kategori');
        $this->load->model('m_keuangan');
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
            'dana'      => $this->m_dana->getAll(),
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
            'dana'      => $this->m_dana->getAll(),
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
            'dana'      => $this->m_dana->getAll(),
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
            'dana'      => $this->m_dana->getAll(),
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
            'dana'      => $this->m_dana->getAll(),
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
            'dana'      => $this->m_dana->getAll(),
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
            'dana'      => $this->m_dana->getAll(),
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
            'dana'      => $this->m_dana->getAll(),
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
            'dana'      => $this->m_dana->getAll(),
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
        $id_users     = $this->id_users;

        if ($id_users === null) {
            $data = [
                'halaman'        => 'Grafik',
                'id_kuisioner'   => $id_kuisioner,
                'kuisioner'      => $this->m_kuisioner->getAll(),
                'kuisional_soal' => $this->m_kuisioner->getWhereSoal($id_kuisioner),
                'profil'         => $this->m_profil->getAll(),
                'agama'          => $this->m_agama->getAll(),
                'content'        => 'home/kuisioner_grafik/view',
                'css'            => 'home/kuisioner_grafik/css/view',
                'js'             => 'home/kuisioner_grafik/js/view'
            ];
        } else {
            $get_siswa = $this->m_siswa->getSiswa($id_users);

            $data = [
                'halaman'         => 'Kuisoner',
                'kuisioner'       => $this->m_kuisioner->getAll(),
                'profil'          => $this->m_profil->getAll(),
                'agama'           => $this->m_agama->getAll(),
                'data'            => $this->m_kuisioner->getAllKuisionerDetail($id_kuisioner),
                'siswa'           => $get_siswa,
                'siswa_hasil'     => $this->m_kuisioner->getWhereHasilSiswa($get_siswa->id_siswa),
                'content'         => 'home/kuisioner/view',
                'css'             => '',
                'js'              => 'home/kuisioner/js/view'
            ];
        }
        // untuk load view
        $this->load->view('home/base', $data);
    }

    public function kuisioner_chart()
    {
        $id_kuisioner = $this->uri->segment('2');

        $get = $this->m_kuisioner->getWhereSoal($id_kuisioner);

        $result = [];
        foreach ($get->result() as $key => $value) {
            $result[] = [
                'id_kuisioner_soal' => $value->id_kuisioner_soal,
                'soal'              => $value->soal,
                'data'              =>  [
                    [
                        'name' => $value->pil_a,
                        'y'    => $this->m_kuisioner->getWhereHasil($value->id_kuisioner_soal, '1')->num_rows()
                    ],
                    [
                        'name' => $value->pil_b,
                        'y'    => $this->m_kuisioner->getWhereHasil($value->id_kuisioner_soal, '2')->num_rows()
                    ],
                    [
                        'name' => $value->pil_c,
                        'y'    => $this->m_kuisioner->getWhereHasil($value->id_kuisioner_soal, '3')->num_rows()
                    ],
                    [
                        'name' => $value->pil_d,
                        'y'    => $this->m_kuisioner->getWhereHasil($value->id_kuisioner_soal, '4')->num_rows()
                    ],
                    [
                        'name' => $value->pil_e,
                        'y'    => $this->m_kuisioner->getWhereHasil($value->id_kuisioner_soal, '5')->num_rows()
                    ],
                ]
            ];
        }

        // debug($result);
        $this->_response($result);
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
        for ($i = 0; $i < count($post['inpidkuisionersoal']); $i++) {

            if (empty($post['inpidkuisionerhasil'][$i])) {
                $kusioner_hasil = [
                    'id_kuisioner_hasil' => acak_id('tb_kuisioner_hasil', 'id_kuisioner_hasil'),
                    'id_kuisioner_soal'  => $post['inpidkuisionersoal'][$i],
                    'id_siswa'           => $get_siswa->id_siswa,
                    'jawaban'            => $post[$i . '_inpjawaban'],
                ];

                $this->crud->i('tb_kuisioner_hasil', $kusioner_hasil);
            } else {
                $kusioner_hasil = [
                    'id_kuisioner_hasil' => $post['inpidkuisionerhasil'][$i],
                    'id_kuisioner_soal'  => $post['inpidkuisionersoal'][$i],
                    'id_siswa'           => $get_siswa->id_siswa,
                    'jawaban'            => $post[$i . '_inpjawaban'],
                ];

                $this->crud->u('tb_kuisioner_hasil', $kusioner_hasil, ['id_kuisioner_hasil' => $post['inpidkuisionerhasil'][$i]]);
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

    // untuk profil
    public function profil()
    {
        $id_profil = base64url_decode($this->uri->segment('2'));

        $data = [
            'halaman'   => 'Profil',
            'kuisioner' => $this->m_kuisioner->getAll(),
            'profil'    => $this->m_profil->getAll(),
            'dana'      => $this->m_dana->getAll(),
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
            'dana'      => $this->m_dana->getAll(),
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
            'dana'      => $this->m_dana->getAll(),
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
            'dana'      => $this->m_dana->getAll(),
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
            'dana'      => $this->m_dana->getAll(),
            'row'       => $this->m_organisasi->getAllDetail($id_organisasi),
            'content'   => 'home/organisasi/detail',
            'css'       => '',
            'js'        => ''
        ];
        // untuk load view
        $this->load->view('home/base', $data);
    }

    // untuk halaman laporan keuangan
    public function laporan()
    {
        $tiga_bulan = date('Y-m-d', strtotime("-3 months", strtotime(date('Y-m-d'))));
        $id_dana    = base64url_decode($this->uri->segment('2'));

        $start    = new DateTime($tiga_bulan);
        $end      = new DateTime(date('Y-m-d'));
        $interval = new DateInterval('P1M');
        $period   = new DatePeriod($start, $interval, $end);

        // untuk dana
        $dana = $this->crud->gda('tb_dana', ['id_dana' => $id_dana]);

        $get = $this->m_keuangan->getReportKeuangan($id_dana, $tiga_bulan, date('Y-m-d'));
        $num = $get->num_rows();
        $no  = 1;

        if ($num > 0) {
            foreach ($get->result() as $row) {
                foreach ($period as $dt) {
                    $bulan  = $dt->format('m') . PHP_EOL;
                    $kredit[(int) $bulan] = $this->m_keuangan->getReportOutByMonth($row->id_keuangan, $bulan);
                }

                $sisa = ($row->debit - array_sum($kredit));

                $result[] = [
                    'no'         => $no++,
                    'uraian'     => $row->uraian,
                    'keterangan' => '-',
                    'debit'      => create_separator($row->debit),
                    'bulan'      => $kredit,
                    'kredit'     => create_separator(array_sum($kredit)),
                    'sisa'       => create_separator($sisa)
                ];
            }
        } else {
            foreach ($period as $dt) {
                $bulan  = $dt->format('m') . PHP_EOL;
                $kredit[(int) $bulan] = 0;
            }

            $result[] = [
                'no'         => 'Data Kosong!',
                'uraian'     => 'Data Kosong!',
                'keterangan' => 'Data Kosong!',
                'debit'      => 0,
                'bulan'      => $kredit,
                'kredit'     => 0,
                'sisa'       => 0,
            ];
        }

        $data = [
            'halaman'     => 'Laporan',
            'kuisioner'   => $this->m_kuisioner->getAll(),
            'profil'      => $this->m_profil->getAll(),
            'dana'        => $this->m_dana->getAll(),
            'bulan'       => ['', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
            'jenis'       => $dana,
            'jarak_bulan' => $kredit,
            'keuangan'    => $result,
            'content'     => 'home/laporan/view',
            'css'         => '',
            'js'          => 'home/laporan/js/view'
        ];
        // untuk load view
        $this->load->view('home/base', $data);
    }

    // untuk akun users
    public function akun()
    {
        $data = [
            'halaman'   => 'Akun',
            'kuisioner' => $this->m_kuisioner->getAll(),
            'profil'    => $this->m_profil->getAll(),
            'dana'      => $this->m_dana->getAll(),
            'data'      => $this->m_users->getRoleUsers('users', $this->id_users),
            'content'   => 'home/akun/view',
            'css'       => '',
            'js'        => 'home/akun/js/view'
        ];
        // untuk load view
        $this->load->view('home/base', $data);
    }

    // untuk ubah akun
    public function simpan_akun()
    {
        $post = $this->input->post(NULL, TRUE);

        $data = [
            'nama'     => $post['inpnama'],
            'email'    => $post['inpemail'],
            'username' => $post['inpusername'],
            'roles'    => 'users'
        ];
        $this->db->trans_start();
        $this->crud->u('tb_users', $data, ['id_users' => $this->id_users]);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $response = ['title' => 'Gagal!', 'text' => 'Gagal Simpan!', 'type' => 'error', 'button' => 'Ok!'];
        } else {
            $response = ['title' => 'Berhasil!', 'text' => 'Berhasil Simpan!', 'type' => 'success', 'button' => 'Ok!'];
        }
        // untuk response json
        $this->_response($response);
    }

    // untuk ubah keamanan
    public function simpan_keamanan()
    {
        $post = $this->input->post(NULL, TRUE);

        $pwd_lama = $post['inppasswordlama'];
        $pwd_baru = $post['inppasswordbaru'];
        $konfirmasi_pwd_baru = $post['inpkonfirmasipassword'];

        $users = $this->crud->gda('tb_users', ['id_users' => $this->id_users]);
        $check_pwd = password_verify($pwd_lama, $users['password']);

        if ($check_pwd === true) {
            if ($pwd_baru === $konfirmasi_pwd_baru) {

                $data = [
                    'password' => password_hash($pwd_baru, PASSWORD_DEFAULT),
                    'roles'    => 'users'
                ];
                $this->db->trans_start();
                $this->crud->u('tb_users', $data, ['id_users' => $this->id_users]);
                $this->db->trans_complete();
                if ($this->db->trans_status() === FALSE) {
                    $response = ['title' => 'Gagal!', 'text' => 'Terdapat kesalahan pada sistem!', 'type' => 'error', 'button' => 'Ok!'];
                } else {
                    $response = ['title' => 'Berhasil!', 'text' => 'Berhasil!', 'type' => 'success', 'button' => 'Ok!'];
                }
            } else {
                $response = ['title' => 'Gagal!', 'text' => 'Password baru dan konfirmasi password baru tidak sama!', 'type' => 'error', 'button' => 'Ok!'];
            }
        } else {
            $response = ['title' => 'Gagal!', 'text' => 'Password lama yang Anda masukkan tidak sama!', 'type' => 'error', 'button' => 'Ok!'];
        }
        // untuk respon json
        $this->_response($response);
    }
}
