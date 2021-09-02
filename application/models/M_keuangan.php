  
<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_keuangan extends CI_Model
{
    public function getAll()
    {
        $result = $this->db->query("SELECT k.id_keuangan, k.nama FROM tb_keuangan AS k")->result();
        return $result;
    }

    public function getAllDataDt()
    {
        $this->datatables->select('k.id_keuangan, k.nama');
        $this->datatables->order_by('k.ins', 'desc');
        $this->datatables->from('tb_keuangan AS k');
        return print_r($this->datatables->generate());
    }
}
