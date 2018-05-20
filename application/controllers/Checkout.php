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
    $customer_id=$this->session->userdata('customer_id');
  //  $shipping_id=$this->input->post('shipping_id');
    echo $shipping_id;

    $this->checkout_model->save_shipping_model($shipping_id,$customer_id);
    redirect('payment');
}
public function payment(){
    $data['title']='payment';

    $data['slider']='';

    $data['recom_item']='';

    $data['category_item']='';



    $data['featured_item']= $this->load->view('pages/payment',$data,True);

    $this->load->view('welcome_page_start',$data);

    echo "We Will Use payment API :)";
   // $this->load->view('pages/payment');

}
public function place_order(){
    $data['title']='payment';

    $data['slider']='';

    $data['recom_item']='';

    $data['category_item']='';



 //   $data['featured_item']= $this->load->view('pages/payment',$data,True);

   // $this->load->view('welcome_page_start',$data);


    $payment_type=$this->input->post('payment_type',true);
    //echo $payment_type;
    if ($payment_type=='ssl_commerz'){
        $data['featured_item']= $this->load->view('pages/sslcommerz_payment',$data,True);

         $this->load->view('welcome_page_start',$data);

    }
    if ($payment_type=='payment'){
        $data['featured_item']= $this->load->view('pages/payment',$data,True);
         $this->load->view('welcome_page_start',$data);

    }
    if ($payment_type=='paypal'){
        $data['featured_item']= $this->load->view('pages/payment',$data,True);

         $this->load->view('welcome_page_start',$data);

    }
}
public function ssl_payment()
{

    define("STORE_ID", "testbox");

    define("STORE_PASSWORD", "qwerty");

    define("SSLCZ_REDIRECT_URL", " https://sandbox.sslcommerz.com/gwprocess/v3/api.php");

    define("SSLCZ_VALIDATION_API", " https://sandbox.sslcommerz.com/validator/api/validationserverAPI.php");

    /* communicate necessary info */
    //if (isset($_POST['donate_now_please'])) {
        $post_data = array();

        $post_data['store_id'] = STORE_ID;
        $post_data['store_passwd'] = STORE_PASSWORD;
        $post_data['currency'] = $_POST['currency'];
        $post_data['total_amount'] = str_replace(',', '', $_POST['amount']);
        $_SESSION['SSLCZ_TRX_ID'] = $post_data['tran_id'] = "SSLCZ_TEST_" . uniqid();
        $post_data['success_url'] = "http://localhost/hysawa/?page_id=847";
        $post_data['fail_url'] = "http://localhost/hysawa/?page_id=847";
        $post_data['cancel_url'] = "http://localhost/hysawa/?page_id=847";
        /* customer info */
        $_SESSION['CUS_HISTORY']['CUS_NAME'] = $post_data['cus_name'] = $_POST['cus_name1'];
        $_SESSION['CUS_HISTORY']['CUS_NAME2'] = $post_data['cus_name2'] = $_POST['cus_name2'];
        $_SESSION['CUS_HISTORY']['CUS_EMAIL'] = $post_data['cus_email'] = $_POST['cus_email'];
        $_SESSION['CUS_HISTORY']['CUS_ADD'] = $post_data['cus_add1'] = $_POST['cus_add1'];
        $_SESSION['CUS_HISTORY']['CUS_COUNTRY'] = $post_data['cus_country'] = $_POST['cus_country'];

        $handle = curl_init();
        curl_setopt($handle, CURLOPT_URL, SSLCZ_REDIRECT_URL);
        curl_setopt($handle, CURLOPT_POST);
        curl_setopt($handle, CURLOPT_POSTFIELDS, $post_data);
        curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
        /*---------------------------bellow two line for localhost-----*/
        curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, 0);

        $content = curl_exec($handle);
        $code = curl_getinfo($handle, CURLINFO_HTTP_CODE);

        if ($code == 200 && !(curl_errno($handle))) {
            curl_close($handle);

            $sslcommerzResponse = $content;
            #PARSE THE JSON RESPONSE
            $sslcz = json_decode($sslcommerzResponse, true);
            if (isset($sslcz['status']) && $sslcz['status'] == 'SUCCESS') {
                if (isset($sslcz['GatewayPageURL']) && $sslcz['GatewayPageURL'] != '') {
                    echo '<meta http-equiv="refresh" content="0;url=' . $sslcz['GatewayPageURL'];
                    #header("Location:".$sslcz['GatewayPageURL']);
                    exit();
                } else {
                    echo "No Redirect URL Found";
                }
            } else {
                echo "Invalid Credential";
            }

        } else {
            curl_close($handle);
            echo "Failed To Connect With SSLCOMMERZ API";
            exit();
        }
    }
 //}

}