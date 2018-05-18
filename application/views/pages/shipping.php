<div class="step-one">
    <h2 class="heading">Step3</h2>
</div>
<div class="col-sm-8 clearfix"><!-- eta sm-5 ciloami 8 korsi -->
    <div class="bill-to">

        <p>Shipping Address</p>

        <div class="form-one">

            <form action="<?php echo base_url('update-billing')?>" method="post" name="billing_info_form">
                <input type="hidden"  name="customer_id" value="<?php echo $customer_info->customer_id;?>">
                <input type="text" placeholder="Company Name" name="customer_name" value="<?php echo $customer_info->customer_name;?>">
                <input type="email" placeholder="Email*" name="customer_email" value="<?php echo $customer_info->customer_email;?>">
                <input type="number" placeholder="Mobile" name="customer_number" value="<?php echo $customer_info->customer_name;?>">
                <input type="text" placeholder="Address" name="customer_address" value="<?php echo $customer_info->customer_address;?>">
                <input type="text" placeholder=" City" name="customer_city" value="<?php echo $customer_info->customer_city;?>">
                <select name="customer_country">
                    <option> -- Country -- </option>
                    <option value="united_states">United States</option>
                    <option value="bangladesh">Bangladesh</option>
                    <option value="uk">UK</option>
                    <option value="india">India</option>
                    <option value="pakistan">Pakistan</option>
                    <option value="canada">Canada</option>
                </select>
                <br/>
                <br/>
                <input type="text" placeholder="Zip Code *" value="<?php echo $customer_info->zip_code;?>" name="zip_code" >
                <button class="btn btn-warning" name="submit">Save & Continue</button>
            </form>

        </div>


    </div>
</div>
<!--
<div class="review-payment">
    <h2>Review & Payment</h2>
</div>

<div class="table-responsive cart_info">
    <table class="table table-condensed">
        <thead>
        <tr class="cart_menu">
            <td class="image">Item</td>
            <td class="description"></td>
            <td class="price">Price</td>
            <td class="quantity">Quantity</td>
            <td class="total">Total</td>
            <td></td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="cart_product">
                <a href=""><img src="images/cart/one.png" alt=""></a>
            </td>
            <td class="cart_description">
                <h4><a href="">Colorblock Scuba</a></h4>
                <p>Web ID: 1089772</p>
            </td>
            <td class="cart_price">
                <p>$59</p>
            </td>
            <td class="cart_quantity">
                <div class="cart_quantity_button">
                    <a class="cart_quantity_up" href=""> + </a>
                    <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                    <a class="cart_quantity_down" href=""> - </a>
                </div>
            </td>
            <td class="cart_total">
                <p class="cart_total_price">$59</p>
            </td>
            <td class="cart_delete">
                <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
            </td>
        </tr>

        <tr>
            <td class="cart_product">
                <a href=""><img src="images/cart/two.png" alt=""></a>
            </td>
            <td class="cart_description">
                <h4><a href="">Colorblock Scuba</a></h4>
                <p>Web ID: 1089772</p>
            </td>
            <td class="cart_price">
                <p>$59</p>
            </td>
            <td class="cart_quantity">
                <div class="cart_quantity_button">
                    <a class="cart_quantity_up" href=""> + </a>
                    <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                    <a class="cart_quantity_down" href=""> - </a>
                </div>
            </td>
            <td class="cart_total">
                <p class="cart_total_price">$59</p>
            </td>
            <td class="cart_delete">
                <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
            </td>
        </tr>
        <tr>
            <td class="cart_product">
                <a href=""><img src="images/cart/three.png" alt=""></a>
            </td>
            <td class="cart_description">
                <h4><a href="">Colorblock Scuba</a></h4>
                <p>Web ID: 1089772</p>
            </td>
            <td class="cart_price">
                <p>$59</p>
            </td>
            <td class="cart_quantity">
                <div class="cart_quantity_button">
                    <a class="cart_quantity_up" href=""> + </a>
                    <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                    <a class="cart_quantity_down" href=""> - </a>
                </div>
            </td>
            <td class="cart_total">
                <p class="cart_total_price">$59</p>
            </td>
            <td class="cart_delete">
                <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
            </td>
        </tr>
        <tr>
            <td colspan="4">&nbsp;</td>
            <td colspan="2">
                <table class="table table-condensed total-result">
                    <tr>
                        <td>Cart Sub Total</td>
                        <td>$59</td>
                    </tr>
                    <tr>
                        <td>Exo Tax</td>
                        <td>$2</td>
                    </tr>
                    <tr class="shipping-cost">
                        <td>Shipping Cost</td>
                        <td>Free</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td><span>$61</span></td>
                    </tr>
                </table>
            </td>
        </tr>
        </tbody>
    </table>
</div>
-->