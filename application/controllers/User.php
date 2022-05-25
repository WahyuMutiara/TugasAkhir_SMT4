<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
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

    //public function edit($id)
    //{
    // $data['title'] = 'Edit User';
    // $data['user'] = $this->db->get_where('user', ['email' =>
    // $this->session->userdata('email')])->row_array();
    // $this->load->model('User_model');
    // $data['user'] = $this->User_model->getUserById($id);
    // $this->load->model('User_model', 'user');

    // $data['userlist'] = $this->user->getRole();
    // $data['userrole'] = $this->db->get('user_role')->result_array();

    // $this->form_validation->set_rules('email', 'Email', 'required');
    // $this->form_validation->set_rules('name', 'Full Name', 'required');
    // $this->form_validation->set_rules('gender', 'Gender', 'required');
    // $this->form_validation->set_rules('nohp', 'No HP', 'required');

    // if ($this->form_validation->run() == false) {
    //     $this->load->view('templates/admin_header', $data);
    //     $this->load->view('templates/admin_sidebar', $data);
    //     $this->load->view('templates/admin_topbar', $data);
    //     $this->load->view('admin/useredit', $data);
    //     $this->load->view('templates/admin_footer');
    // } else {
    //     $id = $this->input->post('id');
    //     $email = $this->input->post('email');
    //     $name = $this->input->post('name');
    //     $gender = $this->input->post('gender');
    //     $nohp = $this->input->post('nohp');
    //     $role = $this->input->post('role_id');

    //     $this->db->set('nama_user', $name);
    //     $this->db->set('email', $email);
    //     $this->db->set('jenis_kelamin', $gender);
    //     $this->db->set('no_hp', $nohp);
    //     $this->db->set('role_id', $role);
    //     $this->db->where('id', $id);
    //     $this->db->update('user');

    //     $this->session->set_flashdata('message', '<div class="alert alert-success"
    //     role="alert">Your profile has been edited!</div>');
    //     redirect('user');
    // }
    //}

    public function formEdit($id)
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
        $this->user->updateData();
        redirect('user');
    }

    public function hapus($id)
    {
        $this->load->model('User_model', 'user');
        $this->user->hapusData($id);
        redirect('user');
    }
}
