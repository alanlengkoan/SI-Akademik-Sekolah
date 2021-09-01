<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_siswa extends CI_Model
{
    public function getAll()
    {
        $result = $this->db->query("")->result();
        return $result;
    }

    public function getAllDataDt($status)
    {
        $this->datatables->select('s.id_siswa, s.nis, s.nama, s.tmp_lahir, s.tgl_lahir, s.ortu_wali, s.kelamin, s.alamat, s.status, a.nama AS agama');
        $this->datatables->join('tb_agama AS a', 's.id_agama = a.id_agama', 'left');
        $this->datatables->where('s.status', $status);
        $this->datatables->order_by('s.ins', 'desc');
        $this->datatables->from('tb_siswa AS s');
        return print_r($this->datatables->generate());
    }
}
