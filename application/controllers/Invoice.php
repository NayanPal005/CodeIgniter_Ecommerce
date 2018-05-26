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
    $data=array();

    $order_info= $this->invoice_model->order_info_by_id($order_id);
    //$order_INFO=$this->invoice_model->order_info_by_id($order_id);
   // $shipping_id=$order_INFO->shipping_id;//shipping_table e query chalanor jonno
    //jeta oder korsi oi order er shipping id eta kintu

   // echo '<pre>';
   // print_r($order_info);
    $customer_id=$order_info->customer_id;
   //echo $customer_id;
    $customer_info=$this->invoice_model->customer_info_by_id($customer_id);
  //  echo '<pre>';
   // print_r($customer_info);
   // exit();

    $shipping_id=$order_info->shipping_id;
  //  echo $shipping_id;
    $shipping_info=$this->invoice_model->shipping_info_by_id($shipping_id);

  //  echo '<pre>';
  //  print_r($order_info);
  //  exit();

    $data['order_info']= $this->invoice_model->order_info_by_id($order_id);
    $data['customer_info']= $this->invoice_model->customer_info_by_id($customer_id);
    $data['shipping_info']= $this->invoice_model->shipping_info_by_id($shipping_id);



    $data['form_test']=$this->load->view('pages/invoice_details',$data,True);

    $this->load->view('admin/admin_dashboard',$data);
}



}