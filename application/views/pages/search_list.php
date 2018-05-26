



<?php

// print_r($product_details);
//  exit();
?>


<div class="features_items"><!--features_items-->

    <h2 class="title text-center">Available Product</h2>

    <?php  foreach ($getSearchData as $getSearchData) : ?>

        <?php $productID=$getSearchData->product_id ?>

        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="<?php echo base_url().$getSearchData->product_image?>"  height="180"  alt="" />

                        <h2>BDT <?php echo $getSearchData->product_price ?></h2>
                        <p><?php echo $getSearchData->product_short_description ?></p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        <a href="#" class="btn btn-default add-to-cart"><i class="	fa fa-bars"></i>Details</a>
                    </div>
                    <div class="product-overlay">
                        <div class="overlay-content">
                            <h2>BDT <?php echo $getSearchData->product_price ?></h2>
                            <p><?php echo $getSearchData->product_short_description ?></p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            <a href="<?php echo base_url("product-details/$productID")?>" class="btn btn-default add-to-cart"><i class="	fa fa-bars"></i>Details</a>
                        </div>
                    </div>
                </div>
                <div class="choose">
                    <ul class="nav nav-pills nav-justified">
                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                    </ul>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

</div><!--features_items-->