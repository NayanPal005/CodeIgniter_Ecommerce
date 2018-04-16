<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
    }

    public function index(){
         /*
        if (isset($this->session->user_email)){
            redirect('admin-dashboard');
        }
        else {
            $this->load->view('admin/admin_login');
        }
         */
        $this->load->view('admin/admin_login');

    }
    public function checkAdminLogin(){

       $userEmail= $this->input->post('user_email',TRUE);

       $userPassword= $this->input->post('user_password',TRUE);
    /*
       $encrypted_password=password_hash($userPassword,PASSWORD_DEFAULT);
       //echo '<pre>';
       //print_r($encrypted_password);

    */
       $this->load->model('admin_model');

      $userDetail= $this->admin_model->get_user_details($userEmail);


     // if (password_verify($userPassword,$userDetail->user_password)){
        if (password_verify($userPassword,$userDetail->user_password)){

          if ($userDetail->user_status==1) {

              $session_data['user_email'] = $userDetail->user_email;
              $session_data['user_status'] = $userDetail->user_status;
              $session_data['user_role'] = $userDetail->user_role;
              $this->load->library('session');
              $this->session->set_userdata($session_data);
              $sessionData['myAlldata']=$this->session->all_userdata();
             // echo '<pre>';
             // print_r($sessionData);
            // exit();
             // $this->session->userdata('user_email');
            redirect('admin-dashboard');

          }


      }
      else{
         //redirect('admin');
          $data['error_message']="Incorrect Email or Password.Please Try again";
          $this->load->view('admin/admin_login',$data);

      }

    }
    public function addCategory(){

          $this->load->view('admin/add_category');

    }

    public function logout(){

      // $this->session->unset_userdata('user_status');
        $this->session->sess_destroy();
       // redirect('admin-login');
        redirect('admin-login');

    }



}

