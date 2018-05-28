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
        $this->load->model('admin_model');
    }


    public function show_dashboard()
    {

        $data=array();

        $data['form_test']=$this->load->view('pages/dashboard_chart','',True);

        $this->load->view('admin/admin_dashboard',$data);

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
    public function admin_registration(){

/*
       echo "Hello Admin";
       $userName=$this->input->post('name');
       $userEmail=$this->input->post('email');
       $userPass=$this->input->post('psw');
       $userConPass=$this->input->post('con_psw');
       echo '<pre>';

       print_r($userEmail);
       print_r($userName);
       print_r($userPass);
       print_r($userConPass);

exit();

*/

        $this->form_validation->set_rules('email','User Email','required|is_unique[user.user_email]'); ////|is_unique[user.user_email]

        $this->form_validation->set_rules('name','User Name','required');

        $this->form_validation->set_rules('psw','Password','required|min_length[6]');

        $this->form_validation->set_rules('con_psw','Confirm Password','required|min_length[6]|matches[psw]');


        if ($this->form_validation->run()){

            $this->load->model('admin_model');

            $this->admin_model->admin_registration();

            $data['message']= "Data Inserted Successfully";

           // $this->load->view('admin/admin_dashboard',$data);

            $data['view_form']=$this->load->view('pages/form_test',$data,True);
            $data['form_test']=$this->load->view('pages/form_test','',True);
            //$ndata['view_form'] = 'pages/form_test';

            $this->load->view('admin/admin_dashboard',$data);



            /*
            $notification['form_test']=$this->load->view('pages/form_test','',True);
            $notification['success']="Data Inserted Successfully";
            $this->load->view('admin/admin_dashboard',$notification);
            */

        }

        else{
           redirect('admin-form_test');

        }


    }
    public function admin_profile(){
        $data=array();

        $data['form_test']=$this->load->view('admin/admin_profile','',True);

        $this->load->view('admin/admin_dashboard',$data);



    }



}