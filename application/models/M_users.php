<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_users extends CI_Model
{
    public function getRoleUsers($role, $id_users)
    {
        $result = $this->db->query("SELECT tu.id_users, tu.nama, tu.email, tu.roles, tu.foto, tu.username, tp.kelamin, tp.telepon, tp.alamat FROM tb_users AS tu LEFT JOIN tb_pelanggan AS tp ON tu.id_users = tp.id_users  WHERE tu.roles = '$role' AND tu.id_users = '$id_users'")->row();
        return $result;
    }
}