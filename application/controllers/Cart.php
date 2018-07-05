<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller{


    public function __construct()
    {
        parent::__construct();

        $this->load->model('cart_model');

        $this->load->library('cart');

    }



    public function add_to_cart(){

      //  echo "Hello! This is cart";

        $productID=$this->input->post('product_id',True);

        $productQuantity=$this->input->post('product_quantity',True);

      //  echo $productID;
        
      // echo $productQuantity;

        $details= $this->cart_model->select_product_by_id($productID);


      // print_r($details);


        $data = array(
            'id'      => $details->product_id,
            'qty'     => $productQuantity,
            'price'   => $details->product_price,
            'name'    => $details->product_name,
            'options' => array('image' => $details->product_image)
        );


          // echo '<pre>';

          // print_r($data);

          //  echo 'hdddddddddddddddddd';

          //  exit();

        $this->cart->insert($data);

       return redirect('cart/show_cart');



    }

    public function show_cart(){


       // echo "Hello! This is cart";

        $data=array();
        $data['title']='';
        $data['slider']='';
        $data['recom_item']='';
        $data['category_item']='';

        $data['dataCART']=$this->cart->contents();

        //Adopted value of cart catch here and pass it to the cart_view page  in the next line
        
        $data['featured_item']=$this->load->view('pages/cart_view',$data,True);

       // $data['featured_item']=$this->load->view('pages/payment',$data,True);//a hocche payemnt page e dekhanor jonno jehutu final step

        $this->load->view('welcome_page_start',$data);


    }

    public function delete_to_cart($cartID)
    {
        //echo $cartID;

        $data = array(
            'rowid' => $cartID,
            'qty' => 0,

        );

        $this->cart->update($data);

        redirect('cart/show_cart');

    }

    public function update_cart_product_quantity(){

     // $allData=$this->input->post();

      $productQuantity=$this->input->post('qty');

      $rowId=$this->input->post('rowid');

     //echo $productQuantity;

    // echo $rowId;

        $data = array(

            'rowid' => $rowId,

            'qty' => $productQuantity,

        );

        $this->cart->update($data);

        redirect('cart/show_cart');

    }



}