<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function index(){

        $this->load->view('admin/admin_login');
    }
    public function checkadminLogin(){

       $userEmail= $this->input->post('user_email',TRUE);

       $userPassword= $this->input->post('user_password',TRUE);

       $this->load->model('admin_model');

      $userDetail= $this->admin_model->get_user_details($userEmail);

      if ($userPassword==$userDetail->user_password){
          $this->load->view('admin/admin_Dashboard');
      }
      else{
         //redirect('admin');
          $data['error_message']="Incorrect Email or Password.Please Try again";
          $this->load->view('admin/admin_login',$data);

      }
      /*
      echo '<pre>';
      print_r($userDetail);
      exit();
*/



    }
    public function addCategory(){

          $this->load->view('admin/add_category');



    }



}

