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



}