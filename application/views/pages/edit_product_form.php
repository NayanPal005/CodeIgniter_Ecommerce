<?php echo validation_errors() ;

$grabbedID=$getDetailsById->product_id;

//echo $grabbedID;
?>
<div class="box-content">
    <form action="<?php echo base_url('product/edited_product_details') ?>" name="edit_product_form" enctype="multipart/form-data" method="post" style="border:1px solid #ccc; align-self: center;">
        <?php echo form_hidden('product_id',$grabbedID)?>
        <div class="container">
            <h1 style="text-align: center">Edit Product </h1>
            <hr>

            <label for="name"><b>Product Name</b></label>
            <input type="text" placeholder="Enter Product Name" name="product_name" value="<?php echo $getDetailsById->product_name?>" required>

            <input type="hidden"  name="product_id" value="<?php echo $getDetailsById->product_id?>" required>
            <label for="name"><b>Product Price</b></label>

            <input type="text" placeholder="Enter Product Price" name="product_price" value="<?php echo $getDetailsById->product_price?>" required>
            <label for="description"><b>Product Long Description</b></label>

            <input type="text" value="<?php echo $getDetailsById->product_long_description?>" placeholder="Enter Product Long Description "  name="product_long_description" required>
            <label for="description"><b>Product Short Description</b></label>

            <input type="text" placeholder="Enter Product Short Description "  name="product_short_description" value="<?php echo $getDetailsById->product_short_description?>" required>

            <div class="control-group">
                <label class="control-label" for="selectError3">Product Manufacturer</label>
                <div class="controls">
                    <select name="manufacturer_id" id="selectError3">
                        <?php foreach ($getManufacturerDetails as $getManufacturerDetails){

                            if($getDetailsById->manufacturer_id == $getManufacturerDetails->manufacturer_id){?>

                            <option value="<?php echo $getManufacturerDetails->manufacturer_id ?>" selected>
                                <?php echo $getManufacturerDetails ->manufacturer_name; ?></option>
                                <?php } else {?>
                                <option value="<?php echo $getManufacturerDetails->manufacturer_id ?>">
                                    <?php echo $getManufacturerDetails ->manufacturer_name; ?></option>
                        <?php } } ?>
                    </select>
                </div>
            </div>

            <!--
            <div class="control-group">
                <label class="control-label" for="selectError3">Product Manufacturer</label>
                <div class="controls">
                    <select name="manufacturer_id" id="selectError3">
                        <?php foreach ($getManufacturerDetails as $getManufacturerDetails){

                if($getDetailsById->manufacturer_id == $getManufacturerDetails->manufacturer_id){?>

                            <option value="<?php echo $getManufacturerDetails->manufacturer_id ?>" selected>
                                <?php echo $getManufacturerDetails ->manufacturer_name; ?></option>
                                <?php } else {?>
                                <option value="<?php echo $getManufacturerDetails->manufacturer_id ?>">
                                    <?php echo $getManufacturerDetails ->manufacturer_name; ?></option>
                        <?php } } ?>
                    </select>
                </div>
            </div>

            -->
            <!--          compare between category_id(Product tbale and manufacture table) -->

            <div class="control-group">
                <label class="control-label" for="selectError3">Product Category</label>
                <div class="controls">
                    <select name="category_id" id="selectError3">
                        <?php foreach ($get_all_active_category as $get_all_active_category){
 /* product table er category id jodi category table er category id soman hole selected otherwise slected tkbe na        */
                            if($getDetailsById->category_id==$get_all_active_category->category_id) {?>

                            <option value="<?php echo $get_all_active_category->category_id ?>" selected>
                                <?php echo $get_all_active_category ->category_name; ?></option>
                        <?php } else {?>
                        <option value="<?php echo $get_all_active_category->category_id ?>">
                            <?php echo $get_all_active_category ->category_name; ?></option>
                        <?php } }?>

                    </select>
                </div>
            </div>
              <!--
            <div class="control-group">
                <label class="control-label" for="selectError3">Product Category</label>
                <div class="controls">
                    <select name="category_id" id="selectError3">
                        <?php foreach ($get_all_active_category as $get_all_active_category): ?>
                            <option value="<?php echo $get_all_active_category->category_id ?>">
                                <?php echo $get_all_active_category ->category_name; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
             -->
            <label for="description"><b>Product Quantity</b></label>
            <input type="text" value="<?php echo $getDetailsById->product_quantity?>" placeholder="Enter Product Quantity "  name="product_quantity"  required>

            <label for="description"><b>Product Image</b></label>
            <input type="file" placeholder="Choose Image  " name="product_image" >
            <img src="<?php echo base_url().$getDetailsById->product_image?>" width="50" height="50">

            <input type="hidden" name="productOld_image" value="<?php echo $getDetailsById->product_image?>">

            <label for="description"><b>Top Product</b></label>
            <?php if($getDetailsById->top_product==1){?>
            <input type="checkbox"  name="top_product" checked >
              <?php } else { ?>
            <input type="checkbox"  name="top_product" >
             <?php }   ?>


            <div class="clearfix">
                <button type="button" class="cancelbtn">Cancel</button>
                <button type="submit" class="signupbtn">Update</button>
            </div>
        </div>
    </form>
</div>

<!--
<script>

    document.forms['edit_product_form'].elements['category_id'].value="<?php echo $get_all_active_category->category_id ?>"
    document.forms['edit_product_form'].elements['manufacturer_id'].value="<?php echo $getManufacturerDetails->manufacturer_id ?>"

</script>
 -->