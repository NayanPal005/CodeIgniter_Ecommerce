<?php


defined('BASEPATH') OR exit('No direct script access allowed');


class Manufacturers_model extends CI_Model{
    public function __construct()

    {
        parent::__construct();

    }


    public function save_manufacturer_model(){

        $data['manufacturer_name']= $this->input->post('manufacturer_name');

        $data['manufacturer_short_description']= $this->input->post('manufacturer_short_description');

        $data['manufacturer_long_description']=  $this->input->post('manufacturer_long_description');

        $this->db->insert('tbl_manufacturer',$data);
    }
    public function get_manufacturer_model(){
       $result= $this->db->select('*')
             ->from('tbl_manufacturer')
            ->get();
        return $result->result();
    }


    public function edit_manufacturer_model($manufacturerId){

       $manufacturerDetailsbyId= $this->db->select('*')

            ->from('tbl_manufacturer')

            ->where('manufacturer_id',$manufacturerId)

            ->get();

       return $manufacturerDetailsbyId->row();

    }
  public function  update_manufacturer($grabbedID, Array $updateDetails){

        $updateDetailsResult=$this->db

                             ->where('manufacturer_id',$grabbedID)

                             ->update('tbl_manufacturer',$updateDetails);

        return $updateDetailsResult;

        redirect('manufacturer-show');


  }
  public function delete_manufacturer_model($grabbedID){

      //echo $grabbedID;

      $result=$this->db
               ->where('manufacturer_id',$grabbedID)
               ->delete('tbl_manufacturer');

      return $result;


  }




}