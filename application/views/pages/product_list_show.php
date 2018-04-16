
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
        <th style="color: palegreen">Product Long Des</th>
        <th style="color: firebrick">Product Short DeS</th>
        <th style="color: indigo">Product Quantity</th>
        <th style="color: orangered">Product Category</th>
        <th style="color: mediumseagreen">Action</th>
    </tr>
    </thead>
    <tbody>


    <?php foreach ($product_details as $product_details){ ?>

    <tr>


        <td><?php echo  $product_details->product_id; ?></td>
        <td><?php echo  $product_details->product_name; ?></td>
        <td><?php echo  $product_details->product_long_description; ?></td>
        <td><?php echo  $product_details->product_short_description; ?></td>
        <td><?php echo  $product_details->product_quantity; ?></td>
        <td><?php echo  $product_details->product_category; ?></td>




        <td>
            <a class="btn btn-success">Update</a>
            <a class="btn btn-danger">Delete</a>

        </td>

        <?php } ?>

    </tr>

    </tbody>

</table>

