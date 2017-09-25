<?php 
// echo "<pre>";
// print_r($queryRandom);
// die();

 ?>
<div class="featuredproductslider-container"> 
    <div class="title-group1"><h2>Featured</h2></div>
    <div id="featured-products" class="owl-container">

        <div class="owl">

        <?php  
            foreach ($data as $value) {   
        ?> 

            <div class='productslider-item item'>
                <div class="item-inner">
                    <div class="images-container">
                        <div class="product_icon">
                            <div class='new-icon'><span>new</span></div>
                        </div>
                        <a href="<?= Yii::$app->homeUrl.'product/detail?id='.$value['proId']?>" title="<?php echo $value["proName"] ?>" class="product-image">
                            <img width="195" height="231" src="<?php echo $value["images"] ?>" alt="<?php echo $value["proName"] ?>" />
                        </a>
                        <div class="box-hover">
                            <ul class="add-to-links">
                                <li><a href="#" class="link-quickview">Quick View</a></li>
                                <li><a href="#" class="link-wishlist">Add to Wishlist</a></li>
                                <li><a href="#" class="link-compare">Add to Compare</a></li>
                                <li><a href="#" class="link-cart">Add to Cart</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="des-container">
                        <h2 class="product-name"><a href="<?= Yii::$app->homeUrl.'product/detail?id='.$value['proId']?>" title="<?php echo $value["proName"] ?>"><?php echo $value["proName"] ?></a></h2>
                        <div class="price-box">
                            <p class="special-price">
                                <span class="price-label">Special Price</span>
                                <span class="price">$<?php echo $value["saleOf"] ?>.00</span>
                            </p>
                            <p class="old-price">
                                <span class="price-label">Regular Price: </span>
                                <span class="price">$<?php echo $value["price"] ?>.00</span>
                            </p>
                        </div>
                        <div class="ratings">
                            <div class="rating-box">
                                <div class="rating" style="width:67%"></div>
                            </div>
                            <!-- <span class="amount"><a href="#">3 Review(s)</a></span> -->
                        </div>
                    </div>
                </div>
            </div>

        <?php } ?>

        </div>

    </div>
</div>