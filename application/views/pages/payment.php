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
        <?php foreach ($dataCART as $items): ?>


            <tr>
                <td class="cart_product">
                    <a href=""><img src="<?php echo base_url().$items['options']['image'];?>" width="100" alt=""></a>
                </td>
                <td class="cart_description">
                    <h4><a href=""><?php echo $items['name'];?></a></h4>
                    <p>Web ID: <?php echo $items['id'];?></p>
                </td>
                <td class="cart_price">
                    <p><?php echo 'BDT'. "\n". $items['price'];?></p>
                </td>
                <td class="cart_quantity">
                    <div class="cart_quantity_button">
                        <form action="<?php echo base_url('update-cart-product-quantity')?>" method="post">

                            <input class="cart_quantity_input" type="text" name="qty" value="<?php echo $items['qty'];?>" autocomplete="off" size="2">

                            <input type="hidden" name="rowid" value="<?php echo $items['rowid'];?>" autocomplete="off" size="2">

                            <input class="btn btn-warning" type="submit" value="update">

                        </form>

                    </div>
                </td>
                <td class="cart_total">
                    <p class="cart_total_price"><?php echo 'BDT'. "\n". $items['subtotal'];?></p>
                </td>
                <td class="cart_delete">
                    <a class="cart_quantity_delete" href="<?php echo base_url(); ?>delete-to-cart/<?php echo $items['rowid'];?>"><i class="fa fa-times"></i></a>
                </td>
            </tr>

            <?php
        endforeach; ?>

        </tbody>
    </table>
</div>
</div>


<section id="do_action">
    <div class="container">
        <div class="row">


            <div class="col-sm-12">
                <div class="total_area">
                    <ul>
                        <li>Cart Sub Total <span><?php echo 'BDT'. "\n". $this->cart->total();?></span></li>
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
        <div class="radio disabled">
            <label><input type="radio" name="payment_type" value="cash_on" >CASH ON/BIKASH</label>
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