<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_fasilitas extends CI_Model
{
    public function getAll()
    {
        $result = $this->db->query("SELECT f.id_fasilitas, f.id_rumah, f.nama, f.gambar FROM tb_fasilitas AS f ORDER BY k.ins DESC")->result();
        return $result;
    }

    public function getFasilitasDetail($id_rumah)
    {
        $result = $this->db->query("SELECT f.id_fasilitas, f.id_rumah, f.nama, f.gambar FROM tb_fasilitas AS f WHERE f.id_rumah = '$id_rumah'");
        return $result;
    }

    public function getAllDataDt($id_rumah)
    {
        $this->datatables->select('f.id_fasilitas, f.id_rumah, f.nama, f.gambar');
        $this->datatables->where('id_rumah', $id_rumah);
        $this->datatables->from('tb_fasilitas AS f');
        return print_r($this->datatables->generate());
    }
}
