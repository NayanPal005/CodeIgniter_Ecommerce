<?php

class checkout_model extends CI_Model{

    public function save_customer_info(){

        $data=array();

        $data['customer_name']=$this->input->post('customer_name');

        $data['customer_email']=$this->input->post('customer_email');

        $data['customer_password']=md5($this->input->post('customer_password'));

        $this->db->insert('tbl_customer',$data);

        $customer_id=$this->db->insert_id();//insert_id() is a built-in function that returns that last id so that we can do further process using id

        return $customer_id;

    }

    public function customer_info_by_id($customer_id){

      //  echo $customer_id;

        $customer_info=$this->db
                       ->select('*')
                       ->FROM('tbl_customer')
                       ->WHERE('customer_id',$customer_id)
                       ->get()
                       ->row();

      return $customer_info;

       // echo '<pre>';

        //print_r($customer_info);

    }
    public function update_billing_info(){

         $data=array();
         $data['customer_name']=$this->input->post('customer_name');
         $data['customer_id']=$this->input->post('customer_id');
         $customer_id=$this->input->post('customer_id');
         $data['customer_address']=$this->input->post('customer_address');
         $data['customer_email']=$this->input->post('customer_email');
         $data['customer_city']=$this->input->post('customer_city');
         $data['customer_number']=$this->input->post('customer_number');
         $data['zip_code']=$this->input->post('zip_code');

         $data['customer_country']=$this->input->post('customer_country');
        $shipping_status=$this->input->post('shipping_status');



        if ($shipping_status=='on') {
            $this->db->where('customer_id', $customer_id)
                ->update('tbl_customer', $data);
            $this->db->insert('tbl_shipping',$data);
            $shipping_id=$this->db->insert_id();
            $sdata=array();
            $sdata['shipping_id']=$shipping_id;
            $this->session->set_userdata($sdata);

        }
        else{
            $this->db->where('customer_id', $customer_id)
                ->update('tbl_customer', $data);

            redirect('shipping');


        }

    }

    public function customer_shipping_info_by_id($customer_id){
       // echo $customer_id;
        $customer_info=$this->db
            ->select('*')
            ->FROM('tbl_customer')
            ->WHERE('customer_id',$customer_id)
            ->get()
            ->row();

        return $customer_info;


    }
    public function save_shipping_model($shipping_id,$customer_id){
        $data=array();
        $data['customer_name']=$this->input->post('customer_name');
        $data['customer_id']=$customer_id;
       // $data['shipping_id']=$shipping_id;
      //  $customer_id=$this->input->post('customer_id');
        $data['customer_address']=$this->input->post('customer_address');
        $data['customer_fax']=$this->input->post('customer_fax');
        $data['customer_email']=$this->input->post('customer_email');
        $data['customer_city']=$this->input->post('customer_city');
        $data['customer_number']=$this->input->post('customer_number');
        $data['zip_code']=$this->input->post('zip_code');
        $data['customer_country']=$this->input->post('customer_country');
        $this->db->insert('tbl_shipping',$data);


    }
    public function save_payment_info_model($data){

     //  echo $payment_type;



     $this->db->insert('tbl_payment',$data);

      $payment_id=$this->db->insert_id(); //last id jeta ache input disi seta k nilam

      return $payment_id;



    }
    public function save_order_info($odata){

        $this->db->insert('tbl_order',$odata);
        $order_id=$this->db->insert_id();
        return$order_id;


    }

}

