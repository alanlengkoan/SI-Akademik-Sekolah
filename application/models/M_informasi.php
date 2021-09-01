<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_informasi extends CI_Model
{
    public function getAll()
    {
        $result = $this->db->query("SELECT j.id_jabatan, j.nama FROM tb_jabatan AS j")->result();
        return $result;
    }

    public function getAllDataDt()
    {
        $this->datatables->select('i.id_informasi, i.id_kategori, i.judul, i.isi, i.gambar, i.tgl_publish, i.`status`, i.status_galeri, k.nama AS kategori');
        $this->datatables->join('tb_kategori AS k', 'i.id_kategori = k.id_kategori', 'left');
        $this->datatables->from('tb_informasi AS i');
        return print_r($this->datatables->generate());
    }
}
