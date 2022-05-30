<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        //is_logged_in();
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/home_header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/home_footer');
    }

    public function about()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/home_header', $data);
        $this->load->view('home/about', $data);
        $this->load->view('templates/home_footer');
    }

    public function room()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['roomlist'] = $this->db->get('room')->result_array();

        $this->load->view('templates/home_header', $data);
        $this->load->view('home/room', $data);
        $this->load->view('templates/home_footer');
    }

    public function contact()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/home_header', $data);
        $this->load->view('home/contact', $data);
        $this->load->view('templates/home_footer');
    }

    public function payment()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/home_header', $data);
        $this->load->view('home/payment', $data);
        $this->load->view('templates/home_footer');
    }

    public function userProfile()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/home_header', $data);
        $this->load->view('home/userprofile', $data);
        $this->load->view('templates/home_footer');
    }

    public function editUser()
    {
        $data['title'] = 'Edit User';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->model('User_model', 'user');

        $data['userlist'] = $this->user->getRole();
        $data['userrole'] = $this->db->get('user_role')->result_array();

        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('name', 'Full Name', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('nohp', 'No HP', 'required');

        if ($this->form_validation->run() == false) {
            redirect('userprofile');
        } else {
            $email = $this->input->post('email');
            $name = $this->input->post('name');
            $gender = $this->input->post('gender');
            $nohp = $this->input->post('nohp');

            // cek gambar upload
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('nama_user', $name);
            $this->db->set('email', $email);
            $this->db->set('jenis_kelamin', $gender);
            $this->db->set('no_hp', $nohp);
            $this->db->where('email', $email);
            $this->db->update('user');

            redirect('home/userprofile');
        }
    }

    public function changeUserPassword($id)
    {
        $this->load->model('User_model', 'user');
        $this->user->updatePasswordUser($id);
    }

    public function hapusUser($id)
    {
        $this->load->model('User_model', 'user');
        $this->user->hapusData($id);
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success"
                role="alert">Your account has been deleted!</div>');
        redirect('auth');
    }
}
