<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserProfile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/home_header', $data);
        $this->load->view('home/userprofile', $data);
        $this->load->view('templates/home_footer');
    }
}
