<?php
class Checkout extends CI_Controller{

public function index(){

    $data['title']='';
    $data['slider']='';
    $data['recom_item']='';
    $data['category_item']='';
    $data['featured_item']= $this->load->view('pages/checkout',$data,True);
    $this->load->view('welcome_page_start',$data);


}

}