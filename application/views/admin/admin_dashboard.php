<!DOCTYPE html>
<html lang="en">
<head>
    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>Ecommerce Site by Nayan</title>
    <meta name="description" content="Bootstrap Metro Dashboard">
    <meta name="author" content="Dennis Ji">
    <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <!-- end: Meta -->
    <!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- end: Mobile Specific -->
    <!-- start: CSS -->
    <link id="bootstrap-style" href="<?php echo base_url()?>Assets/admin_Assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>Assets/admin_Assets/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link id="base-style" href="<?php echo base_url()?>Assets/admin_Assets/css/style.css" rel="stylesheet">
    <link id="base-style-responsive" href="<?php echo base_url()?>Assets/admin_Assets/css/style-responsive.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
    <!-- end: CSS -->
    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link id="ie-style" href="<?php echo base_url()?>Assets/admin_Assets/css/ie.css" rel="stylesheet">
    <![endif]-->
    <!--[if IE 9]>
    <link id="ie9style" href="<?php echo base_url()?>Assets/admin_Assets/css/ie9.css" rel="stylesheet">
    <![endif]-->
    <!-- start: Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url()?>Assets/admin_Assets/img/favicon.ico">
    <!-- end: Favicon -->
</head>
<body>
<!-- start: Header -->
<div class="navbar">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="index.html"><span>E-Commerce</span></a>


            <div class="nav-no-collapse header-nav">
                <ul class="nav pull-right">




                    <!-- start: User Dropdown -->
                    <li class="dropdown">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="halflings-icon white user"></i> Admin
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-menu-title">
                                <span>Account Settings</span>
                            </li>
                            <li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
                            <li><a href="admin-logout"><i class="halflings-icon off"></i> Logout</a></li>
                        </ul>
                    </li>
                    <!-- end: User Dropdown -->
                </ul>
            </div>
            <!-- end: Header Menu -->

        </div>
    </div>
</div>
<!-- start: Header -->

<div class="container-fluid-full">
    <div class="row-fluid">

        <!-- start: Main Menu -->
        <div id="sidebar-left" class="span2">
            <div class="nav-collapse sidebar-nav">
                <ul class="nav nav-tabs nav-stacked main-menu">
                    <li><a href="index.html"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>
                 <!--   <li><a href="<?php base_url('admin-registration_test')?>"><i class="icon-envelope"></i><span class="hidden-tablet"> Register Admin</span></a></li> -->
                    <!--<li><a href="admin-form"><i class="icon-envelope"></i><span class="hidden-tablet"> Register Admin</span></a></li>-->
                    <li><a href="admin-form_test"><i class="icon-envelope"></i><span class="hidden-tablet">Admin Registration</span></a></li>

                    <li><a href="product-add"><i class="icon-tasks"></i><span class="hidden-tablet">Add  Category</span></a></li>

                    <li><a href="manage-category"><i class="icon-eye-open"></i><span class="hidden-tablet">Manage Category</span></a></li>

                    <li><a href="add-product"><i class="icon-dashboard"></i><span class="hidden-tablet"> Add Product</span></a></li>
                    <li>

                        <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Dropdown</span><span class="label label-important"> 3 </span></a>
                        <ul>
                            <li><a class="submenu" href="submenu.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 1</span></a></li>
                            <li><a class="submenu" href="submenu2.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 2</span></a></li>
                            <li><a class="submenu" href="submenu3.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 3</span></a></li>
                        </ul>
                    </li>

                    <li><a href="add-manufacturer"><i class="icon-edit"></i><span class="hidden-tablet"> Add Manufacturer</span></a></li>
                    <li><a href="chart.html"><i class="icon-list-alt"></i><span class="hidden-tablet"> Charts</span></a></li>
                    <li><a href="typography.html"><i class="icon-font"></i><span class="hidden-tablet"> Typography</span></a></li>
                    <li><a href="gallery.html"><i class="icon-picture"></i><span class="hidden-tablet"> Gallery</span></a></li>
                    <li><a href="table.html"><i class="icon-align-justify"></i><span class="hidden-tablet"> Tables</span></a></li>
                    <li><a href="calendar.html"><i class="icon-calendar"></i><span class="hidden-tablet"> Calendar</span></a></li>
                    <li><a href="file-manager.html"><i class="icon-folder-open"></i><span class="hidden-tablet"> File Manager</span></a></li>
                    <li><a href="icon.html"><i class="icon-star"></i><span class="hidden-tablet"> Icons</span></a></li>
                  <!--  <li><a href="admin-login"><i class="icon-lock"></i><span class="hidden-tablet">Login</span></a></li> -->

                </ul>
            </div>
        </div>
        <!-- end: Main Menu -->


        <noscript>
            <div class="alert alert-block span10">
                <h4 class="alert-heading">Warning!</h4>
                <p>You  to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
            </div>
        </noscript>

        <!-- start: Content -->
        <div id="content" class="span10">


            <ul class="breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="index.html">Home</a>
                    <i class="icon-angle-right"></i>
                </li>
                <li><a href="#">Dashboard</a></li>
            </ul>



