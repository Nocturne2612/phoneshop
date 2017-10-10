<div class="col-sm-4">
    <div class="title-group"><h2>Random</h2></div>
    <div class="product-list">
    <?php  
        foreach ($queryRandom as $value) {   
    ?> 
        <div class="products-grid">
            <div class="images-container">
                <a class="product-image" title="<?php echo $value["proName"] ?> " href="<?= Yii::$app->homeUrl.'product/detail?id='.$value['proId']?>"><img alt="<?php echo $value["proName"] ?>" src="<?php echo Yii::$app->homeUrl. $value["images"] ?>"></a>
            </div>
            <div class="des-container">
                <h2 class="product-name"><a title="<?php echo $value["proName"] ?> " href="<?= Yii::$app->homeUrl.'product/detail?id='.$value['proId']?>"><?php echo $value["proName"] ?> </a></h2>
                <div class="ratings">
                    <div class="rating-box">
                        <div style="width:67%" class="rating"></div>
                    </div>
                    <!-- <span class="amount"><a href="#">1 Review(s)</a></span> -->
                </div>
                <div class="price-box">
                    <p class="special-price">
                        <span class="price">$<?php echo $value["saleOf"] ?></span>
                    </p>
                    <p class="old-price">
                        <span class="price">$<?php echo $value["price"] ?></span>
                    </p>
                </div>
            </div>
        </div>
    <?php } ?>
    </div><!-- /.product-list -->
</div>