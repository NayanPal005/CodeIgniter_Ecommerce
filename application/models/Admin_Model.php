<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Model extends CI_Model{


    public function get_user_details($userEmail){
      $userDetail=  $this->db->select('*')
            ->from('user')
            ->where('user_email',$userEmail)
            ->get()
            ->row();

      return $userDetail;

    }

    public function admin_registration(){

            $data['user_name']=$this->input->post('name');

            $data['user_email']=$this->input->post('email');

            $password=$this->input->post('psw');

            $encrypted_password=password_hash($password,PASSWORD_DEFAULT);

            $data['user_password']=$encrypted_password;

            $this->db->insert('user',$data);





    }


}