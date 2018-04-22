


       <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                        <li data-target="#slider-carousel" data-slide-to="2"></li>
                    </ol>
         <!--  <?php  print_r($all_top_product);?> -->
                    <div class="carousel-inner">
                        <?php
                        $i=1;
                        foreach ($all_top_product as $all_top_product){
                        if ($i==1) {

                            echo "<div class='item active'>";
                        }
                        else{
                            echo "<div class='item'>";
                        }
                        ?>
                            <div class="col-sm-6">
                                <h1><?php echo $all_top_product->product_name?></h1>
                                <h2><?php echo $all_top_product->product_short_description?></h2>
                                <p><?php echo $all_top_product->product_long_description?> </p>
                                <button type="button" class="btn btn-default get">Get it now</button>
                            </div>

                            <div class="col-sm-6">
                                <img src="<?php echo base_url().$all_top_product->product_image?>" class="girl img-responsive" alt="" />
                            </div>
                        </div>
                    <?php $i++; }?>
                    </div>
                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
       </div>


