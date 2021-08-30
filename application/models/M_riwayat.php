<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_riwayat extends CI_Model
{
    public function getAllByUsers($id_users)
    {
        $result = $this->db->query("SELECT tp.id_penyewa, tp.id_rumah, tp.id_users, DATE_FORMAT( tp.tgl_penyewa, '%d-%m-%Y' ) AS tgl_penyewa, DATE_FORMAT( tp.tgl_penyewa, '%H:%i:%s' ) AS jam_penyewa, tp.metode_pembayaran, tp.status_pembayaran, tp.status_lihat, r.nama, r.harga, r.gambar, r.keterangan, r.alamat, r.latitude, r.longitude, j.nama AS jenis, k.nama AS kategori FROM tb_penyewa AS tp LEFT JOIN tb_rumah AS r ON tp.id_rumah = r.id_rumah LEFT JOIN tb_jenis AS j ON r.id_jenis = j.id_jenis LEFT JOIN tb_kategori AS k ON r.id_kategori = k.id_kategori LEFT JOIN tb_users AS tu ON tp.id_users = tu.id_users WHERE tp.id_users = '$id_users'");
        return $result;
    }
}
