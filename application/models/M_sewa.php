<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_sewa extends CI_Model
{
    public function getCheckSewa($id_users)
    {
        $result = $this->db->query("SELECT * FROM tb_sewa AS s WHERE s.id_users = '$id_users' AND s.status = '0'");
        return $result;
    }

    public function getBookingCustomerSewa($id_users)
    {
        $result = $this->db->query("SELECT s.id_sewa, s.`status`, r.id_rumah, r.nama, r.harga, r.gambar, r.keterangan, r.alamat, r.latitude, r.longitude, j.nama AS jenis, k.nama AS kategori FROM tb_sewa AS s LEFT JOIN tb_rumah AS r ON s.id_rumah = r.id_rumah LEFT JOIN tb_jenis AS j ON r.id_jenis = j.id_jenis LEFT JOIN tb_kategori AS k ON r.id_kategori = k.id_kategori WHERE s.id_users = '$id_users'");
        return $result;
    }
}
