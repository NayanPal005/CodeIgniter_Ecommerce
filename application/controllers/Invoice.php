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

   $order_info['order_info']= $this->invoice_model->order_info_by_id($order_id);

    $data['form_test']=$this->load->view('pages/invoice_details',$order_info,True);
    $this->load->view('admin/admin_dashboard',$data);
}



}