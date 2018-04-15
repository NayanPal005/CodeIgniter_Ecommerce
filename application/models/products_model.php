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
        /*

        $categoryDetails=$this->db->select('*')
                           ->from('tbl_category')
                           ->get();

        return $categoryDetails->result_array();

       */
        $categoryDetails=$this->db->select('*')
            ->from('tbl_category')
            ->get();

        return $categoryDetails->result();


    }

    public function change_category_status($status,$categoryDetailsID){

     $data['category_status']=$status;


     $this->db->where('category_id',$categoryDetailsID)
               ->update('tbl_category',$data);


    }
    public function get_category_details_by_id($categoryDetailsID){

     //  echo $categoryDetailsID;


   $result=$this->db->select('*')
                 ->from('tbl_category')
                 ->where('category_id',$categoryDetailsID)
                 ->get()
                 ->row();
   return $result;


/*
        $result=$this->db->select('*')
            ->from('tbl_category')
            ->where('category_id',$categoryDetailsID)
            ->get()
            ->row_array();
        return $result;

*/


    }
    public function get_all_active_category_info(){

        $result=$this->db->select('*')
            ->from('tbl_category')
            ->where('category_status',1)
            ->get()
            ->result();

        return $result;

    }
    public function save_product_model()
    {

        $data['product_name'] = $this->input->post('product_name', True);
        $data['product_long_description'] = $this->input->post('product_long_description', True);
        $data['product_short_description'] = $this->input->post('product_short_description', True);
        $data['product_category'] = $this->input->post('product_category', True);
        $data['product_quantity'] = $this->input->post('product_quantity', True);
        $this->db->insert('tbl_product', $data);

    }
    public function get_product_details_model(){
        $result=$this->db
            ->select('*')
            ->from('tbl_product')
            ->get();


        return $result->result();


    }



}