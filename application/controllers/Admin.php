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

    public function admin_registration_form(){

        $data=array();

        $data['form']=$this->load->view('pages/adminRegi_form','',true);

       // print_r($data);

       // $this->load->view('admin/admin_dashboard',$data);

        $this->load->view('admin/adminRegi_formDash',$data);


    }
    public function form(){
        $this->load->view('admin/form');
    }
    public function form_test(){
       // $this->load->view('admin/form');
        $data=array();
        $data['form_test']=$this->load->view('pages/form_test','',True);

        $this->load->view('admin/admin_dashboard',$data);




    }



}