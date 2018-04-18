
<!--
<?php
print_r($categoryDetailsById);
?>
-->

<!--======================= this is actually the add category form=============================-->
<!--
  <?php
$grabbedId=$categoryDetailsById->category_id;
echo $grabbedId;
?>
-->
<?php echo validation_errors() ; ?>
<div class="box-content">
   <form action="<?php echo base_url('product/edited_category')?>"  method="post" style="border:1px solid #ccc; align-self: center;">

        <?php echo form_hidden('category_id',$grabbedId)?>



        <div class="container">
            <h1 style="text-align: center">Update Product Category</h1>

            <hr>

            <label for="name"><b>Category Name</b></label>

            <input type="text" placeholder="Enter Category Name" name="category_name" value="<?php echo  $categoryDetailsById->category_name?>"  required>



            <label for="description"><b>category Long Description</b></label>

           <input type="text" placeholder="Enter Category Long Description "  name="category_long_description" value="<?php echo  $categoryDetailsById->category_short_description?>" required>



            <label for="description"><b>category Short Description</b></label>

          <input type="text" placeholder="Enter Category Short Description "  name="category_short_description" value="<?php echo $categoryDetailsById->category_long_description ?>" required>


            <div class="clearfix">
                <button type="button" class="cancelbtn">Cancel</button>
                <button type="submit" class="signupbtn">Update</button>
            </div>
        </div>
    </form>

</div>
<div class="modal hide fade" id="myModal">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3>Settings</h3>
    </div>
    <div class="modal-body">
        <p>Here settings can be configured...</p>
    </div>
    <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">Close</a>
        <a href="#" class="btn btn-primary">Save changes</a>
    </div>
</div>
