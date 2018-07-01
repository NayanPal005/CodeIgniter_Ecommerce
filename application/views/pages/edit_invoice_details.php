
<?php
//
   //echo '<pre>';
 // print_r($all_data);
//
// // echo $all_data->order_total;
 $grabbedID= $all_data->order_id;
//
////echo  $all_data->order_total;
////echo $all_data->customer_name;
?>
<div class="box-content">

    <form action="<?php  echo base_url('invoice/edited_invoice')?> " name="edit_product_form"  method="post" style="border:1px solid #ccc; align-self: center;">

       <?php echo form_hidden('order_id',$grabbedID)?>
       <?php echo form_hidden('customer_id',$grabbedID)?>

        <div class="container">

            <h1 style="text-align: center">Edit Invoice  </h1>

            <hr>

            <label for="name"><b>Order Total</b></label>
            <input type="text"  name="order_total" value="<?php echo  $all_data->order_total;?>" >

            <label for="description"><b>Customer Name</b></label>
            <input type="text"  name="customer_name" value="<?php echo  $all_data->customer_name;?>" >

            <label for="description"><b>Customer Email</b></label>
            <input type="text" name="customer_email" value="<?php echo  $all_data->customer_email;?>"  >


            <label for="description"><b>Customer Address</b></label>
            <input type="text" name="customer_address" value="<?php  echo  $all_data->customer_address;?>" >

            <label for="description"><b>Customer Number</b></label>
            <input type="text" name="customer_number" value="<?php  echo  $all_data->customer_number;?>" >

            <label for="description"><b>Customer Fax</b></label>
            <input type="text" name="customer_fax" value="<?php  echo  $all_data->customer_fax;?>" >



            <div class="clearfix">
                <button type="button" class="cancelbtn">Cancel</button>
                <button type="submit" class="signupbtn">Update</button>
            </div>

        </div>

    </form>

</div>
