<?php

class Search extends CI_Controller
{

    public function search_data()
    {

        // echo "Hello search";

        $data['slider'] = '';

        $data['title'] = 'Search';
        // $data['recom_item']='';

        // $data['category_item']='';

        //$data['featured_item']='';

        $data['all_active_product'] = '';
        $data['all_top_product'] = '';
        $data['all_top_product'] = $this->welcome_model->get_all_top_product();

        // print_r($data);

        // exit();


        $data['recom_item'] = $this->load->view('pages/recom_item', $data, true);

        $data['category_item'] = $this->load->view('pages/category_item', $data, true);

        $searchData = $this->input->post('search');

        //  echo $searchData;

        $getSearchData['getSearchData'] = $this->search_model->search_data_model($searchData);

        $data['featured_item'] = $this->load->view('pages/search_list', $getSearchData, True);

        $this->load->view('welcome_page_start', $data);

        //echo '<pre>';

        //   print_r($getSearchData);

        //  exit();

    }

    public function ajax_search_data()
    {

        $val = $this->input->post('search_val');

        $result = $this->search_model->ajax_search_by_name($val);
        $output = "";
        if ($result) {

            /*==================================== */
            $output .= '<div class="features_items"><!--features_items-->

    <h2 class="title text-center">Features Items</h2>';

            foreach ($result as $all_active_product) {

                $output .= '$productID=$all_active_product->product_id';

                $output .= '<div class="col-sm-4">
        <div class="product-image-wrapper">
            <div class="single-products">
                <div class="productinfo text-center">';
                $output .= ' <img src="' . base_url() . $all_active_product->product_image . '"  height="180"  alt="" >';

                $output .= ' <h2>'
                    . $all_active_product->product_price . '</h2>'
                    . '<p>' . $all_active_product->product_short_description . '</p>
                    <a href="javascript:void(0)" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    <a href="javascript:void(0)" class="btn btn-default add-to-cart"><i class="	fa fa-bars"></i>Details</a>
                </div>
                <div class="product-overlay">
                    <div class="overlay-content">' .
                    '<h2>' . $all_active_product->product_price . '</h2>
                        
                        <a href="javascript:void(0)" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>'.
                        '<a href="base_url("product-details/$productID")" class="btn btn-default add-to-cart"><i class="	fa fa-bars"></i>Details</a>
                    </div>
                </div>
            </div>;
            
<!--            <div class="choose">-->
<!--                <ul class="nav nav-pills nav-justified">-->
<!--                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>-->
<!--                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>-->
<!--                </ul>-->
<!--            </div>-->
        </div>
    </div>';

            }
        }
else {
    $output = "<h3>No Product Here</h3>";
}

        echo $output;




    }
}