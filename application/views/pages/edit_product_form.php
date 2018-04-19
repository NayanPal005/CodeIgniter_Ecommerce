<?php echo validation_errors() ;

$grabbedID=$getDetailsById->product_id;
//echo $grabbedID;
?>

<div class="box-content">
    <form action="<?php echo base_url('product/edited_product_details') ?>" enctype="multipart/form-data" method="post" style="border:1px solid #ccc; align-self: center;">

        <?php echo form_hidden('product_id',$grabbedID)?>

        <div class="container">
            <h1 style="text-align: center">Edit Product </h1>
            <hr>
            <label for="name"><b>Product Name</b></label>
            <input type="text" placeholder="Enter Product Name" name="product_name" value="<?php echo $getDetailsById->product_name?>" required>
            <label for="description"><b>Product Long Description</b></label>
            <input type="text" value="<?php echo $getDetailsById->product_long_description?>" placeholder="Enter Product Long Description "  name="product_long_description" required>

            <label for="description"><b>Product Short Description</b></label>
            <input type="text" placeholder="Enter Product Short Description "  name="product_short_description" value="<?php echo $getDetailsById->product_short_description?>" required>
            <label for="description"><b>Product Quantity</b></label>
            <input type="text" value="<?php echo $getDetailsById->product_quantity?>" placeholder="Enter Product Quantity "  name="product_quantity"  required>





            <div class="clearfix">
                <button type="button" class="cancelbtn">Cancel</button>
                <button type="submit" class="signupbtn">Update</button>
            </div>

        </div>
    </form>

</div>
