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

        $result = $this->db
             ->select('*')
             ->from('tbl_product')
             ->join('tbl_manufacturer','tbl_manufacturer.manufacturer_id=tbl_product.manufacturer_id')
             ->where('product_id',$productID)
             ->get()
             ->row();

        return $result;

        /* ->join('tbl_manufacturer','tbl_manufacturer.manufacturer_id=tbl_product.product_id')
          ->where('product_id',$productID) */ /*jokhon join koracchi tokon jdi manufactuerer
       table e amar product id thakto taole error dekhato.confused hoye jeto je kon table er
       product id..so  join query te kono id dile seta dot(.) diye kon table er id seta bole dite hbe
       jemon  ->where('tbl_product.product_id',$productID)
                   */

    }

    public function brand_cat_filter_model($cat_id,$brand_id){

      //  echo $brand_id;
       // echo $cat_id;

        $query=$this->db->select();

        if ($brand_id){

            $this->db->where('tbl_product.manufacturer_id',$brand_id);
        }

        if ($cat_id){

            $this->db->where('tbl_product.category_id',$cat_id);
        }


        $qry=$this->db->get('tbl_product');


        return $qry->result();


    }


}
