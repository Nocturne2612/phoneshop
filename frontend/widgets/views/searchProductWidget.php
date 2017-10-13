<?php 
 use frontend\models\Category;
 $cat= new Category();
 $catNULL = $cat->getCategoryBy();

 ?>

<div class="form-search" method="get">
    <input type="text" class="input-text" name="search" id="search" placeholder="Search products...">
    <div class="dropdown">
        <button type="button" class="btn" data-toggle="dropdown">All category <span class="fa fa-angle-down"></span></button>
        <ul class="dropdown-menu dropdown-menu-right">
        <?php foreach ($catNULL as $key => $val) {
         
         ?>
            <li><a href="<?=Yii::$app->homeUrl?>product/listproduct?id=<?php echo $val["catId"] ?>"><?php echo $val["catName"] ?></a></li>

        <?php } ?>
        </ul>
    </div>
    <div class="btn btn-danger" onclick="search()"><span  class="fa fa-search"></span></div>
</div>