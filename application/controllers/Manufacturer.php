<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Manufacturer extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('manufacturers_model');

    }

    public function add_manufacturer()
    {

        $data['form_test'] = $this->load->view('pages/add_manufacturer_form', '', True);

        $this->load->view('admin/admin_dashboard', $data);


    }

    public function save_manufacturer()
    {

        // $data=$this->input->post('manufacturer_name');
        //$this->load->model('manufacturers_model');


        $data = $this->manufacturers_model->save_manufacturer_model();

        $this->session->set_userdata('message', 'Manufacturer Save Successfully');

        redirect('manufacturer-show');
    }

    public function get_manufacturer()
    {

        $manufacturer_details['manufacturer_details'] = $this->manufacturers_model->get_manufacturer_model();

        // $this->load->view('pages/manufacturer_list_show');

        $data['form_test'] = $this->load->view('pages/manufacturer_list_show', $manufacturer_details, True);

        $this->load->view('admin/admin_dashboard', $data);
    }

    public function edit_manufacturer($manufacturerId)
    {
        //  echo $manufacturerId;

        $manufacturerDetails['manufacturerDetailsById'] = $this->manufacturers_model->edit_manufacturer_model($manufacturerId);
       //echo '<pre>';
       //print_r($manufacturerDetails);

       $data['form_test']=$this->load->view('pages/edit_manufacturer_form', $manufacturerDetails, True);
       $this->load->view('admin/admin_dashboard',$data);
    }

    public function edited_manufacturer(){ //edited  value gulo niye ekane asbe update er jonno

       // echo "Hi,This is Edited Manufacturer";

        $grabbedID=$this->input->post('manufacturer_id');

      //  echo $grabbedID;

        //updateDetails hocche form er updatedValue k nisi

         $updateDetails['manufacturer_name']=$this->input->post('manufacturer_name');

         $updateDetails['manufacturer_long_description']=$this->input->post('manufacturer_long_description');

         $updateDetails['manufacturer_short_description']=$this->input->post('manufacturer_short_description');

        // print_r($updateDetails);

        $this->load->model('manufacturers_model');

        $this->manufacturers_model->update_manufacturer($grabbedID, $updateDetails);

        redirect('manufacturer-show');


    }
    public function delete_manufacturer($grabbedID){

        //echo $grabbedID;
        $this->manufacturers_model->delete_manufacturer_model($grabbedID);
        redirect('manufacturer-show');


    }






}