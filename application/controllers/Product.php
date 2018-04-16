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
     public function get_category(){   //This is show all category
         $categoryDetails['categoryDetails']= $this->products_model->get_category_details();


         //print_r($categoryDetails);

         $data['form_test']= $this->load->view('pages/category_list_show',$categoryDetails,True);
         $this->load->view('admin/admin_dashboard',$data);  //for showing in dashboard
     }
     public function change_category_status($status,$categoryDetailsID){
          //echo $status;
          //echo $categoryDetailsID;

         $this->products_model->change_category_status($status,$categoryDetailsID);

         $this->get_category();

     }

     public function edit_category($categoryDetailsID){


        //  echo $categoryDetailsID;
         //$categoryDetails=$this->products_model->get_category_details_by_id($categoryDetailsID);

        $categoryDetails['categoryDetailsById']= $this->products_model->get_category_details_by_id($categoryDetailsID);

         // print_r($categoryDetails) ;

         //$this->load->view('pages/edit_category_form',$categoryDetails);


         $data['form_test']=$this->load->view('pages/edit_category_form',$categoryDetails,True); //for showing in dashboard

         $this->load->view('admin/admin_dashboard',$data);

     }
     
     public function edited_category(){

         echo "HI,I AM EDITED CATEGORY";
     }
     public function product_add()
     {


         $get_all_active_category['get_all_active_category'] = $this->products_model->get_all_active_category_info();
         $data['form_test'] = $this->load->view('pages/add_product_form', $get_all_active_category, True);

         $this->load->view('admin/admin_dashboard', $data);


     }
     public function save_product(){

        // echo '<pre>';
        // $info=$this->input->post(NULL,True);
        // print_r($_FILES);

         $this->products_model->save_product_model();

       $this->session->set_userdata('message','Product Save Successfully');


       redirect('product-show');



     }

     public function get_product_details(){

          $product_details['product_details']= $this->products_model->get_product_details_model();

          $data['form_test'] = $this->load->view('pages/product_list_show',$product_details,True);

          $this->load->view('admin/admin_dashboard',$data);



     }




 }




