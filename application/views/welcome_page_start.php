<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $title;?> | E-Commerce</title>
    <link href="<?php echo base_url()?>Assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>Assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>Assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url()?>Assets/css/price-range.css" rel="stylesheet">
    <link href="<?php echo base_url()?>Assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url()?>Assets/css/main.css" rel="stylesheet">
    <link href="<?php echo base_url()?>Assets/css/responsive.css" rel="stylesheet">



    <script src="<?php echo base_url()?>Assets/js/html5shiv.js"></script>

    <script src="<?php echo base_url()?>Assets/js/respond.min.js"></script>
   <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> -->

    <script src="<?php echo base_url()?>Assets/js/ajax_call.js"></script>



    <link rel="shortcut icon" href="<?php echo base_url()?>images/ico/favicon.ico">

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url()?>Assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url()?>Assets/images/ico/apple-touch-icon-114-precomposed.png">

    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url()?>Assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url()?>Assets/images/ico/apple-touch-icon-57-precomposed.png">

</head>
<!--/head-->



<body>
<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="<?php echo base_url()?>"><img src="<?php echo base_url()?>Assets/images/home/logo.png" alt="" /></a>
                    </div>
                    <div class="btn-group pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                USA
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Canada</a></li>
                                <li><a href="#">UK</a></li>
                            </ul>
                        </div>

                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                DOLLAR
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Canadian Dollar</a></li>
                                <li><a href="#">Pound</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">

                            <li><a href="<?php echo base_url('welcome/index');?>"><i class="fa fa-home"></i> Home</li>

                         <!--   <li><a href="<?php echo base_url();?>welcome/accounts.html "><i class="fa fa-user"></i> Account</a></li> -->
                          <!--  <li><a href="checkout"><i class="fa fa-crosshairs"></i> Checkout</a></li> -->
                          <!--  <li><a href="checkout"><i class="fa fa-crosshairs"></i> Checkout</a></li> -->

                            <li><a href="<?php base_url() ?>show-cart"><i class="fa fa-shopping-cart"></i> Cart(<?php echo $this->cart->total_items();?>)</a></li>

                            <li><a href='<?php echo base_url();?>admin_login/index'><i class="fa fa-lock"></i> Login</a></li>

                           <!-- <li><a href='<?php echo base_url();?>admin_login/index'><i class="fa fa-lock"></i>User Login</a></li> -->

                           <!-- <li><a href='<?php echo base_url();?>admin_login/index'><i class="fa fa-lock"></i> Login</a></li> -->

                            <?php

                            $customer_id=$this->session->userdata('customer_id');

                            $customer_name=$this->session->userdata('customer_name');

                            ?>
                            <li><a href="" ><?php echo $customer_name; ?></a></li>
                            <?php

                            if ($customer_id){
                                ?>
                                <li><a href='<?php echo base_url();?>admin_login/user_logout'><i class="fa fa-lock"></i>User Logout</a></li>

                            <?php } else { ?>

                                <li><a href='<?php echo base_url();?>admin_login/index'><i class="fa fa-lock"></i>User Login</a></li>

                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>


                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="<?php echo base_url('welcome')?>" class="active">Home</a></li>
                            <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="<?php echo base_url('frontpage_products')?>">Products</a>li>
                                    <li><a href="<?php echo base_url('pDetails')?>">Product Details</a></li>



                                </ul>
                            </li>

                            <!--
                            <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="blog.html">Blog List</a></li>
                                    <li><a href="blog-single.html">Blog Single</a></li>
                                </ul>
                            </li>
                            -->

                            <li><a href="<?php echo base_url('404')?>">404</a></li>

                            <li><a href="<?php echo base_url('contact')?>">Contact</a></li>

                        </ul>

                    </div>

                </div>

                <!--============================================ ajax search =================================================-->

                <div class="col-sm-6">

                    <div class="search_box pull-right">

                        <?= form_open('',['class'=>'navbar-form navbar-text','role'=>'search'])?>

                        <div class="form-group">

                            <input type="text" name="ajax_search_field" id="ajax_search_id"  class="form-control" placeholder=" Ajax Search Product">

                        </div>

                        <button type="submit" class="btn btn-default">Search</button>

                        <?=  form_close();?>

                    </div>

                </div>

                <!--=========================================ajax search end==================================================-->
                <!--=========================================ajax search end==================================================-->

                <div class="col-sm-3">

                    <div class="search_box pull-right">

                        <?= form_open('search',['class'=>'navbar-form navbar-text','role'=>'search'])?>

                        <div class="form-group">

                            <input type="text" name="search"  class="form-control" placeholder="Search Product">

                        </div>

                        <button type="submit" class="btn btn-default">Search</button>

                        <?=  form_close();?>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--/header-bottom-->
</header><!--/header-->

<section id="slider"><!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

<?php echo $slider;?>


            </div>
        </div>
    </div>
</section><!--/slider-->

<section>
    <div class="container">
        <div class="row">
            <?php if ($category_item!=Null ) { ?>
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Category</h2>

                    <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                    <?php
                    //$this->load->model('products_model');

                    //=================================================very iMportant Notice nicher ta

                    //autoload e products_model ta load korate hbe front end e kaj korte

                    $get_category_for_publish =  $this->products_model->get_published_category();

         /*              ei front-end e ami direct model theke niye aschi front-end e eta kora valo                */

                    foreach ($get_category_for_publish as $get_category_for_publish ){
                    ?>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="javascript:void(0)" onclick="category(<?php echo $get_category_for_publish->category_id ?>)">


                       <?php echo $get_category_for_publish->category_name ?>
                                    </a></h4>
                            </div>
                        </div>

                        <?php }?>

                    </div><!--/category-products-->

                    <div class="brands_products"><!--brands_products-->

                        <h2>Brands</h2>
                 <?php
                 
                  $this->load->model('manufacturers_model');

                 $get_manufacturer_for_publish=$this->manufacturers_model->get_manufacturer_model();//autoload er model ta add na korle front e ei model kaj korbe na..
                 //so must be autoloaded
              /*  print_r($get_manufacturer_for_publish); */

                   foreach ($get_manufacturer_for_publish as $get_manufacturer_for_publish){
                  ?>
                        <div class="brands-name">
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="javascript:void(0)" onclick="brand(<?php echo $get_manufacturer_for_publish->manufacturer_id?>)"> </span>
                                   <?php echo $get_manufacturer_for_publish->manufacturer_name ?>

                                    </a></li>
                            </ul>

                        </div>

                        <?php }?>
                    </div><!--/brands_products-->
                    <div class="price-range"><!--price-range-->
                        <h2>Price Range</h2>
                        <div class="well text-center">
                            <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                            <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
                        </div>
                    </div>

                    <div class="shipping text-center">

                        <img src="<?php echo base_url()?>Assets/images/home/shipping.jpg" alt="" />

                    </div>

                </div>

            </div>

            <?php } ?>

            <div class="col-sm-9 padding-right">

      <!--=====================================featured_item==============================-->


                  <?php echo $featured_item;?>


       <!--=====================================featured_item==============================-->

                 <?php  echo $category_item;?>

                 <?php echo $recom_item; ?>

            </div>

        </div>

    </div>

</section>

 <input type="hidden" id="brand" name="brand_id">

 <input type="hidden" id="category" name="category_id">

<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="companyinfo">
                        <h2><span>e</span>-shopper</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="<?php echo base_url()?>Assets/images/home/iframe1.png" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Circle of Hands</p>
                            <h2>24 DEC 2014</h2>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="<?php echo base_url()?>Assets/images/home/iframe2.png" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Circle of Hands</p>
                            <h2>24 DEC 2014</h2>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="<?php echo base_url()?>Assets/images/home/iframe3.png" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Circle of Hands</p>
                            <h2>24 DEC 2014</h2>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="<?php echo base_url()?>Assets/images/home/iframe4.png" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Circle of Hands</p>
                            <h2>24 DEC 2014</h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="address">
                        <img src="<?php echo base_url()?>Assets/images/home/map.png" alt="" />
                        <p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Service</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Online Help</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Order Status</a></li>
                            <li><a href="#">Change Location</a></li>
                            <li><a href="#">FAQ’s</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Quock Shop</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">T-Shirt</a></li>
                            <li><a href="#">Mens</a></li>
                            <li><a href="#">Womens</a></li>
                            <li><a href="#">Gift Cards</a></li>
                            <li><a href="#">Shoes</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Policies</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Privecy Policy</a></li>
                            <li><a href="#">Refund Policy</a></li>
                            <li><a href="#">Billing System</a></li>
                            <li><a href="#">Ticket System</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>About Shopper</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Company Information</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Store Location</a></li>
                            <li><a href="#">Affillate Program</a></li>
                            <li><a href="#">Copyright</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-sm-offset-1">
                    <div class="single-widget">
                        <h2>About Shopper</h2>
                        <form action="#" class="searchform">
                            <input type="text" placeholder="Your email address" />
                            <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                            <p>Get the most recent updates from <br />our site and be updated your self...</p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">E-Commerece.Nayan pal.Dept. of CSE,IIUC.</p>
                <p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Nayan</a></span></p>
            </div>
        </div>
    </div>

</footer><!--/Footer-->


<script src="<?php echo base_url()?>Assets/js/jquery.js"></script>
<script src="<?php echo base_url()?>Assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>Assets/js/jquery.scrollUp.min.js"></script>
<script src="<?php echo base_url()?>Assets/js/price-range.js"></script>
<script src="<?php echo base_url()?>Assets/js/jquery.prettyPhoto.js"></script>
<script src="<?php echo base_url()?>Assets/js/main.js"></script>
<script type="text/javascript">

    $("#ajax_search_id").click(function () {

       $("#ajax_search_id").css("width","300px");//mane field e click korlei eta 300px bere jabe
        //# er por always id hoi
    })

    </script>

<script type="text/javascript">

    $("#ajax_search_id").keyup(function () {//field key release ba liklei kaj korbe

        //alert("hi");

     var val= $("#ajax_search_id").val();

       /*

        The val() method returns or sets the value attribute of the selected elements.
         When used to return value: This method returns the value of the value
          attribute of the FIRST matched element.

       */

       $.ajax({

        url:'search/ajax_search_data',//here search is controller name and ajax_search is method name in controller


        method:"POST",

          data:{'search_val':val},

        success:function(data){

        // console.log(data)

        $(".features_items").html(data);

          }
     });

    })

</script>
</body>
</html>