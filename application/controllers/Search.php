<?php

class Search extends CI_Controller{

    public function search_data(){

      // echo "Hello search";

        $data['slider']='';

        $data['title']='Search';
        // $data['recom_item']='';

       // $data['category_item']='';

        //$data['featured_item']='';

        $data['all_active_product']='';
        $data['all_top_product']='';
        $data['all_top_product']=$this->welcome_model->get_all_top_product();

        // print_r($data);

        // exit();




        $data['recom_item']=$this->load->view('pages/recom_item',$data,true);

        $data['category_item']=$this->load->view('pages/category_item',$data,true);

        $searchData=$this->input->post('search');

        //  echo $searchData;

         $getSearchData['getSearchData']=$this->search_model->search_data_model($searchData);

         $data['featured_item']=$this->load->view('pages/search_list',$getSearchData,True);

         $this->load->view('welcome_page_start',$data);

        //echo '<pre>';

        //   print_r($getSearchData);

        //  exit();


    }

    public function ajax_search_data(){

     $val=$this->input->post('search_val');

     $result=$this->search_model->ajax_search_by_name($val);
     //echo '<pre>';
    // print_r($result);
    // exit();
    }
}