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

    public function getDataPemesanan()
    {
        $query = "SELECT `pemesanan`.*,`user`.`nama_user`,`room`.`nama_kamar`
                  FROM `pemesanan` JOIN `user` ON  `pemesanan`.`id_user` = `user`.`id`
                  JOIN `room` ON `pemesanan`.`id_room` = `room`.`id`
                ";
        return $this->db->query($query)->result_array();
    }

    public function getDataPembayaran()
    {
        $query = "SELECT `pembayaran`.*,`pemesanan`.`id`,`pemesanan`.`id_user`,`user`.`nama_user` 
                  FROM `pembayaran` JOIN `pemesanan` ON `pembayaran`.`id_pemesanan` = `pemesanan`.`id`
                  ";
        return $this->db->query($query)->result_array();
    }

    // public function getDataPembayaran()
    // {
    //     $this->db->get('room')->result_array();
    //     $query = "SELECT `pemesanan`.*, `room`.`nama_kamar` 
    //               FROM `pemesanan` JOIN `room` 
    //               ON `pemesanan`.`id_room` = `room`.`id`";
    //     return $this->db->query($query)->result_array();
    // }

    // public function getNamaKamar()
    // {

    //     return $this->db->query($query)->result_array();
    // }

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

    public function updatePasswordUser()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $curent_password = $this->input->post('current_password');
        $new_password = $this->input->post('new_password1');
        if (!password_verify($curent_password, $data['user']['password'])) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger"
                role="alert">Wrong curent Password!</div>');
            redirect('userprofile');
        } else {
            if ($curent_password == $new_password) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger"
                role="alert">New password cannot be the same as curent password!</div>');
                redirect('userprofile');
            } else {
                //password ok
                $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                $this->db->set('password', $password_hash);
                $this->db->where('email', $this->session->userdata('email'));
                $this->db->update('user');

                $this->session->set_flashdata('message', '<div class="alert alert-success"
                role="alert">Password changed!</div>');
                redirect('home/userprofile');
            }
        }
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
