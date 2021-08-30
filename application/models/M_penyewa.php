<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_penyewa extends CI_Model
{
    public function getAll()
    {
        $result = $this->db->query("")->result();
        return $result;
    }

    public function getAllDataDt()
    {
        $this->datatables->select('tp.id_penyewa, tp.id_rumah, tp.id_users, DATE_FORMAT( tp.tgl_penyewa, "%d-%m-%Y" ) AS tgl_penyewa, DATE_FORMAT( tp.tgl_penyewa, "%H:%i:%s" ) AS jam_penyewa, tp.metode_pembayaran, tp.status_pembayaran, tp.status_lihat, r.nama, r.harga, r.gambar, r.keterangan, r.alamat, r.latitude, r.longitude, j.nama AS jenis, k.nama AS kategori');
        $this->datatables->from('tb_penyewa AS tp');
        $this->datatables->join('tb_rumah AS r', 'tp.id_rumah = r.id_rumah', 'left');
        $this->datatables->join('tb_jenis AS j', 'r.id_jenis = j.id_jenis', 'left');
        $this->datatables->join('tb_kategori AS k', 'r.id_kategori = k.id_kategori', 'left');
        $this->datatables->join('tb_users AS tu', 'tp.id_users = tu.id_users', 'left');
        return print_r($this->datatables->generate());
    }

    public function getPenyewaDetail($id_penyewa)
    {
        $result = $this->db->query("SELECT tp.id_penyewa, tp.id_rumah, tp.id_users, tp.metode_pembayaran, DATE_FORMAT( tp.tgl_penyewa, '%d-%m-%Y' ) AS tgl_penyewa, DATE_FORMAT( tp.tgl_penyewa, '%H:%i:%s' ) AS jam_penyewa, tp.status_pembayaran, tp.status_lihat, tr.nama, tr.harga, tr.gambar, tr.keterangan, tr.alamat, tr.latitude, tr.longitude, tj.nama AS jenis, tk.nama AS kategori FROM tb_penyewa AS tp LEFT JOIN tb_rumah AS tr ON tp.id_rumah = tr.id_rumah LEFT JOIN tb_jenis AS tj ON tr.id_jenis = tj.id_jenis LEFT JOIN tb_kategori AS tk ON tr.id_kategori = tk.id_kategori WHERE tp.id_penyewa = '$id_penyewa'");
        return $result;
    }

    // untuk mengambil data pembelian laporan
    public function getReportPembelian($tgl_awal, $tgl_akhir)
    {
        $result = $this->db->query("SELECT tp.id_penyewa, tp.id_rumah, tp.id_users, tu.nama AS customer, DATE_FORMAT( tp.tgl_penyewa, '%d-%m-%Y' ) AS tgl_penyewa, DATE_FORMAT( tp.tgl_penyewa, '%H:%i:%s' ) AS jam_penyewa, tp.metode_pembayaran, tp.status_pembayaran, tp.status_lihat, r.nama, r.harga, r.gambar, r.keterangan, r.alamat, r.latitude, r.longitude, j.nama AS jenis, k.nama AS kategori, ( SELECT SUM( pe.jumlah_transfer ) FROM tb_transfer AS pe WHERE pe.id_penyewa = tp.id_penyewa ) AS transfer FROM tb_penyewa AS tp LEFT JOIN tb_rumah AS r ON tp.id_rumah = r.id_rumah LEFT JOIN tb_jenis AS j ON r.id_jenis = j.id_jenis LEFT JOIN tb_kategori AS k ON r.id_kategori = k.id_kategori LEFT JOIN tb_users AS tu ON tp.id_users = tu.id_users WHERE tp.tgl_penyewa BETWEEN '$tgl_awal' AND '$tgl_akhir'");
        return $result;
    }

    // untuk mengambil data pembelian laporan
    public function getReportPembelianBulanan($bulan, $tahun)
    {
        $result = $this->db->query("SELECT tp.id_penyewa, tp.id_rumah, tp.id_users, tu.nama AS customer, DATE_FORMAT( tp.tgl_penyewa, '%d-%m-%Y' ) AS tgl_penyewa, DATE_FORMAT( tp.tgl_penyewa, '%H:%i:%s' ) AS jam_penyewa, tp.metode_pembayaran, tp.status_pembayaran, tp.status_lihat, r.nama, r.harga, r.gambar, r.keterangan, r.alamat, r.latitude, r.longitude, j.nama AS jenis, k.nama AS kategori, ( SELECT SUM( pe.jumlah_transfer ) FROM tb_transfer AS pe WHERE pe.id_penyewa = tp.id_penyewa ) AS transfer FROM tb_penyewa AS tp LEFT JOIN tb_rumah AS r ON tp.id_rumah = r.id_rumah LEFT JOIN tb_jenis AS j ON r.id_jenis = j.id_jenis LEFT JOIN tb_kategori AS k ON r.id_kategori = k.id_kategori LEFT JOIN tb_users AS tu ON tp.id_users = tu.id_users WHERE MONTH ( tp.tgl_penyewa ) = '$bulan' AND YEAR ( tp.tgl_penyewa ) = '$tahun'");
        return $result;
    }

    // untuk mengambil data pembelian laporan
    public function getReportPembelianTahunan($tahun)
    {
        $result = $this->db->query("SELECT tp.id_penyewa, tp.id_rumah, tp.id_users, tu.nama AS customer, DATE_FORMAT( tp.tgl_penyewa, '%d-%m-%Y' ) AS tgl_penyewa, DATE_FORMAT( tp.tgl_penyewa, '%H:%i:%s' ) AS jam_penyewa, tp.metode_pembayaran, tp.status_pembayaran, tp.status_lihat, r.nama, r.harga, r.gambar, r.keterangan, r.alamat, r.latitude, r.longitude, j.nama AS jenis, k.nama AS kategori, ( SELECT SUM( pe.jumlah_transfer ) FROM tb_transfer AS pe WHERE pe.id_penyewa = tp.id_penyewa ) AS transfer FROM tb_penyewa AS tp LEFT JOIN tb_rumah AS r ON tp.id_rumah = r.id_rumah LEFT JOIN tb_jenis AS j ON r.id_jenis = j.id_jenis LEFT JOIN tb_kategori AS k ON r.id_kategori = k.id_kategori LEFT JOIN tb_users AS tu ON tp.id_users = tu.id_users WHERE YEAR ( tp.tgl_penyewa ) = '$tahun'");
        return $result;
    }
}
