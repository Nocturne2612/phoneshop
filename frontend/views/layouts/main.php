<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use frontend\widgets\logoWidget;
use frontend\widgets\mainMenuWidget;
use frontend\widgets\categoryWidget;
use frontend\widgets\searchProductWidget;
use frontend\widgets\yourCartWidget;
use frontend\widgets\topbarWidget;
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

    <?php $this->beginBody() ?>
    <div class="header">
        <?= topbarWidget::widget() ?>
        <!-- /.topbar -->
        <div class="header-bottom">
            <div class="container">
                <div class="row">
                    <?= logoWidget::widget() ?>
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

<?= $content ?> <!-- nội dung bên site -->

<?= footerWidget::widget() ?>

<?php $this->endBody() ?>

<!-- <div class="modal fade" tabindex="-1" role="dialog" id="shoppingcart" style="z-index: 9999;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Shopping Cart</h4>
      </div>
      <div class="modal-body">
         <div class="row">
             <div class="col-md-6">
             <img src="" id="imgPreview"  width="195" height="231">
            </div>
            <div class="col-md-6">
                <p>Name Product: <span id="nameProduct"></span></p>
                <p>Special Price:<span id="specialPrice"></span></p>
                <p>Regular Price:<span id="regularPrice"></span></p>
            </div>
        </div>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
 -->
<script type="text/javascript">

    var urlBase = "http://localhost/phoneshop/";
    function getDistrict(id){
        $.get('<?php echo Yii::$app->homeUrl.'district/getdistrict' ?>',{'id':id},function(data){
            $('#district').html(data);
         });
        
    }
    function getWard(id){
        $.get('<?php echo Yii::$app->homeUrl.'ward/getward' ?>',{'id':id},function(data){
            $('#ward').html(data);
         });
        
    }

    function getDistrictShip(id){
        $.get('<?php echo Yii::$app->homeUrl.'district/getdistrict' ?>',{'id':id},function(data){
            $('#districtShip').html(data);
         });
        
    }
    function getWardShip(id){
        $.get('<?php echo Yii::$app->homeUrl.'ward/getward' ?>',{'id':id},function(data){
            $('#wardShip').html(data);
         });
        
    }



    function addWishlist(id){
        $.get('<?php echo Yii::$app->homeUrl.'wishlist/add' ?>',{'id':id},function(data){
            alert("Thêm Thành Công Vào Wishlist")
        });
    }

    function addCart(id){

        qty = $("#Qty").val();
        if(qty<=0){
            alert('Số lượng phải lớn hơn 0');
            
        }else{
            img = $('#img_'+ id).attr("src");
            // alert(img);
            $('#imgPreview').attr({
                'src':img,
            });

            namePro= $('#txtName_'+ id).text();
            $('#nameProduct').text(namePro);

            specialPrice= $('#specialPrice_'+ id).text();
            $('#specialPrice').text(specialPrice);

            regularPrice= $('#regularPrice_'+ id).text();
            $('#regularPrice').text(regularPrice);

            $('#shoppingcart').modal();
                $.get('<?php echo Yii::$app->homeUrl.'shopping/addcart/?id=' ?>'+id+"&qty="+qty,function(data){
                val=data.split("-");
                $(".amount").text(val[0]);
                $(".total").text(val[1]);
                // $("#qtyCart").load("http://localhost:8080/PH1704LM/yii/product/detail/"+id+" #qtyCart");
                location.reload();
            });
        }
        
    }
    function delCart(id){
         // $.get('http://localhost:8080/PH1704LM/yii/product/addcart/'+id+"?qty="+qty, function(data) {
        

        $.get('<?php echo Yii::$app->homeUrl.'shopping/delcart' ?>',{'id':id},function(data){
           //xoa sp trong cart
            val=data.split("-"); // tách làm 2 phần của giá trị echo ($cartInfo); trong shopping/cart.php
            $(".amount").text(val[0]); // gán giá trị thứ nhất
            $(".total").text(val[1]); // gán giá trị thứ hai
            $("#item_"+id).remove();
            location.reload();
        });
    }

    function updateCart(id){
        amount= $('#amount-'+id).val();
        if(amount<=0){
             alert('Số lượng phải lớn hơn 0');
        }else{
            $.get(urlBase+'shopping/updatecart', {'id': id,'amount':amount}, function(data) {
           //xoa sp trong cart
            val=data.split("-"); // tách làm 2 phần của giá trị echo ($cartInfo); trong shopping/cart.php
            $(".amount").text(val[0]); // gán giá trị thứ nhất
            $(".total").text(val[1]); // gán giá trị thứ hai
            $("#item_"+id).remove();
            // $("#listCart").load(urlBase+'shopping/viewcart','#listCart');
            location.reload();
            });       
        }
        
    }
    function searchPrice(first,last){
        first= $('#first_price').val();
        last= $('#last_price').val();
        // alert(1);
        $.get('<?php echo Yii::$app->homeUrl.'product/searchprice/?first='?>'+first+"&last="+last,function(data){
        var url = '<?php echo Yii::$app->homeUrl.'product/searchprice/?first='?>'+first+"&last="+last;
        $(location).attr('href', url);   

        });
        
    }
    function search(){
        search= $('#search').val();
        $.get('<?php echo Yii::$app->homeUrl.'product/search?search='?>'+search,function(data){
            var url = '<?php echo Yii::$app->homeUrl.'product/search?search='?>'+search;
            $(location).attr('href', url);
        });
         
       
    }
    

</script>


</html>
<?php $this->endPage() ?>
