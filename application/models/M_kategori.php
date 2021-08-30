<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_kategori extends CI_Model
{
    public function getAll()
    {
        $result = $this->db->query("")->result();
        return $result;
    }

    public function getAllDataDt()
    {
        $this->datatables->select('k.id_kategori, k.nama');
        $this->datatables->order_by('k.ins', 'desc');
        $this->datatables->from('tb_kategori AS k');
        return print_r($this->datatables->generate());
    }
}
