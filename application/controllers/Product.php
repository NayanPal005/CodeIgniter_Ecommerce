<?php
defined('BASEPATH') OR exit('No direct script access allowed');


 class Product extends CI_Controller{

    public function __construct()
    {

            parent::__construct();
            $this->load->model('products_model');
     }

     public function add_product(){

       $data['form_test']=$this->load->view('pages/product_add_form','',True);
      // $data['form_test']=$this->load->view('pages/form_test','',True);
       //$this->load->view('pages/product_add_form');

       $this->load->view('admin/admin_dashboard',$data);


     }
     public function add_category(){  /* for saving products */

        $this->products_model->add_category_model();

        redirect('category-show');

     }
     public function get_category(){

         $categoryDetails['categoryDetails']= $this->products_model->get_category_details();
         //echo '<pre>';
         //print_r($categoryDetails);
         $this->load->view('pages/category_list_show',$categoryDetails);

         $data['form_test']= $this->load->view('pages/category_list_show',$categoryDetails,True);
         $this->load->view('admin/admin_dashboard',$data);



     }




 }