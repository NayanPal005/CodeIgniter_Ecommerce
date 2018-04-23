<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Welcome_model extends CI_Model
{
    public function __construct()

    {
        parent::__construct();



    }
    public function all_active_product(){

       $result=$this->db
                    ->select('*')
                    ->from('tbl_product')
                    ->where('product_status',1)
                    ->get();
       return $result->result();


    }
    public function get_all_top_product(){

        $result=$this->db

            ->select('*')

            ->from('tbl_product')

            ->where('top_product',1)

            ->get();

        return $result->result();

    }
    public function product_details_model($productID){
     $result= $this->db
             ->select('*')
             ->from('tbl_product')
             ->where('product_id',$productID)
             ->get();
     return $result->row();
    }


}
