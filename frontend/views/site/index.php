<?php
use frontend\widgets\sliderWidget;
use frontend\widgets\hotDealsWidget;
use frontend\widgets\featuredWidget;
use frontend\widgets\newArrivalsWidget;
use frontend\widgets\specialOfferWidget;
use frontend\widgets\latestNewsWidget;
use frontend\widgets\clientsSayWidget;
use frontend\widgets\randomWidget;
use frontend\widgets\bestsellerWidget;
use frontend\widgets\hotSaleWidget;
use frontend\widgets\topCategoriesWidget;
use frontend\widgets\popularBrandWidget;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="main">
    <div class="container">
        <div class="row">
            <?= sliderWidget::widget() ?>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="banner-left"><a href="#"><img src="frontend/web/common/images/ads/ads-01.jpg" alt=""></a>
                    <div class="banner-content">
                        <h1>sale up to</h1>
                        <h2>20% off</h2>
                        <p>on selected products</p>
                        <a href="#">buy now</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="banner banner-double"><a href="#"><img alt="" src="frontend/web/common/images/ads/ads-02.jpg"></a></div>
                <div class="banner banner-double"><a href="#"><img alt="" src="frontend/web/common/images/ads/ads-03.jpg"></a></div>
            </div>
            <div class="col-sm-4">
                <div class="banner"><a href="#"><img alt="" src="frontend/web/common/images/ads/ads-04.jpg"></a></div>
            </div>
        </div><!-- /advertisement -->
        <div class="row">
            <div class="col-sm-3 col-left">
                
                <?= hotDealsWidget::widget() ?>
                <!-- /.timely -->
                
                <?= specialOfferWidget::widget() ?>
                    <!-- /.owl-container -->
                <!-- /.block - Special offer -->
                <?= latestNewsWidget::widget() ?>
                
                <!-- /.block - Latest News -->
                <?= clientsSayWidget::widget() ?>
                
                <!-- /.block - Clients Say -->
            </div><!-- /.col-left -->

            <div class="col-sm-9 col-right">
                <?= featuredWidget::widget() ?>
                <!-- /.featuredproductslider-container -->

                <div class="banner">
                    <a href="#"><img alt="" src="frontend/web/common/images/ads/ads-05.jpg"></a>
                </div>
                
                <?= newArrivalsWidget::widget() ?>
                <!-- /.newproductslider-container -->
                <div class="row">
                    <div class="col-smc-7">
                        <div class="banner">
                            <a href="#"><img alt="" src="frontend/web/common/images/ads/ads-06.jpg"></a>
                        </div>
                    </div>
                    <div class="col-smc-5">
                        <div class="banner">
                            <a href="#"><img alt="" src="frontend/web/common/images/ads/ads-07.jpg"></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?= randomWidget::widget() ?>
                    <?= bestsellerWidget::widget() ?>
                    <?= hotSaleWidget::widget() ?>
                    
                </div>
            </div><!-- /.col-right -->
        </div>
    </div>
</div><!-- /.main -->
<?= topCategoriesWidget::widget() ?>
<!-- /.catlist -->
<?= popularBrandWidget::widget() ?>
<!-- /.brands -->
