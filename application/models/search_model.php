<?php
class search_model extends CI_Model{

    public function search_data_model($searchData){

    //    echo "This is Search Data model".$searchData;


            return $this->db->like('product_name', $searchData)
                ->or_like('product_short_description', $searchData)
                ->or_like('product_long_description', $searchData)


                     ->get('tbl_product')->result();



    }

}