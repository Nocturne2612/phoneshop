<?php 
    $totalAmount=$total=0;
    if (is_array($infoCart) || is_object($infoCart)){
        foreach (($infoCart) as $key => $value) {
            $totalAmount +=$value['sl']; // in ra số lượng sản phẩm mua
            $total +=$value['price'] * $value['sl']; // tính tổng số tiền mà khách hàng mua
        }
    }

 ?>


<div class="mini-cart">
    <div class="top-cart-title">
        <a href="cart.html" class="dropdown-toggle" data-toggle="dropdown">
            your cart
            <span class="price">$<span class="total"><?php echo $total; ?></span></span>
        </a>
        <div class="amount" style="position: absolute; color: red; top:5px;left: 30px; font-weight: bold; width: 15px;height: 15px; background-color: yellow; text-align: center; border-radius: 50px;"><?php echo $totalAmount ?>
            
        </div>

        <div class="dropdown-menu dropdown-menu-right">
            <div class="cart-listing">
            <?php 
                if (is_array($infoCart) || is_object($infoCart)){
                foreach (($infoCart) as $key => $value) { ?>
                <div class="media" id="item_<?= $key ?>" >
                    <div class="media-left"><a href="#"><img  id="#load" src="<?php echo Yii::$app->homeUrl. $value["images"] ?>" class="img-responsive" alt="<?php echo $value['proName'] ?>"></a></div>
                    <div class="media-body">
                        <a href="javascript:void(0)" class="remove-cart-item" onclick="delCart(<?= $key ?>)"" >&times;</a>
                        <h4><?php echo $value['proName'] ?></h4>
                        <div class="mini-cart-qty">Qty:<?php echo $value['sl'] ?></div>
                        <div class="mini-cart-price">$ <?php echo $value['sl'] * $value['price']  ?></div>
                    </div>
                </div>
            <?php }} ?>
            </div><!-- /.cart-listing -->
            <div class="mini-cart-subtotal">Total: <span class="price">$<span class="total"><?php echo $total; ?></span></span></div>
            <div class="checkout-btn">
                <a href="<?= Yii::$app->homeUrl.'shopping/checkout'?>" class="btn btn-default btn-md fwb">CHECK OUT</a>
            </div>
        </div>
    </div>
</div>