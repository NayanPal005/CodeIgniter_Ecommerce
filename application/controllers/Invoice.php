<?php

class Invoice extends CI_Controller{

public function manage_invoice(){

    $data=array();

    $data['all_invoice']=$this->invoice_model->select_all_invoice();

   /*

    echo '<pre>';
    print_r($data);
    exit();


   */

    $data['form_test']=$this->load->view('pages/manage_invoice',$data,True);

    $this->load->view('admin/admin_dashboard',$data);

}
public function view_invoice($order_id){

    $datas=array();
    //$data=array();

    $datas['all_data']=$this->invoice_model->all_invoice_info($order_id);//3ta table er data ekane ansi join query chalai
    /*

    echo '<pre>';
   print_r($datas);
   exit();

    */

    // $data['form_test']=$this->load->view('pages/invoice_details',$data,True);
    $datas['form_test']=$this->load->view('pages/invoice_details',$datas,True);



    $this->load->view('admin/admin_dashboard',$datas);

  // $order_info= $this->invoice_model->order_info_by_id($order_id);
    //$order_INFO=$this->invoice_model->order_info_by_id($order_id);
    //$shipping_id=$order_INFO->shipping_id;//shipping_table e query chalanor jonno
    //jeta oder korsi oi order er shipping id eta kintu

    /*
   $customer_id=$order_info->customer_id;

          //echo $customer_id;

         // $customer_info=$this->invoice_model->customer_info_by_id($customer_id);

          // echo '<pre>';

         // print_r($customer_info);

         // exit();
   */
    /*

     // $shipping_id=$order_info->shipping_id;

          //echo $shipping_id;

          // $shipping_info=$this->invoice_model->shipping_info_by_id($shipping_id);

          //  echo '<pre>';

          //  print_r($order_info);

          // exit();
    */

    /*
    $data['order_info']= $this->invoice_model->order_info_by_id($order_id);

    $data['customer_info']= $this->invoice_model->customer_info_by_id($customer_id);

    $data['shipping_info']= $this->invoice_model->shipping_info_by_id($shipping_id);
    */

    }


    public function edit_invoice($orderID){

    echo "Hello! This is Edit Invoice";

    echo $orderID;

    $data=array();

    $data['all_data']=$this->invoice_model->edit_invoice_model($orderID);

          //  print_r($data);

          //  exit();

    $data['form_test']=$this->load->view('pages/edit_invoice_details',$data,True);
    $this->load->view('admin/admin_dashboard',$data);

    }

    public function edited_invoice(){

        echo "THis is Edited Invoice";

        $details['order_id']=$this->input->post('order_id');
        $details['order_total']=$this->input->post('order_total');
        $details['customer_name']=$this->input->post('customer_name');
        $details['customer_email']=$this->input->post('customer_email');
        $details['customer_address']=$this->input->post('customer_address');
        $details['customer_number']=$this->input->post('customer_number');
        $details['customer_fax']=$this->input->post('customer_fax');

        $this->invoice_model->edited_invoice_model($details);

        echo '<pre>';
        print_r($details);
        exit();


    }



}