<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index(){
        echo "This is Home controller";
    }
    public function error_404(){
        $data['title']='';

        $data['slider']='';

        $data['recom_item']='';

        $data['category_item']='';
        $data['featured_item']= $this->load->view('pages/404',$data,True);

        $this->load->view('welcome_page_start',$data);

    }
    public function contact(){
        $data['title']='';

        $data['slider']='';

        $data['recom_item']='';

        $data['category_item']='';
        $data['featured_item']= $this->load->view('pages/contact',$data,True);

        $this->load->view('welcome_page_start',$data);


    }
    public function frontpage_productdetails(){

        $data['title']='Accounts';
        $data['recom_item']='';
        $data['category_item']='';
        $data['all_active_product']=$this->welcome_model->all_active_product();
        $data['all_top_product']=$this->welcome_model->get_all_top_product();
        $data['featured_item']='';
        $data['slider']=$this->load->view('pages/slider',$data,true);
        $this->load->view('welcome_page_start',$data);
    }
    public function frontpage_products(){

        $data['title']='Accounts';
        $data['recom_item']='';
        $data['category_item']='';
        $data['all_active_product']=$this->welcome_model->all_active_product();
        $data['all_top_product']=$this->welcome_model->get_all_top_product();
        $data['featured_item']=$this->load->view('pages/featured_item',$data,true);
        $data['slider']='';
        $this->load->view('welcome_page_start',$data);
    }
}
