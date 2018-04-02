<?php

class Admin_Model extends CI_Model{

    public function get_user_details($userEmail){
      $userDetail=  $this->db->select('*')
            ->from('user')
            ->where('user_email',$userEmail)
            ->get()
            ->row();

      return $userDetail;

    }


}