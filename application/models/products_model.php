<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products_model extends CI_Model{

    public function add_category_model()
    {
        /* $data er vitorer quotation ta table er fiels name */
        $data['category_name'] = $this->input->post('category_name', TRUE);
        $data['category_long_description'] = $this->input->post('category_long_description', TRUE);
        $data['category_short_description'] = $this->input->post('category_short_description', TRUE);
        $data['category_status'] = 1;

        $this->db->insert('tbl_category', $data);

    }
    public function get_category_details(){

        $categoryDetails=$this->db->select('*')
                           ->from('tbl_category')
                           ->get();

        return $categoryDetails->result_array();



//
        //echo '<pre>';
      // print_r($categoryDetails);
    }
    /*
    public function get_category_details(){


        $categoryDetails=$this->db->select('*')
            ->from('tbl_category')
            ->get();

        return $categoryDetails;


    }

*/
    public function change_category_status($status,$categoryDetailsID){

     $data['category_status']=$status;
     $this->db->where('category_id',$categoryDetailsID)
               ->update('tbl_category',$data);


    }



}