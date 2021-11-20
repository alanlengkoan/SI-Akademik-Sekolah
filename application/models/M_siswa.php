<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_siswa extends CI_Model
{
    public function getAll()
    {
        $result = $this->db->query("SELECT s.id_siswa, s.nis, u.nama, s.tmp_lahir, s.tgl_lahir, s.ortu_wali, s.kelamin, s.alamat, s.status, a.nama AS agama FROM tb_siswa AS s LEFT JOIN tb_agama AS a ON s.id_agama = a.id_agama LEFT JOIN tb_users AS u ON s.id_users = u.id_users ORDER BY s.ins");
        return $result;
    }

    public function getAllSiswaStatus($status)
    {
        $result = $this->db->query("SELECT s.id_siswa, s.nis, u.nama, s.tmp_lahir, s.tgl_lahir, s.ortu_wali, s.kelamin, s.alamat, s.status, a.nama AS agama FROM tb_siswa AS s LEFT JOIN tb_agama AS a ON s.id_agama = a.id_agama LEFT JOIN tb_users AS u ON s.id_users = u.id_users WHERE s.STATUS = '$status' ORDER BY s.ins")->result();
        return $result;
    }

    public function getSiswa($id_users)
    {
        $result = $this->db->query("SELECT tu.id_users, tu.nama, tu.email, ts.id_siswa, ts.nis, ts.tmp_lahir, ts.tgl_lahir, ts.ortu_wali, ts.kelamin, ts.alamat, ts.thn_lulus, ts.`status`, ts.id_agama FROM tb_users AS tu LEFT JOIN tb_siswa AS ts ON tu.id_users = ts.id_users WHERE tu.id_users = '$id_users'")->row();
        return $result;
    }

    public function getAllDataDt($status)
    {
        $this->datatables->select('s.id_siswa, s.nis, u.id_users, u.nama, s.tmp_lahir, s.tgl_lahir, s.ortu_wali, s.kelamin, s.alamat, s.status, a.nama AS agama');
        $this->datatables->join('tb_agama AS a', 's.id_agama = a.id_agama', 'left');
        $this->datatables->join('tb_users AS u', 's.id_users = u.id_users', 'left');
        $this->datatables->where('s.status', $status);
        $this->datatables->order_by('s.ins', 'desc');
        $this->datatables->from('tb_siswa AS s');
        return print_r($this->datatables->generate());
    }
}
