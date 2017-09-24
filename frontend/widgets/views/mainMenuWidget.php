<?php  
    use frontend\models\Category;
    use frontend\models\NewsCategory;

    $cat = new Category();
    $catNULL = $cat->getCategory();
    $catParent = $cat->getCategoryBy();

    $new = new NewsCategory();
    $catNew = $new->getNewsBy();
    $catNewNull = $new->getNews();

    // echo "<prE>";
    // print_r($catNewNull);
    // die;
?>
<div class="col-md-9">
    <ul class="menu clearfix visible-lg visible-md">
        <li><a href="<?=Yii::$app->homeUrl?>">Home</a></li>
        
        <?php  
            foreach ($catNULL as $value) {
        ?>
        <li>
            <a href="javascript:void(0)"><?php echo $value["catName"] ?></a>
            <?php  
                $catSub = $cat->getCategoryBy();
               
                if($catSub){
            ?>
                <ul class="sub-menu">
                    <?php  
                        foreach ($catSub as $val) {
                    ?>
                        <li><a href="<?=Yii::$app->homeUrl?>product/listproduct?id=<?php echo $val["catId"] ?>"><?php echo $val["catName"] ?></a></li>
                    <?php } ?> 
                </ul>

            <?php } ?>

        </li>

        <?php } ?>

       <!--  Category News -->
        <?php  
            foreach ($catNewNull as $value) {
        ?>
        <li>
            <a href="<?=Yii::$app->homeUrl?>new/<?php echo $value["newsCatId"] ?>"><?php echo $value["newsCatName"] ?></a>
            <?php  
                $catSubNew = $new->getNewsBy();
               
                if($catSubNew){
            ?>
                <ul class="sub-menu">
                    <?php  
                        foreach ($catSubNew as $val) {
                    ?>
                        <li><a href="<?=Yii::$app->homeUrl?>new/<?php echo $val["newsCatId"] ?>"><?php echo $val["newsCatName"] ?></a></li>
                    <?php } ?> 
                </ul>

            <?php } ?>

        </li>

        <?php } ?>


        <li><a href="detail.html">Contact</a></li>
    </ul>
    
</div>