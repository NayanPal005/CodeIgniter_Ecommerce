


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
                    <th>Username</th>
                    <th>Date registered</th>
                    <th>Role</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Dennis Ji</td>
                    <td class="center">2012/01/01</td>
                    <td class="center">Member</td>
                    <td class="center">
                        <span class="label label-success">Active</span>
                    </td>
                </tr>
                <tr>
                    <td>Dennis Ji</td>
                    <td class="center">2012/02/01</td>
                    <td class="center">Staff</td>
                    <td class="center">
                        <span class="label label-important">Banned</span>
                    </td>
                </tr>
                <tr>
                    <td>Dennis Ji</td>
                    <td class="center">2012/02/01</td>
                    <td class="center">Admin</td>
                    <td class="center">
                        <span class="label">Inactive</span>
                    </td>
                </tr>
                <tr>
                    <td>Dennis Ji</td>
                    <td class="center">2012/03/01</td>
                    <td class="center">Member</td>
                    <td class="center">
                        <span class="label label-warning">Pending</span>
                    </td>
                </tr>
                <tr>
                    <td>Dennis Ji</td>
                    <td class="center">2012/01/21</td>
                    <td class="center">Staff</td>
                    <td class="center">
                        <span class="label label-success">Active</span>
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
                    <th>Username</th>
                    <th>Date registered</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>

                <tr>
                    <td>Dennis Ji</td>
                    <td class="center">2012/03/01</td>
                    <td class="center">Member</td>
                    <td class="center">
                        <span class="label label-warning">Pending</span>
                    </td>
                    <td class="center">
                        <a class="btn btn-success" href="#">
                            <i class="halflings-icon white zoom-in"></i>
                        </a>
                        <a class="btn btn-info" href="#">
                            <i class="halflings-icon white edit"></i>
                        </a>
                        <a class="btn btn-danger" href="#">
                            <i class="halflings-icon white trash"></i>

                        </a>
                    </td>
                </tr>

                </tbody>
            </table>
        </div>
    </div><!--/span-->

</div><!--/row-->