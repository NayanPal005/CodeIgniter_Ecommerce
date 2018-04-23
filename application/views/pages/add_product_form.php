<!--

<?php

print_r($getManufacturerDetails);

?>
-->
<!--
<?php

print_r($get_all_active_category);

?>
-->
<?php echo validation_errors() ; ?>
<div class="box-content">
    <form action="save-add-product-form" enctype="multipart/form-data" method="post" style="border:1px solid #ccc; align-self: center;">
        <div class="container">
            <h1 style="text-align: center">Add Product </h1>
            <hr>
            <label for="name"><b>Product Name</b></label>
            <input type="text" placeholder="Enter Product Name" name="product_name"  required>

            <label for="name"><b>Product Price</b></label>
            <input type="text" placeholder="Enter Product Price" name="product_price"  required>

            <label for="description"><b>Product Long Description</b></label>
            <input type="text" placeholder="Enter Product Long Description "  name="product_long_description" >

            <label for="description"><b>Product Short Description</b></label>
            <input type="text" placeholder="Enter Product Short Description "  name="product_short_description" required>
            <label for="description"><b>Product Quantity</b></label>
            <input type="text" placeholder="Enter Product Quantity "  name="product_quantity" required>

            <div class="control-group">
                <label class="control-label" for="selectError3">Product Category</label>
                    <div class="controls">
            <select name="category_id" id="selectError3">
                <?php foreach ($get_all_active_category as $get_all_active_category){ ?>

                <option value="<?php echo $get_all_active_category->category_id ?>">
                    <?php echo $get_all_active_category ->category_name; ?></option>
                <?php } ?>
            </select>
            </div>
          </div>
            <div class="control-group">
                <label class="control-label" for="selectError3">Product Manufacturer</label>
                <div class="controls">
                    <select name="manufacturer_id" id="selectError3">
                        <?php foreach ($getManufacturerDetails as $getManufacturerDetails){ ?>

                            <option value="<?php echo $getManufacturerDetails->manufacturer_id ?>">
                                <?php echo $getManufacturerDetails ->manufacturer_name; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <label for="description"><b>Product Image</b></label>
            <input type="file" placeholder="Choose Image  "  name="product_image" >

            <label for="description"><b>Top Product</b></label>
            <input type="checkbox"  name="top_product" >

            <div class="clearfix">
                <button type="button" class="cancelbtn">Cancel</button>
                <button type="submit" class="signupbtn">ADD</button>
            </div>
        </div>
    </form>
</div>
