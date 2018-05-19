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
public function userLogin(){

    echo "Hello user";

}
public function userLogout(){

    echo "You Are Logged Out";

}
public function registration(){

    $this->load->model('checkout_model');

    $customer_id=$this->checkout_model->save_customer_info();

    $customer_name=$this->input->post('customer_name');

    $sdata=array();

    $sdata['customer_id']=$customer_id;

    $sdata['customer_name']=$customer_name;

    $this->session->set_userdata($sdata);

    redirect('billing');

}

public function billing(){

    $data['title']='billing';

    $data['slider']='';

    $data['recom_item']='';

    $data['category_item']='';

    $customer_id=$this->session->userdata('customer_id');

    $data['customer_info']=$customer_info=$this->checkout_model->customer_info_by_id($customer_id);

    $data['featured_item']= $this->load->view('pages/billing',$data,True);

    $this->load->view('welcome_page_start',$data);

}
public function updated_billing(){

  //  $updatedbillingDATA=$this->checkout_model->update_billing_info();
    $shipping_status=$this->input->post('shipping_status');

   // echo "===================".$shipping_status;
  //  exit();
   $this->checkout_model->update_billing_info();

   $shipping_id=$this->session->userdata('shipping_id');
   if ($shipping_id!=NULL){

       redirect('payment');

   }
    else {
        redirect('shipping');
    }

}
public function shipping(){
    $data['title']='shipping';

    $data['slider']='';

    $data['recom_item']='';

    $data['category_item']='';

    $customer_id=$this->session->userdata('customer_id');

    $data['customer_shipping_info']=$customer_shipping_info=$this->checkout_model->customer_shipping_info_by_id($customer_id);

    $data['featured_item']= $this->load->view('pages/shipping',$data,True);

    $this->load->view('welcome_page_start',$data);


    
}
public function save_shipping(){
    echo "Shipping Save here";
    $shipping_id=$this->session->userdata('shipping_id');
  //  $shipping_id=$this->input->post('shipping_id');
    echo $shipping_id;

    $this->checkout_model->save_shipping_model($shipping_id);
    redirect('payment');
}
public function payment(){
    echo "We Will Use payment API :)";

}

}