<?php 
    use yii\widgets\LinkPager;
?>   
<div class="breadcrumbs">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="<?php echo Yii::$app->homeUrl ?>">Home</a></li>
            <li class="active">News</li> 
        </ul>
    </div>
</div>

<div class="main">
    <div class="container">
        <div class="row"> 
            <div class="col-sm-12">
                <ol id="products-list" class="blog-list">
                <?php 
                    foreach ($data as $key => $value) {
                        
                ?>
                    <li class="item">
                        <div class="item-inner">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="images-container">
                                        <a class="product-image" title="Fusce aliquam" href="<?=Yii::$app->homeUrl?>news/detailnew?id=<?php echo $value["newsId"] ?>" rel="author"><img alt="Fusce aliquam" src="<?php echo Yii::$app->homeUrl. $value["image"] ?>"></a>
                                    </div>
                                </div>
                                <div class="col-sm-9">
                                    <h2 class="product-name"><a title="<?php echo $value['name'] ?>" href="<?=Yii::$app->homeUrl?>news/detailnew?id=<?php echo $value["newsId"] ?>"><?php echo $value['name'] ?></a></h2>
                                    <div class="ratings">
                                        <div class="rating-box">
                                            <div style="width:67%" class="rating"></div>
                                        </div>
                                        <span class="amount"><a href="#">1 Review(s)</a></span>
                                        <span class="separator">|</span>
                                        <span class="comment-amount"><a href="#">4 comment</a></span>
                                    </div>
                                    <div class="blog-attr">
                                        <span>Post by <?php echo $value['author'] ?>|</span>
                                        <!-- <span class="separator">|</span> -->
                                        <span>
                                        <?php 
                                            $result = date("d-m-Y",($value["dateCreate"]));
                                            echo $result;
                                        ?>
                                            
                                        </span>
                                    </div>
                                    <div class="desc" >
                                      <p style="font-size: 15px; color: black; font-family:area;"><?php echo $value['summary'] ?></p>
                                   </div>
                                   <a href="<?=Yii::$app->homeUrl?>news/detailnew?id=<?php echo $value["newsId"] ?>" class="btn btn-default btn-readmore">Read more</a>
                               </div>
                               <!-- phân trang mặc định của yii2 -->
                                
                           </div>
                       </div>
                   </li>
                <?php } ?>
               </ol>
            </div>

        </div>
        <div class="row">
            <div class="col-sm-9 col-sm-offset-3">
                <?php 
                    echo LinkPager::widget([
                        'pagination' => $pages,
                        'firstPageLabel' => 'Trang đầu',
                        'lastPageLabel' => 'Trang Cuối',
                        'prevPageLabel' => 'Lùi',
                        'nextPageLabel' => 'Tiếp',
                        'maxButtonCount' => 5,
                    ]);
                ?>
            </div> 
        </div>
    </div>
</div><!-- /.main -->


<!-- <script type="text/javascript">
    $(document).ready(function(){
        /* recent-post slider */
        $("#recent-post .owl").owlCarousel({
            autoPlay : false,
            items : 1,
            itemsDesktop : [1199,1],
            itemsDesktopSmall : [991,1],
            itemsTablet: [767,2],
            itemsMobile : [480,1],
            slideSpeed : 3000,
            paginationSpeed : 3000,
            rewindSpeed : 3000,
            navigation : true,
            stopOnHover : true,
            pagination : false,
            scrollPerPage:true,
        });
    });
</script> -->
