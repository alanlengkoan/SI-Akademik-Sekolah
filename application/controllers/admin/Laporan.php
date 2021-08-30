<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        // untuk mengecek status login
        checking_session($this->session->userdata('username'), $this->session->userdata('role'), ['admin']);

        // untuk load model
        $this->load->model('crud');
        $this->load->model('m_users');
        $this->load->model('m_riwayat');
        $this->load->model('m_penyewa');
        $this->load->model('m_pelanggan');
    }

    // untuk default
    public function index()
    {
    }

    // untuk halaman laporan pembelian produk
    public function l_pembelian()
    {
        $data = [
            'halaman' => 'Laporan Pembelian',
            'content' => 'admin/laporan_p/view',
            'css'     => '',
            'js'      => 'admin/laporan_p/js/view'
        ];
        // untuk load view
        $this->load->view('admin/base', $data);
    }

    // untuk lihat laporan pembelian produk
    public function l_pembelian_show()
    {
        $post = $this->input->post(NULL, TRUE);

        $get = $this->m_penyewa->getReportPembelian($post['tgl_awal'], $post['tgl_akhir']);
        $num = $get->num_rows();

        if ($num > 0) {
            foreach ($get->result() as $value) {
                $transfer = ($value->transfer === null) ? 0 : $value->transfer;
                $total    = $transfer;

                $result[$value->customer][] = [
                    'customer'          => $value->customer,
                    'tanggal_pembelian' => $value->tgl_penyewa,
                    'jam_pembelian'     => $value->tgl_penyewa,
                    'total_pembelian'   => $value->harga,
                    'total_bayar'       => ($total == 0) ? 0 : $total,
                ];
            }
        } else {
            $result["Data Kosong!"][] = [
                'customer'          => 'Data Kosong!',
                'tanggal_pembelian' => 'Data Kosong!',
                'jam_pembelian'     => 'Data Kosong!',
                'total_pembelian'   => 0,
                'total_bayar'       => 0,
            ];
        }
        $data = [
            'halaman' => 'Laporan Pembelian',
            'laporan' => $result
        ];
        // untuk load view
        $this->load->view('admin/laporan_p/table', $data);
    }

    // untuk export laporan pembelian produk
    public function l_pembelian_export()
    {
        $post = $this->input->get(NULL, TRUE);

        $get = $this->m_penyewa->getReportPembelian(base64url_decode($post['tgl_awal']), base64url_decode($post['tgl_akhir']));
        $num = $get->num_rows();

        if ($num > 0) {
            foreach ($get->result() as $value) {
                $transfer = ($value->transfer === null) ? 0 : $value->transfer;
                $total    = $transfer;

                $result[$value->customer][] = [
                    'customer'          => $value->customer,
                    'tanggal_pembelian' => $value->tgl_penyewa,
                    'jam_pembelian'     => $value->tgl_penyewa,
                    'total_pembelian'   => $value->harga,
                    'total_bayar'       => ($total == 0) ? 0 : $total,
                ];
            }
        } else {
            $result["Data Kosong!"][] = [
                'customer'          => 'Data Kosong!',
                'tanggal_pembelian' => 'Data Kosong!',
                'jam_pembelian'     => 'Data Kosong!',
                'total_pembelian'   => 0,
                'total_bayar'       => 0,
            ];
        }
        $data = [
            'laporan' => $result
        ];
        // untuk load view
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->cetakPdf('laporan_pembelian', 'admin/laporan_p/print', $data);
    }

    // untuk laporan pembelian produk bulanan 
    public function l_pembelian_bulanan()
    {
        $bulan = array(1 => "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

        $data = [
            'halaman' => 'Laporan Pembelian Bulanan',
            'bulan'   => $bulan,
            'content' => 'admin/laporan_p_bulanan/view',
            'css'     => '',
            'js'      => 'admin/laporan_p_bulanan/js/view'
        ];
        // untuk load view
        $this->load->view('admin/base', $data);
    }

    // untuk lihat laporan pembelian produk bulanan
    public function l_pembelian_bulanan_show()
    {
        $post = $this->input->post(NULL, TRUE);

        $get = $this->m_penyewa->getReportPembelianBulanan($post['inpbulan'], date('Y'));
        $num = $get->num_rows();

        if ($num > 0) {
            foreach ($get->result() as $value) {
                $transfer = ($value->transfer === null) ? 0 : $value->transfer;
                $total    = $transfer;

                $result[$value->customer][] = [
                    'customer'          => $value->customer,
                    'tanggal_pembelian' => $value->tgl_penyewa,
                    'jam_pembelian'     => $value->tgl_penyewa,
                    'total_pembelian'   => $value->harga,
                    'total_bayar'       => ($total == 0) ? 0 : $total,
                ];
            }
        } else {
            $result["Data Kosong!"][] = [
                'customer'          => 'Data Kosong!',
                'tanggal_pembelian' => 'Data Kosong!',
                'jam_pembelian'     => 'Data Kosong!',
                'total_pembelian'   => 0,
                'total_bayar'       => 0,
            ];
        }
        $data = [
            'halaman' => 'Laporan Pembelian Bulanan',
            'laporan' => $result
        ];
        // untuk load view
        $this->load->view('admin/laporan_p_bulanan/table', $data);
    }

    // untuk export laporan pembelian produk bulanan
    public function l_pembelian_bulanan_export()
    {
        $post = $this->input->get(NULL, TRUE);

        $get = $this->m_penyewa->getReportPembelianBulanan(base64url_decode($post['bulan']), date('Y'));
        $num = $get->num_rows();

        if ($num > 0) {
            foreach ($get->result() as $value) {
                $transfer = ($value->transfer === null) ? 0 : $value->transfer;
                $total    = $transfer;

                $result[$value->customer][] = [
                    'customer'          => $value->customer,
                    'tanggal_pembelian' => $value->tgl_penyewa,
                    'jam_pembelian'     => $value->tgl_penyewa,
                    'total_pembelian'   => $value->harga,
                    'total_bayar'       => ($total == 0) ? 0 : $total,
                ];
            }
        } else {
            $result["Data Kosong!"][] = [
                'customer'          => 'Data Kosong!',
                'tanggal_pembelian' => 'Data Kosong!',
                'jam_pembelian'     => 'Data Kosong!',
                'total_pembelian'   => 0,
                'total_bayar'       => 0,
            ];
        }
        $data = [
            'laporan' => $result
        ];
        // untuk load view
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->cetakPdf('laporan_pembelian_bulanan', 'admin/laporan_p_bulanan/print', $data);
    }

    // untuk laporan pembelian produk tahunan
    public function l_pembelian_tahunan()
    {
        $tahun = date('Y');
        for ($i = $tahun; $i >= 2019; $i--) {
            $rTahun[] = $i;
        }

        $data = [
            'halaman' => 'Laporan Pembelian Tahunan',
            'tahun'   => $rTahun,
            'content' => 'admin/laporan_p_tahunan/view',
            'css'     => '',
            'js'      => 'admin/laporan_p_tahunan/js/view'
        ];
        // untuk load view
        $this->load->view('admin/base', $data);
    }

    // untuk lihat laporan pembelian produk tahunan
    public function l_pembelian_tahunan_show()
    {
        $post = $this->input->post(NULL, TRUE);

        $get = $this->m_penyewa->getReportPembelianTahunan($post['inptahun']);
        $num = $get->num_rows();

        if ($num > 0) {
            foreach ($get->result() as $value) {
                $transfer = ($value->transfer === null) ? 0 : $value->transfer;
                $total    = $transfer;

                $result[$value->customer][] = [
                    'customer'          => $value->customer,
                    'tanggal_pembelian' => $value->tgl_penyewa,
                    'jam_pembelian'     => $value->tgl_penyewa,
                    'total_pembelian'   => $value->harga,
                    'total_bayar'       => ($total == 0) ? 0 : $total,
                ];
            }
        } else {
            $result["Data Kosong!"][] = [
                'customer'          => 'Data Kosong!',
                'tanggal_pembelian' => 'Data Kosong!',
                'jam_pembelian'     => 'Data Kosong!',
                'total_pembelian'   => 0,
                'total_bayar'       => 0,
            ];
        }
        $data = [
            'halaman' => 'Laporan Pembelian Tahunan',
            'laporan' => $result
        ];
        // untuk load view
        $this->load->view('admin/laporan_p_tahunan/table', $data);
    }

    // untuk export laporan pembelian produk tahunan
    public function l_pembelian_tahunan_export()
    {
        $post = $this->input->get(NULL, TRUE);

        $get = $this->m_penyewa->getReportPembelianTahunan(base64url_decode($post['tahun']));
        $num = $get->num_rows();

        if ($num > 0) {
            foreach ($get->result() as $value) {
                $transfer = ($value->transfer === null) ? 0 : $value->transfer;
                $total    = $transfer;

                $result[$value->customer][] = [
                    'customer'          => $value->customer,
                    'tanggal_pembelian' => $value->tgl_penyewa,
                    'jam_pembelian'     => $value->tgl_penyewa,
                    'total_pembelian'   => $value->harga,
                    'total_bayar'       => ($total == 0) ? 0 : $total,
                ];
            }
        } else {
            $result["Data Kosong!"][] = [
                'customer'          => 'Data Kosong!',
                'tanggal_pembelian' => 'Data Kosong!',
                'jam_pembelian'     => 'Data Kosong!',
                'total_pembelian'   => 0,
                'total_bayar'       => 0,
            ];
        }
        $data = [
            'laporan' => $result
        ];
        // untuk load view
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->cetakPdf('laporan_pembelian_tahunan', 'admin/laporan_p_tahunan/print', $data);
    }

    // untuk laporan pelanggan
    public function l_pelanggan()
    {
        $data = [
            'halaman' => 'Laporan Pelanggan',
            'content' => 'admin/laporan_pelanggan/view',
            'css'     => 'admin/laporan_pelanggan/css/view',
            'js'      => 'admin/laporan_pelanggan/js/view'
        ];
        // untuk load view
        $this->load->view('admin/base', $data);
    }

    // untuk lihat laporan pelanggan by datatable
    public function l_pelanggan_dt()
    {
        return $this->m_pelanggan->getAllDataDt();
    }

    // untuk cetak detail pelanggan
    public function l_pelanggan_cetak()
    {
        $id_users = base64url_decode($this->uri->segment('4'));

        $riwayat = $this->m_riwayat->getAllByUsers($id_users);
        $users   = $this->m_users->getRoleUsers('users', $id_users);

        $results = [];
        foreach ($riwayat->result() as $key => $row) {
            $detail = $this->m_penyewa->getPenyewaDetail($row->id_penyewa);

            $results[] = [
                'tgl_pemesanan' => $row->tgl_penyewa,
                'detail'        => $detail->result()
            ];
        }

        $data = [
            'pelanggan' => $users,
            'laporan'   => $results
        ];
        // untuk load view
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->cetakPdf('laporan_pelanggan', 'admin/laporan_pelanggan/print', $data);
    }
}
