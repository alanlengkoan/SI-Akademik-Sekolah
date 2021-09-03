  
<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_kuisioner extends CI_Model
{
    public function getAllDataDt()
    {
        $this->datatables->select('k.id_kuisioner, k.nama, ( SELECT COUNT(*) FROM tb_kuisioner_soal AS ks WHERE ks.id_kuisioner = k.id_kuisioner ) AS jumlah');
        $this->datatables->order_by('k.ins', 'desc');
        $this->datatables->from('tb_kuisioner AS k');
        return print_r($this->datatables->generate());
    }

    public function getAll()
    {
        $result = $this->db->query("SELECT k.id_kuisioner, k.nama FROM tb_kuisioner AS k")->result();
        return $result;
    }

    public function getDetail($id_kuisioner)
    {
        $result = $this->db->query("SELECT k.id_kuisioner, k.nama FROM tb_kuisioner AS k WHERE k.id_kuisioner = '$id_kuisioner'")->row();
        return $result;
    }

    public function getAllDataKuisionerSoalDt($id_kuisioner)
    {
        $this->datatables->select('ks.id_kuisioner_soal, ks.id_kuisioner, ks.soal, ks.pil_a, ks.pil_b, ks.pil_c, ks.pil_d, ks.pil_e');
        $this->datatables->where('ks.id_kuisioner', $id_kuisioner);
        $this->datatables->from('tb_kuisioner_soal AS ks');
        return print_r($this->datatables->generate());
    }
}
