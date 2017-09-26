<?php 
use yii\helpers\Html;
 ?>
<div class="topbar">
    <div class="container">
        <div class="topbar-left">
            <ul class="topbar-nav clearfix">
                <li><span class="phone">0(123) 456 789</span></li>
                <li><span class="email">info@plazathemes.com</span></li>
            </ul>
        </div>
        <div class="topbar-right">
            <ul class="topbar-nav clearfix">
                <?php 
                if(Yii::$app->user->isGuest){

                ?>
                <li><a href="<?= Yii::$app->homeUrl.'site/login'?>" class="login">Login</a></li>
                <li><a href="<?= Yii::$app->homeUrl.'site/signup'?>" class="login">signup</a></li>
                <?php }else{ ?>
                <li><?php echo Html::a('Logout',['/site/logout'],['data-method'=> 'post']); ?></li>
                <li class="dropdown">
                    <a href="#" class="account dropdown-toggle" data-toggle="dropdown">My Account</a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a title="My Account" href="account.html">My Account</a></li>
                        <li><a title="My Wishlist" href="wishlist.html">My Wishlist</a></li>
                        <li><a title="My Cart" href="cart.html">My Cart</a></li>
                        <li><a title="Checkout" href="checkout.html">Checkout</a></li>
                        <li><a title="Testimonial" href="testimonial.html">Testimonial</a></li>
                    </ul>
                </li>
                <?php } ?>
                <li class="dropdown">
                    <a href="#" class="currency dropdown-toggle" data-toggle="dropdown">USD</a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#">Euro</a></li>
                        <li><a href="#">US Dollar</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="language dropdown-toggle" data-toggle="dropdown"><img src="frontend/web/common/images/flag-us.png" alt=""> English</a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#"><img src="frontend/web/common/images/flag-us.png" alt=""> &nbsp;English</a></li>
                        <li><a href="#"><img src="frontend/web/common/images/flag-spain.png" alt=""> &nbsp;Spanish</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- /.container -->
</div>