<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Manufacturer extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('manufacturers_model');

    }
    public function add_manufacturer(){

        $data['form_test']= $this->load->view('pages/add_manufacturer_form','',True);

        $this->load->view('admin/admin_dashboard',$data);



    }
    public function save_manufacturer()
    {
        // $data=$this->input->post('manufacturer_name');
        //$this->load->model('manufacturers_model');


        $data = $this->manufacturers_model->save_manufacturer_model();

        $this->session->set_userdata('message', 'Manufacturer Save Successfully');

        redirect('manufacturer-show');
    }
    public function get_manufacturer(){

       $manufacturer_details['manufacturer_details']= $this->manufacturers_model->get_manufacturer_model();

      // $this->load->view('pages/manufacturer_list_show');

      $data['form_test']=$this->load->view('pages/manufacturer_list_show',$manufacturer_details,True);

     $this->load->view('admin/admin_dashboard',$data);

    }


}