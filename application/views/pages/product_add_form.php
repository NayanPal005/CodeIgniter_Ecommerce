
<?php echo validation_errors() ; ?>
<div class="box-content">
    <form action="category-add" method="post" style="border:1px solid #ccc; align-self: center;">
        <div class="container">
            <h1 style="text-align: center">Add Product Category</h1>

            <hr>

            <label for="name"><b>Category Name</b></label>
            <input type="text" placeholder="Enter Category Name" name="category_name" value="<?php echo  set_value('category_name') ?>" required>



            <label for="description"><b>category Long Description</b></label>
            <input type="text" placeholder="Enter Category Long Description " value="<?php echo  set_value('category_long_description') ?>" name="category_long_description" required>

            <label for="description"><b>category Short Description</b></label>
            <input type="text" placeholder="Enter Category Short Description " value="<?php echo  set_value('category_short_description') ?>" name="category_short_description" required>






            <div class="clearfix">
                <button type="button" class="cancelbtn">Cancel</button>
                <button type="submit" class="signupbtn">ADD</button>
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