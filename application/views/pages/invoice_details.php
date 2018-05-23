


<div class="row-fluid sortable">
    <div class="box span6">
        <div class="box-header">
            <h2><i class="halflings-icon align-justify"></i><span class="break"></span>Order Information</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-condensed">
                <thead>
                <tr>
                    <th>Order ID</th>
                    <th> Order registered</th>
                    <th>Total</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>

                <tr>
                    <td><?php echo $order_info->order_id;?></td>
                    <td class="center"><?php echo $order_info->order_date_time;?></td>
                    <td class="center"><?php echo $order_info->order_total;?></td>
                    <td class="center">
                        <span class="label"><?php echo $order_info->order_status;?></span>
                    </td>
                </tr>


                </tbody>
            </table>
            <div class="pagination pagination-centered">
                <ul>
                    <li><a href="#">Prev</a></li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">Next</a></li>
                </ul>
            </div>
        </div>
    </div><!--/span-->
    <!--=====================================First Table end======================================-->
    <!--=====================================Second table START======================================-->

    <div class="box span6">
        <div class="box-header">
            <h2><i class="halflings-icon align-justify"></i><span class="break"></span>Shipping Information</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>

        <div class="box-content">
            <table class="table table-condensed">
                <thead>
                <tr>
                    <th>Shipping ID</th>
                    <th> Customer Name</th>
                    <th>Shipping Address</th>
                    <th>Zip Code</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><?php echo $shipping_info->shipping_id;?></td>
                    <td class="center"><?php echo $shipping_info->customer_name;?></td>
                    <td class="center"><?php echo $shipping_info->customer_address;?></td>
                    <td class="center">
                        <span class="label label-success"><?php echo $shipping_info->zip_code;?></span>

                </tbody>
            </table>
            <div class="pagination pagination-centered">
                <ul>
                    <li><a href="#">Prev</a></li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">Next</a></li>
                </ul>
            </div>
        </div>
    </div><!--/span-->
    <!--=====================================Second table END======================================-->


</div>







<div class="row-fluid sortable">


    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>Customer Invoice</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                <tr>
                    <th>Customer Name</th>
                    <th>Customer Number</th>
                    <th>Customer Email</th>
                    <th>Customer Fax</th>
                    <th>Shipping ID</th>
                    <th>Order Status</th>
                    <th>Total Cost</th>
                    <th>Order Registered</th>
                </tr>
                </thead>
                <tbody>

                <tr>
                    <td><?php echo $shipping_info->customer_name;?></td>
                    <td class="center"><?php echo $shipping_info->customer_number;?></td>
                    <td class="center"><?php echo $shipping_info->customer_email;?></td>
                    <td class="center"><?php echo $shipping_info->customer_fax;?></td>

                    <td><?php echo $shipping_info->shipping_id;?></td>
                    <td><?php echo $order_info->order_status;?></td>
                    <td><?php echo $order_info->order_total;?></td>
                    <td><?php echo $order_info->order_date_time;?></td>


                </tr>

                </tbody>
            </table>
        </div>
    </div><!--/span-->

</div><!--/row-->
<a class="btn btn-success" style="text-align: center">Print</a>