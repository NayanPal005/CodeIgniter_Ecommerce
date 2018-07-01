<?php
class Invoice_model extends CI_Model{

    public function select_all_invoice(){

      return  $this->db->select('*')

            ->from('tbl_order')
            ->join('tbl_customer','tbl_customer.customer_id=tbl_order.customer_id')
            ->join('tbl_shipping','tbl_shipping.shipping_id=tbl_order.shipping_id')
            ->get()
            ->result();
    }

//
//    public function order_info_by_id($order_id){
//      //  echo $order_id;
//      return  $this->db->select('*')
//            ->from('tbl_order')
//            ->where('order_id',$order_id)
//            ->get()
//            ->row();
//
//    }
//
//
//    public function customer_info_by_id($customer_id){
//
//       // echo $customer_id;
//        return  $this->db->select('*')
//            ->from('tbl_customer')
//            ->where('customer_id',$customer_id)
//            ->get()
//            ->row();
//    }
//
//    public function shipping_info_by_id($shipping_id){
//        return  $this->db->select('*')
//            ->from('tbl_shipping')
//            ->where('shipping_id',$shipping_id)
//            ->get()
//            ->row();
//
//    }
    //all_invoice_info ta join query

   public function all_invoice_info($order_id){

       return $this->db->select('*')
            ->from('tbl_order')
            ->where('order_id',$order_id)
            ->join('tbl_customer','tbl_customer.customer_id=tbl_order.customer_id')
            ->join('tbl_shipping','tbl_shipping.shipping_id=tbl_order.shipping_id')
            ->get()
            ->result();

   }


   public function edit_invoice_model($orderID){

       return $this->db->select('*')

                 ->from('tbl_order')

                 ->where('order_id',$orderID)

                 ->join('tbl_customer','tbl_customer.customer_id=tbl_order.customer_id')

                 ->join('tbl_shipping','tbl_shipping.shipping_id=tbl_order.shipping_id')

                 ->get()

                 ->row();

   }
   public function edited_invoice_model($grabID,$grabCID, Array $details){

     $updatedResult=$this->db
                   ->set($details)
       //  ->where('a.order_id',$grabID)
       //  ->where('b.customer_id',$grabID)
           ->where('tbl_order.order_id',$grabID)
           ->where('tbl_customer.customer_id',$grabCID)
         //  ->update('tbl_order AS a, tbl_customer AS b');
       ->update('tbl_order,tbl_customer');


     return $updatedResult;
   }



}