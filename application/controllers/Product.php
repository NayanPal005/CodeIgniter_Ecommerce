<?php

defined('BASEPATH') OR exit('No direct script access allowed');

 class Product extends CI_Controller{

    public function __construct()
    {

            parent::__construct();
            $this->load->model('products_model');
            $this->load->model('manufacturers_model');
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

         $grabbedId= $this->input->post('category_id');//je id ta hidden pataisi seta receive korlam

         $updateDe['category_name']=$this->input->post('category_name');

         $updateDe['category_long_description']=$this->input->post('category_long_description');

         $updateDe['category_short_description']=$this->input->post('category_short_description');


        // print_r($updateDe);
        // echo $grabbedId;

        // echo "HI,I AM EDITED CATEGORY";

         $this->load->model('products_model');

         $this->products_model->update_category($grabbedId, $updateDe);

         redirect('category-show');

     }

     public function product_add() //THis actually ADD_CATEGORY
     {


         //$getManufacturer['getManufacturerDetails']= $this->manufacturers_model->get_manufacturer_model();
        // $data['form_test']=   $this->load->view('pages/add_product_form', $getManufacturer, True);
         //$this->load->view('admin/admin_dashboard',$data);
         $get_all_active_category['get_all_active_category'] = $this->products_model->get_all_active_category_info();
         $getManufacturer['getManufacturerDetails']= $this->manufacturers_model->get_manufacturer_model();

         $data['form_test'] = $this->load->view('pages/add_product_form', $get_all_active_category, True);
         $data['form_test'] = $this->load->view('pages/add_product_form', $getManufacturer, True); //add manufacturer ta db th

         $this->load->view('admin/admin_dashboard', $data);


     }
     public function save_product(){ //This is from Add _Product form

        // echo '<pre>';
        // $info=$this->input->post(NULL,True);
        // print_r($_FILES);
         $productImage=$this->upload_product_image();

         $this->products_model->save_product_model($productImage);

          $this->session->set_userdata('message','Product Save Successfully');
       redirect('product-show');
     }

     public function get_product_details(){

          $product_details['product_details']= $this->products_model->get_product_details_model();

          $data['form_test'] = $this->load->view('pages/product_list_show',$product_details,True);

          $this->load->view('admin/admin_dashboard',$data);

     }
     public function edit_product($productID){


         $this->load->model('products_model');
        $getDetailsById['getDetailsById']= $this->products_model->edit_product_model($productID);
        /* now i need category and manufacturer list in the edit form fot edit.so below i grab those */
         $get_all_active_category['get_all_active_category'] = $this->products_model->get_all_active_category_info();
         $getManufacturer['getManufacturerDetails']= $this->manufacturers_model->get_manufacturer_model();

         $data['form_test']=$this->load->view('pages/edit_product_form',$getDetailsById,True);
         $data['form_test']=$this->load->view('pages/edit_product_form',$get_all_active_category,True);
         $data['form_test']=$this->load->view('pages/edit_product_form',$getManufacturer,True);
         $this->load->view('admin/admin_dashboard',$data);


     }
     public function edited_product_details()
     {

              /*
               *
                  echo '<pre>';
                  print_r($_FILES);
                  exit();

              */
                  if ($_FILES['product_image']['name']=='' || $_FILES['product_image']['size']==0){

                      $details['product_image']=$this->input->post('productOld_image',True);
                     // $this->products_model->edited_products_model($details);
                      unlink($this->input->post('productOld_image',True));
                  }

                  else{
                     $details['product_image']=$this->upload_product_image();
                     // $this->products_model->edited_products_model( $details);
                      unlink($this->input->post('productOld_image',True));
                  }

                  $grabbedID=$this->input->post('product_id');
                  // echo $grabbedID;
                  $details['product_name']=$this->input->post('product_name');
                  $details['product_price']=$this->input->post('product_price');
                  $details['product_short_description']=$this->input->post('product_short_description');
                  $details['product_long_description']=$this->input->post('product_long_description');
                  $details['product_quantity']=$this->input->post('product_quantity');

                  $this->products_model->edited_products_model($grabbedID, $details);
                  redirect('manage-product');

         // print_r($details);
         // exit();
         /*


         if ($_FILES['product_image']['name'] == '' || $_FILES['product_image']['size'] == 0) {

             $productImage = $this->input->post('productOld_image', True);
            // $this->products_model->edited_products_model($productImage);

         } else {

             $productImage = $this->upload_product_image();
          //   $this->products_model->edited_products_model($productImage);
         }

         $grabbedID = $this->input->post('product_id');

         // echo $grabbedID;

         $details['product_name'] = $this->input->post('product_name');
         $details['product_price'] = $this->input->post('product_price');
         $details['product_short_description'] = $this->input->post('product_short_description');
         $details['product_long_description'] = $this->input->post('product_long_description');
         $details['product_quantity'] = $this->input->post('product_quantity');
         $details['product_image'] = $productImage;
         // $details['top_product']=$this->input->post('top_product');
         $top_product = $this->input->post('top_product', True);

         if ($top_product == NULL) {

             $details['top_product'] = 0;

         }
         if ($top_product == 'on') {

             $details['top_product'] = 1;

             $this->products_model->edited_products_model($grabbedID, $details);
             redirect('manage-product');
         }
         */

     }

     public function delete_product($grabbedID){

          // echo $grabbedID;

         $this->products_model->delete_product_model($grabbedID);
         redirect('product-show');

     }
     public function change_product_status($status,$productID){

       //  echo $status,$productID;

         $this->products_model->change_product_status_model($status,$productID);

         $this->get_product_details();

 }
     private function upload_product_image(){

         $config['upload_path']          = './images/';
         $config['allowed_types']        = 'gif|jpg|png|jpeg';
         $config['max_size']             = 20000;
         $config['max_width']            = 10240;
         $config['max_height']           = 76800;

         $this->load->library('upload',$config);

         if ($this->upload->do_upload('product_image')){

             $productImage=$this->upload->data();
             // echo '<pre>';
             // print_r($productImage);
             // exit();
             $imagePath="images/$productImage[file_name]";
             return $imagePath;
         }
         else{
             $error=$this->upload->display_errors();
             echo $error;
         }
     }

 }