<div class="clearfix">

</div>


            <?php echo $form_test;?>

<footer>

    <p>
        <span style="text-align:left;float:left">&copy; 2018 <a href="http://jiji262.github.io/Bootstrap_Metro_Dashboard/" alt="Bootstrap_Metro_Dashboard">Nayan Pal,CSE,IIUC.</a></span>

    </p>

</footer>


<!-- start: JavaScript-->

<script src="<?php echo base_url()?>Assets/admin_Assets/js/jquery-1.9.1.min.js"></script>
<script src="<?php echo base_url()?>Assets/admin_Assets/js/jquery-migrate-1.0.0.min.js"></script>

<script src="<?php echo base_url()?>Assets/admin_Assets/js/jquery-ui-1.10.0.custom.min.js"></script>

<script src="<?php echo base_url()?>Assets/admin_Assets/js/jquery.ui.touch-punch.js"></script>

<script src="<?php echo base_url()?>Assets/admin_Assets/js/modernizr.js"></script>

<script src="<?php echo base_url()?>Assets/admin_Assets/js/bootstrap.min.js"></script>

<script src="<?php echo base_url()?>Assets/admin_Assets/js/jquery.cookie.js"></script>

<script src='<?php echo base_url()?>Assets/admin_Assets/js/fullcalendar.min.js'></script>

<script src='<?php echo base_url()?>Assets/admin_Assets/js/jquery.dataTables.min.js'></script>

<script src="<?php echo base_url()?>Assets/admin_Assets/js/excanvas.js"></script>
<script src="<?php echo base_url()?>Assets/admin_Assets/js/jquery.flot.js"></script>
<script src="<?php echo base_url()?>Assets/admin_Assets/js/jquery.flot.pie.js"></script>
<script src="<?php echo base_url()?>Assets/admin_Assets/js/jquery.flot.stack.js"></script>
<script src="<?php echo base_url()?>Assets/admin_Assets/js/jquery.flot.resize.min.js"></script>

<script src="<?php echo base_url()?>Assets/admin_Assets/js/jquery.chosen.min.js"></script>

<script src="<?php echo base_url()?>Assets/admin_Assets/js/jquery.uniform.min.js"></script>

<script src="<?php echo base_url()?>Assets/admin_Assets/js/jquery.cleditor.min.js"></script>

<script src="<?php echo base_url()?>Assets/admin_Assets/js/jquery.noty.js"></script>

<script src="<?php echo base_url()?>Assets/admin_Assets/js/jquery.elfinder.min.js"></script>

<script src="<?php echo base_url()?>Assets/admin_Assets/js/jquery.raty.min.js"></script>

<script src="<?php echo base_url()?>Assets/admin_Assets/js/jquery.iphone.toggle.js"></script>

<script src="<?php echo base_url()?>Assets/admin_Assets/js/jquery.uploadify-3.1.min.js"></script>

<script src="<?php echo base_url()?>Assets/admin_Assets/js/jquery.gritter.min.js"></script>

<script src="<?php echo base_url()?>Assets/admin_Assets/js/jquery.imagesloaded.js"></script>

<script src="<?php echo base_url()?>Assets/admin_Assets/js/jquery.masonry.min.js"></script>

<script src="<?php echo base_url()?>Assets/admin_Assets/js/jquery.knob.modified.js"></script>

<script src="<?php echo base_url()?>Assets/admin_Assets/js/jquery.sparkline.min.js"></script>

<script src="<?php echo base_url()?>Assets/admin_Assets/js/counter.js"></script>

<script src="<?php echo base_url()?>Assets/admin_Assets/js/retina.js"></script>

<script src="<?php echo base_url()?>Assets/admin_Assets/js/custom.js"></script>
<!-- end: JavaScript-->

</body>
</html>
