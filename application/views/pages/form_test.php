<div style="background-color:black;color:white;">

    <?php
    if (isset($message))
        echo $message;
        ?>
</div>
<?php echo validation_errors() ; ?>

<div class="box-content">
    <form action="admin-registration" method="post" style="border:1px solid #ccc; align-self: center;">
        <div class="container">
            <h1 style="text-align: center">Registration Form</h1>

            <hr>

            <label for="email"><b>Admin Name</b></label>
            <input type="text" placeholder="Enter Name" name="name" value="<?php echo  set_value('name') ?>" required>

            <?php echo form_error('name');?>

            <label for="email"><b>Admin Email</b></label>
            <input type="email" placeholder="Enter Email" value="<?php echo  set_value('email') ?>" name="email" required>

            <?php echo form_error('email');?>



            <label for="psw"><b>Admin Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" value="" required>

            <?php echo form_error('psw');?>

            <label for="psw"><b>Confirm Password</b></label>
            <input type="password" placeholder="Enter Password" name="con_psw" value="" required>

            <?php echo form_error('con_psw');?>

            <div class="clearfix">
                <button type="button" class="cancelbtn">Cancel</button>
                <button type="submit" class="signupbtn">Sign Up</button>
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