<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if (!isset($this->session->user_email) && ($this->session->user_status != 1)) {

            redirect('admin-login');
        }
    }


    public function show_dashboard()
    {
        $this->load->view('admin/admin_dashboard');
    }


}