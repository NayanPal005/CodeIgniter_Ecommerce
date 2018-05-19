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

    echo "Hello,This is updated billing information";

   // redirect('shipping',$updatedbillingDATA);
   redirect('shipping');
  //  redirect(base_url("checkout/shipping/".$updatedbillingDATA));

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

   //= echo 'This is shipping';
   // $this->load->view('pages/shipping');
   // echo '<pre>';
  //  $updatedbillingDATA = $this->uri->segment(3);
   // print_r($updatedbillingDATA);
  //  exit();
    
}

}