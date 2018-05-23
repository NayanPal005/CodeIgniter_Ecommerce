<h1 style="color: deeppink; text-align: center ">Invoice INFO</h1>
<table class="table table-bordered">

    <thead>
    <tr>

        <th style="color: blue">Order ID</th>
        <th style="color: #97310e">Customer Name</th>
        <th style="color: red">Customer Number</th>
        <th style="color: firebrick">Customer Address</th>
        <th style="color: firebrick">Shipping id</th>
        <th style="color: firebrick">Order Status</th>
        <th style="color: red">Order Total</th>
        <th style="color: red">View Invoice</th>

        <th style="color: greenyellow">Action</th>

    </tr>
    </thead>
    <tbody>

      <?php foreach ($all_invoice as $all_invoice){?>
        <tr>
          <?php   $order_id=$all_invoice->order_id; ?>
            <td style="color: #0e90d2"><?php echo $all_invoice->order_id; ?></td>

            <td style="color: #0e90d2"><?php echo $all_invoice->customer_name;  ?></td>

            <td style="color: #985f0d"><?php echo $all_invoice->customer_number; ?></td>

            <td style="color: #0e90d2"><?php echo $all_invoice->customer_address;  ?></td>


            <td style="color: slateblue"><?php echo $all_invoice->shipping_id;  ?></td>

            <td style="color: slateblue"><?php echo $all_invoice->order_status;  ?></td>

            <td style="color: #0e90d2"><?php echo $all_invoice->order_total;  ?></td>


            <td style="color: orangered"> <a class="btn btn-hover" href="<?php echo base_url("view-invoice/$order_id")?>">Details</a></td>


            <td>
                <a class="btn btn-info" href="">
                    <i class="halflings-icon icon-edit"></i>Update
                </a>

                <a class="btn btn-danger"  href="" title="Delete">
                    <i class="halflings-icon white trash"></i>Delete
                </a>

            </td>

        </tr>
    <?php } ?>


    </tbody>

</table>

