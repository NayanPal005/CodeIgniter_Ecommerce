<?php


defined('BASEPATH') OR exit('No direct script access allowed');


class Manufacturers_model extends CI_Model{

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


}