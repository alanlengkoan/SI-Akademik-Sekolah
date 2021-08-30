<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_rumah extends CI_Model
{
    public function getAll()
    {
        $result = $this->db->query("SELECT r.id_rumah, r.nama, r.harga, r.gambar, r.keterangan, r.alamat, r.latitude, r.longitude, j.nama AS jenis, k.nama AS kategori FROM tb_rumah AS r LEFT JOIN tb_jenis AS j ON r.id_jenis = j.id_jenis LEFT JOIN tb_kategori AS k ON r.id_kategori = k.id_kategori")->result();
        return $result;
    }

    public function getDetail($id_rumah)
    {
        $result = $this->db->query("SELECT r.id_rumah, r.id_jenis, r.id_kategori, r.nama, r.harga, r.gambar, r.keterangan, r.alamat, r.latitude, r.longitude, j.nama AS jenis, k.nama AS kategori FROM tb_rumah AS r LEFT JOIN tb_jenis AS j ON r.id_jenis = j.id_jenis LEFT JOIN tb_kategori AS k ON r.id_kategori = k.id_kategori WHERE r.id_rumah = '$id_rumah'")->row();
        return $result;
    }

    public function getAllDataDt()
    {
        $this->datatables->select('r.id_rumah, r.nama, r.harga, r.gambar, r.keterangan, r.alamat, r.latitude, r.longitude, j.nama AS jenis, k.nama AS kategori');
        $this->datatables->from('tb_rumah AS r');
        $this->datatables->join('tb_jenis AS j', 'r.id_jenis = j.id_jenis', 'left');
        $this->datatables->join('tb_kategori AS k', 'r.id_kategori = k.id_kategori', 'left');
        return print_r($this->datatables->generate());
    }
}
