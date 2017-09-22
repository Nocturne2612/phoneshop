<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use frontend\widgets\mainMenuWidget;
use frontend\widgets\categoryWidget;
use frontend\widgets\sliderWidget;
use frontend\widgets\searchProductWidget;
use frontend\widgets\yourCartWidget;
use frontend\widgets\topbarWidget;
use frontend\widgets\featuredWidget;
use frontend\widgets\newArrivalsWidget;
use frontend\widgets\hotDealsWidget;
use frontend\widgets\specialOfferWidget;
use frontend\widgets\latestNewsWidget;
use frontend\widgets\clientsSayWidget;
use frontend\widgets\randomWidget;
use frontend\widgets\bestsellerWidget;
use frontend\widgets\hotSaleWidget;
use frontend\widgets\topCategoriesWidget;
use frontend\widgets\popularBrandWidget;
use frontend\widgets\footerWidget;



AppAsset::register($this);
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <div class="header">
        <?= topbarWidget::widget() ?>
        <!-- /.topbar -->
        <div class="header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <a href="<?php Yii::$app->homeUrl ?>" class="logo"><img src="frontend/web/common/images/logo.png" alt=""></a>
                    </div>
                    <div class="col-md-9">
                        <div class="support-client">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="box-container time">
                                        <div class="box-inner">
                                            <h2>working time</h2>
                                            <p>Mon- Sun: 8.00 - 18.00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="box-container free-shipping">
                                        <div class="box-inner">
                                            <h2>Free shipping</h2>
                                            <p>On order over $199</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="box-container money-back">
                                        <div class="box-inner">
                                            <h2>Money back 100%</h2>
                                            <p>Within 30 Days after delivery</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.support-client -->
                        <?= searchProductWidget::widget() ?>
                        
                        <?= yourCartWidget::widget() ?>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="mega-container visible-lg visible-md">
                            <?= categoryWidget::widget() ?>
                        </div>
                    </div>
                    <?= mainMenuWidget::widget() ?>
                </div>
            </div>
 
            <nav class="navbar navbar-primary navbar-static-top hidden-lg hidden-md">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h2 class="navbar-brand visible-xs">Menu</h2>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Home</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Computer <span class="fa fa-angle-down"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Desktop PC</a></li>
                                    <li><a href="#">Notebook</a></li>
                                    <li><a href="#">Gaming</a></li>
                                    <li><a href="#">Mouse &amp; Keyboard</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Camera <span class="fa fa-angle-down"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Walkera</a></li>
                                    <li><a href="#">Fpv System &amp; Parts</a></li>
                                    <li><a href="#">RC Cars &amp; Parts</a></li>
                                    <li><a href="#">Helicopters &amp; Part</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Smart Phone <span class="fa fa-angle-down"></span></a>                                   <ul class="dropdown-menu">
                                <li><a href="#">Accessories for iPhone</a></li>
                                <li><a href="#">Accessories for iPad</a></li>
                                <li><a href="#">Accessories for Tablet PC</a></li>
                                <li><a href="#">Tablet PC</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Electtronic <span class="fa fa-angle-down"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Batteries &amp; Chargers</a></li>
                                <li><a href="#">Headphone, Headset</a></li>
                                <li><a href="#">Home Audio</a></li>
                                <li><a href="#">Mp3 Player Accessories</a></li>
                            </ul>
                        </li>
                        <li><a href="#">New Arrivals</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container -->
        </nav>
    </div><!-- /.header-bottom -->
</div><!-- /.header -->

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

<?= footerWidget::widget() ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
