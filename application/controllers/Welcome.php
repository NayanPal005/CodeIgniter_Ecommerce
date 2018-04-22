<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    var $data = array();

    public function __construct()
    {
        parent::__construct();
        $this->load->model('welcome_model');


    }

    public function index()
    {
        /*
        $this->load->helper('form');
        $validation=array(
            array('field'=>'data_name[]','rules'=>'required') ,
            array('field'=>'data_size[]','rules'=>'required|numeric')
        );
        $this->form_validation->set_rules($validation);
        if ($this->form_validation->run()==true) {
            $myData = $this->input->post('data_name[]');
            $mySize = $this->input->post('data_size[]');
            $value = array();

            for ($i=0;$i<count($myData);$i++){
                $value[$i]=array(
                    'data_name'=>$myData[$i],
                    'data_size'=>$mySize[$i]
                );
            }

            foreach ($myData as $key) {
                array_push($value,
                    array(
                        'user_name' => $key,
                        'user_email' => $key
                    ));
            }

            $this->db->insert_batch('multi_data_ci',$value);
            $this->session->set_flashdata('msg','Great Job Dude!!');

        }
        $this->load->view('welcome_page_start',$this->data);


	*/

        $data=array();

        $data['title']='Home';

        $data['all_top_product']=$this->welcome_model->get_all_top_product();

       // print_r($data);
       // exit();


        $data['slider']=$this->load->view('pages/slider',$data,true);

       $data['all_active_product']=$this->welcome_model->all_active_product();

        $data['featured_item']=$this->load->view('pages/featured_item',$data,true);



        //$data['all_active_product']= $this->load->view('pages/featured_item',$data,true);



        $this->load->view('welcome_page_start',$data);

    }

    public function accounts() {

        //  echo "This is Linking practice";

        $data['slider']='';

        $data['title']='Accounts';

        $data['featured_item']="<h1 align='center'>Accounts content</h1>";

        $this->load->view('welcome_page_start',$data);
    }
}
