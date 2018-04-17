

<?php echo validation_errors() ; ?>
<?php  print_r($manufacturerDetailsById) ?>

<div class="box-content">

    <form action="save-add-manufacturer-form" enctype="multipart/form-data" method="post" style="border:1px solid #ccc; align-self: center;">

        <div class="container">

            <h1 style="text-align: center">Edit Manufacturer </h1>
            <hr>
            <label for="name"><b>Manufacturer  Name</b></label>
            <input type="text" placeholder="Enter Manufacturer Name" name="manufacturer_name" value="<?php echo  $manufacturerDetailsById->manufacturer_name; ?>"   required>

            <label for="description"><b>Manufacturer Short Description</b></label>
            <input type="text" placeholder="Enter manufacturer Short Description " name="manufacturer_short_description" value="<?php echo  $manufacturerDetailsById->manufacturer_short_description; ?>"  required>

            <label for="description"><b>Manufacturer Long Description</b></label>
            <input type="text" placeholder="Enter manufacturer Long Description " value="<?php echo  $manufacturerDetailsById->manufacturer_long_description; ?>"  required>


            <!--
            <div class="control-group">
                <label class="control-label" for="selectError3">Manufacturer Category</label>
                <div class="controls">
                    <select name="manufacturer_category" id="selectError3">

                        <?php foreach ($get_all_active_category as $get_all_active_category){ ?>

                            <option value="<?php echo $get_all_active_category->category_id ?>">
                                <?php echo $get_all_active_category ->category_name; ?></option>

                        <?php } ?>
                    </select>
                </div>
            </div>
            -->

            <div class="clearfix">
                <button type="button" class="cancelbtn">Cancel</button>
                <button type="submit" class="signupbtn">ADD</button>
            </div>

        </div>

    </form>

</div>
