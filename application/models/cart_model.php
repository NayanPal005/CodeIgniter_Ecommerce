<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class cart_model extends CI_Model{

public function select_product_by_id($productID){

    $result=$this->db
        ->select('*')
        ->from('tbl_product')
        ->where('product_id',$productID)
        ->get()
        ->row();
    return$result;










}


}