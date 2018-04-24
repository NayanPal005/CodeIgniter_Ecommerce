
<?php

 // print_r($product_details);
//  exit();
?>

<div class="product-details"><!--product-details-->
    <div class="col-sm-5">
        <div class="view-product">
            <img src="<?php echo base_url().$product_details->product_image?>" alt="" />
            <h3>ZOOM</h3>
        </div>
        <div id="similar-product" class="carousel slide" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <a href=""><img src="images/431.png" alt=""></a>
                    <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
                    <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
                </div>
                <div class="item">
                    <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
                    <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
                    <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
                </div>
                <div class="item">
                    <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
                    <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
                    <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
                </div>

            </div>

            <!-- Controls -->
            <a class="left item-control" href="#similar-product" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="right item-control" href="#similar-product" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>

    </div>
    <div class="col-sm-7">
        <div class="product-information"><!--/product-information-->
            <img src="images/product-details/new.jpg" class="newarrival" alt="" />
            <h2><?php echo $product_details->product_name?></h2>
            <p><?php echo 'Web ID: 102'. $product_details->product_id?></p>
            <p><?php echo $product_details->product_short_description?></p>
            
           <!-- <img src="images/product-details/rating.png" alt="" /> -->
            <span>
                <span>BDT <?php echo $product_details->product_price?></span>
                <label>Product Quantity</label>
                <input type="text" value="<?php echo $product_details->product_quantity?>"/>
                <button type="button" class="btn btn-fefault cart">
                    <i class="fa fa-shopping-cart"></i>
                    Add to cart
                </button>
            </span>
            <p><b>Availability:</b>
                <?php if ($product_details->product_quantity >0){ ?>
                In Stock</p>
            <?php } else{ ?>
            <b>Out Of Stock</b>
            <?php }?>
            <p><b>Condition:</b> New</p>
            <p><b>Brand:</b><?php echo $product_details->manufacturer_name?></p>
          <!--  <a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a> -->
        </div><!--/product-information-->
    </div>
</div><!--/product-details-->