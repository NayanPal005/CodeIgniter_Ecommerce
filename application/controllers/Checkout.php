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
    /*save_customer_info te ami insert_id niye seta k return kore ekane niche
    set kore disi jate invoice use korte pari
    */

    /*============================
    model er function e insert_id use kore last inserted id gulo dre  return kore
    model e ene setake session e set kore disi


    */

    $customer_name=$this->input->post('customer_name');

    $sdata=array();

    ///////////////======================================//set of customer_id in session====================================//////


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



   // $shipping_id=$this->session->userdata('shipping_id');


    $customer_id=$this->session->userdata('customer_id');

   //$shipping_id=$this->input->post('shipping_id');

    //echo $shipping_id;

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

   }
   public function save_payment_info(){
   /*
    $payment_type=$this->input->post('payment_type');
    // echo $payment_type;
    $shipping_id=$this->session->userdata('shipping_id');
    echo $shipping_id;
    $customer_id=$this->session->userdata('customer_id');
    echo $customer_id;
  */



   $data=array();

   $data['payment_type']=$this->input->post('payment_type',True);

   $payment_id=$this->checkout_model->save_payment_info_model($data);

   $sdata=array();

   $sdata['payment_id']=$payment_id;

   $this->session->set_userdata($sdata);

  // $paymentID=$this->session->set_userdata('payment_id');
  // $customerID=$this->session->set_userdata('customer_id');

  // $shippingID=$this->session->set_userdata('shipping_id');

   //echo $shippingID;

  $odata=array();
   $odata['customer_id']=$this->session->userdata('customer_id');
   $odata['shipping_id']=$this->session->userdata('shipping_id');
   $odata['payment_id']=$this->session->userdata('payment_id');
   $odata['order_total']=$this->session->userdata('total');

  // echo '<pre>';
  // print_r($odata);
  // exit();



   $order_id=$this->checkout_model->save_order_info($odata);

   $sdata['order_id']=$order_id;

   $this->session->set_userdata($sdata);

   $contents=$this->cart->contents();

  foreach ($contents as $contents){


      $oDedata['order_id']=$order_id;
      $oDedata['product_id']=$contents['id'];
      $oDedata['product_name']=$contents['name'];
      $oDedata['product_price']=$contents['price'];

      $oDedata['product_sales_quantity']=$contents['qty'];
      $order_details_id=  $this->checkout_model->save_order_details_info($oDedata);

  }


       $this->session->set_userdata($order_details_id);



   /*
   echo '<br>';
   echo $customer_id;
   echo '<br>';
   echo $shipping_id;

   echo '<br>';
       echo $payment_id;
       echo '<br>';
       echo $order_total;
   exit();
  */

       $this->cart->destroy();
   redirect('checkout/confirm');

   } //save_payment_info end here



    public function confirm()
    {
        $data['title']='confirm';

        $data['slider']='';

        $data['recom_item']='';

        $data['category_item']='';

    $data['featured_item']=$this->load->view('pages/confirm','',True);
        $this->load->view('welcome_page_start',$data);


   }


   public function place_order()
    {
        $payment_type=$this->input->post('payment_type');




       // $this->checkout_model->save_order_related_info();


        /*place order e click korle ekoi sate ami api te patabo and
         save_payment_info te save korbo jate payment info gulo ami invoice e use korte pari
        */

        if($payment_type == 'cash_on')
        {
            $this->save_payment_info();
        }

        if($payment_type == 'ssl_commerz')
        {
           // $this->save_payment_info();
            $this->ssl_comerz_payment();

        }

        if($payment_type == 'paypal')
        {
            $this->save_payment_info();
        }

    }
    public function ssl_comerz_payment()
    {
       // echo $payment_type;
        define("STORE_ID", "testbox");

        define("STORE_PASSWORD", "qwerty");

        define("SSLCZ_REDIRECT_URL", "https://sandbox.sslcommerz.com/gwprocess/v3/api.php");

        define("SSLCZ_VALIDATION_API", "https://sandbox.sslcommerz.com/validator/api/validationserverAPI.php");


        # COMMUNICATE NECESSARY INFO

        $post_data = array();

        $post_data['store_id'] = STORE_ID;

        $post_data['store_passwd'] = STORE_PASSWORD;

        $post_data['currency'] = 'BDT';

        $post_data['total_amount'] = str_replace(',', '', 80000);

        $_SESSION['SSLCZ_TRX_ID'] = $post_data['tran_id'] = "SSLCZ_TEST_" . uniqid();

        $post_data['success_url'] = "http://localhost/CodeIgniter_Ecommerce/success"; //project er name

        $post_data['fail_url'] = "http://localhost/CodeIgniter_Ecommerce/fail";//project er name

        $post_data['cancel_url'] = "http://localhost/CodeIgniter_Ecommerce/cancel";//project er name

        # CUSTOMER INFORMATION

        $_SESSION['CUS_HISTORY']['CUS_NAME'] = $post_data['cus_name'] = 'Saahil Alam';
        $_SESSION['CUS_HISTORY']['CUS_NAME2'] = $post_data['cus_name2'] = '';

        $_SESSION['CUS_HISTORY']['CUS_EMAIL'] = $post_data['cus_email'] = 'saahil@yahoo.com';

        $_SESSION['CUS_HISTORY']['CUS_ADD'] = $post_data['cus_add1'] = 'Dhaka';
        //$_SESSION['CUS_HISTORY']['CUS_COUNTRY'] = 'bangladesh' = 'Bangladesh';

        #$post_data['cus_city'] = "Dhaka";
        #$post_data['cus_state'] = "Dhaka";
        #$post_data['cus_postcode'] = "1000";

        #$post_data['cus_fax'] = "01711111111";
        # SHIPMENT INFORMATION
        #$post_data['ship_name'] = "Store Test";
        #$post_data['ship_add1 '] = "Dhaka";
        #$post_data['ship_add2'] = "Dhaka";
        #$post_data['ship_city'] = "Dhaka";
        #$post_data['ship_state'] = "Dhaka";
        #$post_data['ship_postcode'] = "1000";
        #$post_data['ship_country'] = "Bangladesh";
        # OPTIONAL PARAMETERS
        #$post_data['value_a'] = "ref001";
        #$post_data['value_b '] = "ref002";
        #$post_data['value_c'] = "ref003";
        #$post_data['value_d'] = "ref004";
        # REQUEST SEND TO SSLCOMMERZ

        $handle = curl_init();

        curl_setopt($handle, CURLOPT_URL, SSLCZ_REDIRECT_URL);

        curl_setopt($handle, CURLOPT_POST, 1);

        curl_setopt($handle, CURLOPT_POSTFIELDS, $post_data);

        curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);

        /* ---------- **Below two lines only for Localhost ----------- */
        curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, 0);


        $content = curl_exec($handle);

        $code = curl_getinfo($handle, CURLINFO_HTTP_CODE);


        if ($code == 200 && !( curl_errno($handle))) {

            curl_close($handle);

            $sslcommerzResponse = $content;

            # PARSE THE JSON RESPONSE

            $sslcz = json_decode($sslcommerzResponse, true);

            if (isset($sslcz['status']) && $sslcz['status'] == 'SUCCESS') {

                if (isset($sslcz['GatewayPageURL']) && $sslcz['GatewayPageURL'] != '') {

                    echo '<meta http-equiv="refresh" content="0; url=' . $sslcz['GatewayPageURL'] . '" />';

                    #header("Location: " . $sslcz['GatewayPageURL']);

                    exit;
                } else {

                    echo "No redirect URL found!";
                }
            } else {

                echo "Invalid Credential!";
            }
        } else {

            curl_close($handle);

            echo "FAILED TO CONNECT WITH SSLCOMMERZ API";

            exit;
        }
    }
    public function success()
    {
        echo "In success";
    }
    public function fail()
    {
        echo "In fail order";
    }
    public function cancel()
    {
        echo "order Cancel";
    }

}