<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function getRole()
    {
        $query = "SELECT `user`.*,`user_role`.`role`
                  FROM `user` JOIN `user_role`
                  ON `user`.`role_id` = `user_role`.`id`
        ";
        return $this->db->query($query)->result_array();
    }

    public function getUserById($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }

    public function updateData()
    {
        $data = [
            "email" => htmlspecialchars($this->input->post('email')),
            "nama_user" => htmlspecialchars($this->input->post('name')),
            "jenis_kelamin" => $this->input->post('gender'),
            "no_hp" => $this->input->post('nohp'),
            "image" => "default.jpg",
            "role_id" => $this->input->post('role_id'),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user', $data);
    }

    public function hapusData($id)
    {
        $this->db->delete('user', ['id' => $id]);
    }
}
