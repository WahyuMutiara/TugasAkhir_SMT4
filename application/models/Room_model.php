<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Room_model extends CI_Model
{
    public function getRoomById($id)
    {
        return $this->db->get_where('room', ['id' => $id])->row_array();
    }

    // public function getIdPemesanan()
    // {
    //     $query = "SELECT `pembayaran`.*,`pemesanan`.`id`
    //               FROM `pembayaran` JOIN `pemesanan`
    //               ON `pembayaran`.`id_pemesanan` = `pemesanan`.`id`
    //               ";
    //     return $this->db->query($query)->result_array();
    // }

    public function updateKamar()
    {
        $namakamar = $this->input->post('namakamar');
        $fasilitas = $this->input->post('fasilitas');
        $sisakamar = $this->input->post('sisakamar');
        $harga = $this->input->post('harga');

        // cek gambar upload
        $upload_image = $_FILES['image']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'jpg|png|webp';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/img/kamar/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                $new_image = $this->upload->data('file_name');
                $this->db->set('gambar', $new_image);
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
        $this->db->set('nama_kamar', $namakamar);
        $this->db->set('fasilitas', $fasilitas);
        $this->db->set('sisa_kamar', $sisakamar);
        $this->db->set('harga', $harga);
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('room');
    }

    public function hapusData($id)
    {
        $this->db->delete('room', ['id' => $id]);
    }
}
