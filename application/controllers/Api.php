<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Api extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function users_get()
    {
        // $users = $this->db->get('user')->result_array();

        // $id = $this->get->('id');
        // if($id == ''){
        // }
    }
}
