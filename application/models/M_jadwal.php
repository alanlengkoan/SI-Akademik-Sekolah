  
<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_jadwal extends CI_Model
{
    public function getAll()
    {
        $result = $this->db->query("SELECT j.id_jadwal, j.nama FROM tb_jadwal AS j")->result();
        return $result;
    }

    public function getAllDataDt()
    {
        $this->datatables->select('j.id_jadwal, j.nama');
        $this->datatables->order_by('j.ins', 'desc');
        $this->datatables->from('tb_jadwal AS j');
        return print_r($this->datatables->generate());
    }
}
