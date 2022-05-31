<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // if (!$this->session->userdata('email')) {
        //     redirect('auth');
        // }
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Admin Profile';
        $data['titlebar'] = 'HotelKuy Admin';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/admin_footer');
    }

    public function user()
    {
        $data['title'] = 'User List';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->model('User_model', 'user');

        $data['userlist'] = $this->user->getRole();
        $data['userrole'] = $this->db->get('user_role')->result_array();

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('nohp', 'NoHP', 'required');
        $this->form_validation->set_rules('role_id', 'Role', 'required');
        $this->form_validation->set_rules('password1', 'password', 'required|min_length[5]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/admin_header', $data);
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('templates/admin_topbar', $data);
            $this->load->view('admin/userlist', $data);
            $this->load->view('templates/admin_footer');
        } else {
            $this->db->insert('user', [
                'email' => htmlspecialchars($this->input->post('email')),
                'nama_user' => htmlspecialchars($this->input->post('name')),
                'jenis_kelamin' => $this->input->post('gender'),
                'no_hp' => $this->input->post('nohp'),
                'password' => password_hash(
                    $this->input->post('password1'),
                    PASSWORD_DEFAULT
                ),
                'image' => "default.jpg",
                'role_id' => $this->input->post('role_id'),
                'is_active' => 1,
                'date_created' => time()
            ]);

            $this->session->set_flashdata('message', '<div class="alert alert-success"
                role="alert">This user successfully been added</div>');
            redirect('user');
        }
    }

    public function formEditUser($id)
    {
        $data['title'] = 'Edit User';
        // $data['user'] = $this->db->get_where('user', ['email' =>
        // $this->session->userdata('email')])->row_array();
        $this->load->model('User_model', 'user');
        $data['user'] = $this->user->getUserById($id);
        $data['userrole'] = $this->db->get('user_role')->result_array();


        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('admin/useredit', $data);
        $this->load->view('templates/admin_footer');

        //$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your profile has been edited!</div>');
    }

    public function ubahUser()
    {
        $this->load->model('User_model', 'user');
        $this->user->updateUserAdmin();
        redirect('admin/user');
    }

    public function hapusUser($id)
    {
        $this->load->model('User_model', 'user');
        $this->user->hapusData($id);
        redirect('admin/user');
    }

    public function room()
    {
        $data['title'] = 'Room List';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['roomlist'] = $this->db->get('room')->result_array();

        $this->form_validation->set_rules('nama_kamar', 'Nama Kamar', 'required');
        $this->form_validation->set_rules('fasilitas', 'Fasilitas', 'required');
        $this->form_validation->set_rules('sisa_kamar', 'Sisa Kamar', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
        //$this->form_validation->set_rules('gambar', 'Gambar', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/admin_header', $data);
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('templates/admin_topbar', $data);
            $this->load->view('admin/roomlist', $data);
            $this->load->view('templates/admin_footer');
        } else {
            $this->db->insert('room', [
                'nama_kamar' => $this->input->post('nama_kamar'),
                'fasilitas' => $this->input->post('fasilitas'),
                'sisa_kamar' => $this->input->post('sisa_kamar'),
                'harga' => $this->input->post('harga'),
                'gambar' => "room.jpg"
            ]);

            // $upload_image = $_FILES['image']['name'];
            // if ($upload_image) {
            //     $config['allowed_types'] = 'jpg|png';
            //     $config['max_size'] = '2048';
            //     $config['upload_path'] = './assets/img/kamar/';

            //     $this->load->library('upload', $config);

            //     if ($this->upload->do_upload('image')) {
            //         $new_image = $this->upload->data('file_name');
            //         $this->db->insert('room', 'image', $new_image);
            //     } else {
            //         echo $this->upload->display_errors();
            //     }
            // }
            $this->session->set_flashdata('message', '<div class="alert alert-success"
                role="alert">This room successfully been added</div>');
            redirect('admin/room');
        }
    }

    public function formEditKamar($id)
    {
        $data['title'] = 'Edit Kamar';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->model('Room_model', 'room');
        $data['room'] = $this->room->getRoomById($id);
        $data['roomlist'] = $this->db->get('room')->result_array();


        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('admin/roomedit', $data);
        $this->load->view('templates/admin_footer');

        //$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your profile has been edited!</div>');
    }

    public function ubahKamar()
    {
        $this->load->model('Room_model', 'room');
        $this->room->updateKamar();
        redirect('admin/room');
    }

    public function hapusKamar($id)
    {
        $this->load->model('Room_model', 'room');
        $this->room->hapusData($id);
        redirect('admin/room');
    }

    public function booking()
    {
        $data['title'] = 'Booking';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['booklist'] = $this->db->get('pemesanan')->result_array();
        $this->load->model('User_model', 'user');
        $data['booklist'] = $this->user->getDataPemesanan();

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('admin/booking', $data);
        $this->load->view('templates/admin_footer');
    }

    public function payment()
    {
        $data['title'] = 'Payment';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['paylist'] = $this->db->get('pembayaran')->result_array();
        $this->load->model('User_model', 'user');
        // $data['paylist'] = $this->user->getDataPembayaran();

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('admin/payment', $data);
        $this->load->view('templates/admin_footer');
    }
}
