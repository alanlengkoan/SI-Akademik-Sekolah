<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_pelanggan extends CI_Model
{
    public function getAll()
    {
        $result = $this->db->query("")->result();
        return $result;
    }

    public function getAllDataDt()
    {
        $this->datatables->select('tu.id, tu.id_users, tu.nama, tu.email, tp.kelamin, tp.telepon, tp.alamat');
        $this->datatables->from('tb_users AS tu');
        $this->datatables->join('tb_pelanggan AS tp', 'tu.id_users = tp.id_users', 'left');
        $this->datatables->where('tu.roles', 'users');
        return print_r($this->datatables->generate());
    }
}