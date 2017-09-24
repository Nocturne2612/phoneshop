<?php  
    use frontend\models\Category;
    $cat = new Category();

    $catParent = $cat->getCategoryBy();
    // echo "<prE>";
    // print_r($catParent);
    // die;
?>

<div class="navleft-container">
    <div class="mega-menu-title"><h3>Category</h3></div>
    <div class="mega-menu-category">
        <ul class="nav">
            <?php  
                foreach ($catParent as $value) {
            ?>
            <li>
                <a href="<?=Yii::$app->homeUrl?>product/listproduct?id=<?php echo $value["catId"] ?>"><?php echo $value["catName"] ?></a>
                <div class="wrap-popup">
                    <div class="popup">
                        <div class="row">
                            <div class="col-md-12">
                                <?php  
                                    $catSub = $cat->getCategoryBy($value["catId"]);
                                    if($catSub){
                                ?>

                                <ul class="nav">
                                    <?php  
                                        foreach ($catSub as $val) {
                                    ?>
                                        <li><a href="<?=Yii::$app->homeUrl?>product/listproduct?id=<?php echo $val["catId"] ?>"><?php echo $val["catName"] ?></a></li>
                                    <?php } ?> 

                                </ul>

                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <?php  } ?>
        </ul>
    </div>
</div>