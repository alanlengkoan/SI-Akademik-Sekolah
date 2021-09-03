  
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

    public function getAllKeuanganDt($status)
    {
        $this->datatables->select('kr.id_keuangan_rincian, kr.id_keuangan, kr.keterangan, kr.tanggal, kr.debit, kr.kredit, kr.status_u, k.nama AS keuangan ');
        $this->datatables->join('tb_keuangan AS k', 'kr.id_keuangan = k.id_keuangan', 'left');
        $this->datatables->where('kr.status_u', $status);
        $this->datatables->from('tb_keuangan_rincian AS kr');
        return print_r($this->datatables->generate());
    }
}
