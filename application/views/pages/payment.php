<div class="step-one">
    <h2 class="heading">Step4 : </h2>
</div>

<div class="table-responsive cart_info" xmlns="http://www.w3.org/1999/html">
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

        <?php
        // echo '<pre>';
        //  print_r($dataCART);
        // exit(); //EKANE EXIT DIYE DILE R WELCOME_PAGE_SHOW KORBE NA

        //  $contents=$this->cart->contents();
        // print_r($contents);
        //foreach ($contents as $contents) :?>


<section id="do_action">
    <div class="container">
        <div class="row">


            <div class="col-sm-12">

                <div class="total_area">

                    <ul>

                        <?php $myAmount= $this->cart->total(); ?>

                     <!--  <li>Cart Sub Total <span><?php echo 'BDT'. "\n". $this->cart->total();?></span></li>  -->

                        <li>Cart Sub Total <span><?php echo 'BDT'. "\n". $myAmount;?></span></li>

                        <!-- This is the build in function of cart for overall total products cart price -->

                        <li>VAT 5% <span>
                                <?php $vat=($this->cart->total()*5)/100;
                                echo "BDT"."\n".$vat;
                                ?>


                            </span></li>
                        <li>Shipping Cost <span><?php
                                $shippingCost=100;
                                echo "BDT"."\n".$shippingCost;

                                ?></span></li>
                        <li>Total <span>

                                <?php $grandTotal=$this->cart->total()+$vat+$shippingCost;
                                echo  "BDT"."\n".$grandTotal;
                                ?>
                            </span></li>
                    </ul>

                <!--    <a class="btn btn-default check_out" href="<?php echo base_url('checkout')?>">Check Out</a> -->
                </div>
            </div>
            <div class="col-sm-6">

<div class="payment-options">
    <form action="<?php echo base_url('place-order')?>" method="post">
    <p><b>Please select your preferred contact method:</b></p>
    <div>
        <div class="radio">
            <label><input type="radio" name="payment_type" value="paypal">PAYPAL</label>
        </div>
        <div class="radio">
            <label><input type="radio" name="payment_type" value="ssl_commerz">SSL COMMERZ</label>
        </div>

        <div class="radio ">
            <label><input type="radio" name="payment_type"  value="cash_on" >CASH ON/BIKASH</label>
        </div>



    </div>

                <p style="text-align: center">
       <input type="submit"  class="btn btn-warning" value="Place Order">
                </p>
    </form>
</div>
    </div>
    </div>
    </div>


</section>