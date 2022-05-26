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

    public function updateUserAdmin()
    {
        $email = $this->input->post('email');
        $name = $this->input->post('name');
        $gender = $this->input->post('gender');
        $nohp = $this->input->post('nohp');
        $role = $this->input->post('role_id');

        // cek gambar upload
        $upload_image = $_FILES['image']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'jpg|png';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/img/profile/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                $new_image = $this->upload->data('file_name');
                $this->db->set('image', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }

        // $data = [
        //     "email" => htmlspecialchars($this->input->post('email')),
        //     "nama_user" => htmlspecialchars($this->input->post('name')),
        //     "jenis_kelamin" => $this->input->post('gender'),
        //     "no_hp" => $this->input->post('nohp'),
        //     "image" => "default.jpg",
        //     "role_id" => $this->input->post('role_id'),
        // ];
        $this->db->set('nama_user', $name);
        $this->db->set('email', $email);
        $this->db->set('jenis_kelamin', $gender);
        $this->db->set('no_hp', $nohp);
        $this->db->set('role_id', $role);
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user');
    }

    // public function updateUser()
    // {
    //     $data = [
    //         "email" => htmlspecialchars($this->input->post('email')),
    //         "nama_user" => htmlspecialchars($this->input->post('name')),
    //         "jenis_kelamin" => $this->input->post('gender'),
    //         "no_hp" => $this->input->post('nohp'),
    //         //"image" => $this->input->post('image'),
    //     ];
    //     $this->db->where('id', $this->input->post('id'));
    //     $this->db->update('user', $data);
    // }

    public function hapusData($id)
    {
        $this->db->delete('user', ['id' => $id]);
    }
}
