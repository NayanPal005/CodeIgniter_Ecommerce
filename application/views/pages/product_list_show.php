




<?php
$message=$this->session->message;
if (isset($message)){
    echo $message;
    $this->session->unset_userdata('message');
}

?>


<h1 style="color: deeppink; text-align: center ">Product List</h1>
<table class="table table-bordered">

    <thead>
    <tr>
        <th style="color: #97310e">Product ID</th>
        <th style="color: blue">Product Name</th>
        <th style="color: black">Product Price</th>
        <th style="color: dimgrey">Product Image</th>
       <!-- <th style="color: palegreen">Product Long Des</th> -->
     <!--   <th style="color: firebrick">Product Short DeS</th> -->
     <!--   <th style="color: indigo">Product Quantity</th> -->
      <!--  <th style="color: orangered">Product Category</th> -->
        <th style="color: orangered">Manufacturer</th>
        <th style="color: fuchsia">Status</th>
        <th style="color: mediumseagreen">Action</th>
    </tr>
    </thead>
    <tbody>


    <?php foreach ($product_details as $product_details){ ?>

 <tr>
        <td><?php echo  $product_details->product_id; ?></td>
        <td><?php echo  $product_details->product_name; ?></td>
     <td><?php echo  $product_details->product_price; ?></td>
       <td>
           <img src="<?php echo base_url().$product_details->product_image?>" height="100" width="100">

       </td>


     <!--  <td><?php echo  $product_details->product_long_description; ?></td> -->
   <!--   <td><?php echo  $product_details->product_short_description; ?></td> -->
    <!--    <td><?php echo  $product_details->product_quantity; ?></td> -->
    <!--    <td><?php echo  $product_details->category_id; ?></td> -->

        <td><?php echo  $product_details->manufacturer_id; ?></td>
      <!--   <td><?php echo  $product_details->product_status; ?></td> -->
        <td>

            <?php
            if ($product_details->product_status==1){
                echo "Active";
            }
            else if ($product_details->product_status==2)
                echo "Inactive";

            else
                echo 'Deleted';

            ?>


        </td>
        <td>

            <?php if ($product_details->product_status==1) { ?><!-- ekn active ache,,inactive korbo status er value 2 kore   -->
             <a class="btn btn-success" href="<?php echo base_url("change-product-status/2/$product_details->product_id")?>" title="Inactive">
                 <i class="halflings-icon thumbs-up"></i>
             </a>


            <?php } else if (($product_details->product_status==2)) { ?> <!-- ekn inactive ache,,active korbo status er value 1 kore   -->
             <a class="btn btn-danger" href="<?php echo base_url("change-product-status/1/$product_details->product_id")?>" title="Active">
                 <i class="halflings-icon thumbs_down"></i>
             </a>
            <?php } ?>

            <?php if  ($product_details->product_status==1) { ?>

                 <a class="btn btn-danger"  href="<?php echo base_url("change-product-status/3/$product_details->product_id")?>" title="Delete">
                     <i class="halflings-icon white trash"></i>
                 </a>
            <?php } ?>
     <a class="btn btn-success" title="Update" href="<?php echo base_url("edit-product/$product_details->product_id") ?>"> <!-- This is  update -->
         <i class="halflings-icon icon-edit"></i></a>

            <a class="btn btn-danger" title="Delete" href="<?php echo base_url("delete-product/$product_details->product_id") ?>">Delete</a>
        </td>
        <?php } ?>
 </tr>
    </tbody>

</table>

