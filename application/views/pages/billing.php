


<div class="step-one">
    <h2 class="heading">Step2 : </h2>
</div>
<div class="shopper-informations">
    <div class="row">
        <!--
        <div class="col-sm-3">
            <div class="shopper-info">
                <p>Billing $ Shopping Information</p>
                <form>
                    <input type="text" placeholder="Display Name">
                    <input type="text" placeholder="User Name">
                    <input type="password" placeholder="Password">
                    <input type="password" placeholder="Confirm password">
                </form>
                <a class="btn btn-primary" href="">Get Quotes</a>
                <a class="btn btn-primary" href="">Continue</a>
            </div>
        </div>
        -->

        <div class="col-sm-8 clearfix"><!-- eta sm-5 ciloami 8 korsi -->
            <div class="bill-to">

                <p>Billing & Shopping Information</p>

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
                <!--

                <div class="form-two">
                    <form>
                        <input type="text" placeholder="Zip / Postal Code *">

                        <select>
                            <option>-- Country --</option>
                            <option>United States</option>
                            <option>Bangladesh</option>
                            <option>UK</option>
                            <option>India</option>
                            <option>Pakistan</option>
                            <option>Ucrane</option>
                            <option>Canada</option>
                            <option>Dubai</option>
                        </select>

                        <select>
                            <option>-- State / Province / Region --</option>
                            <option>United States</option>
                            <option>Bangladesh</option>
                            <option>UK</option>
                            <option>India</option>
                            <option>Pakistan</option>
                            <option>Ucrane</option>
                            <option>Canada</option>
                            <option>Dubai</option>
                        </select>
                        <input type="password" placeholder="Confirm password">
                        <input type="text" placeholder="Phone *">
                        <input type="text" placeholder="Mobile Phone">
                        <input type="text" placeholder="Fax">
                    </form>
                </div>
                -->

            </div>
        </div>
        <!--
        <div class="col-sm-4">
            <div class="order-message">
                <p>Shipping Order</p>
                <textarea name="message"  placeholder="Notes about your order, Special Notes for Delivery" rows="16"></textarea>
                <label><input type="checkbox"> Shipping to bill address</label>
            </div>
        </div>
        -->
    </div>
</div>
<!--
<div class="step-one">
    <h2 class="heading">Step4</h2>
</div>
<div class="payment-options">
					<span>
						<label><input type="checkbox"> Direct Bank Transfer</label>
					</span>
    <span>
						<label><input type="checkbox"> Check Payment</label>
					</span>
    <span>
						<label><input type="checkbox"> Paypal</label>
					</span>
</div>

<p style="text-align: center;">
    <a class="btn btn-primary" style="" href="">Place Bid</a>
</p>
-->
</div>
<script>
     //Selection process of country done by javascript
    document.forms['billing_info_form'].elements['country'].value="<?php echo $customer_info->country?>"

</script>
