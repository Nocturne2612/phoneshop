<?php  
    use frontend\models\Category;
    use frontend\models\NewsCategory;

    $cat = new Category();
    $catNULL = $cat->getCategory();
    $catParent = $cat->getCategoryBy();


    $new = new NewsCategory();
    $catNew = $new->getNewsBy();
    // $catNewNull = $new->getNews();

?>
<div class="col-md-9">
    <ul class="menu clearfix visible-lg visible-md" ">
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
            foreach ($catNew  as $value) {
        ?>
        <li>
<<<<<<< HEAD
            <a href="<?=Yii::$app->homeUrl?>news/<?php echo $value["newsCatId"] ?>"><?php echo $value["newsCatName"] ?></a>
            <?php  
                if($catNews){
=======
            <a href="<?=Yii::$app->homeUrl?>news/listnew?id=<?php echo $value["newsCatId"] ?>"><?php echo $value["newsCatName"] ?></a>
            <?php  
                $catSubNew = $new->getNewsBy($value["newsCatId"]);
               
                if($catSubNew){
>>>>>>> 86c4460a5efebbf0a2f9fc401b3c5f0d95d40405
            ?>
                <ul class="sub-menu">
                    <?php  
                        foreach ($catNews as $val) {
                    ?>
<<<<<<< HEAD
                        <li><a href="<?=Yii::$app->homeUrl?>news/<?php echo $val["newsCatId"] ?>"><?php echo $val["newsCatName"] ?></a></li>
=======
                        <li><a href="<?=Yii::$app->homeUrl?>news/listnew?id=<?php echo $val["newsCatId"] ?>"><?php echo $val["newsCatName"] ?></a></li>
>>>>>>> 86c4460a5efebbf0a2f9fc401b3c5f0d95d40405
                    <?php } ?> 
                </ul>

            <?php } ?>

        </li>

        <?php } ?>


        <li><a href="detail.html">Contact</a></li>
    </ul>
    
</div>