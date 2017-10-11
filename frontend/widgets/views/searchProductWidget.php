<div class="form-search" method="get">
    <input type="text" class="input-text" name="search" id="search" placeholder="Search products...">
    <div class="dropdown">
        <button type="button" class="btn" data-toggle="dropdown">All category <span class="fa fa-angle-down"></span></button>
        <ul class="dropdown-menu dropdown-menu-right">
            <li><a href="<?php echo Yii::$app->homeUrl .'product/listproduct?id=2'?>">Iphone</a></li>
            <li><a href="<?php echo Yii::$app->homeUrl .'product/listproduct?id=3'?>">SamSung</a></li>
            <li><a href="<?php echo Yii::$app->homeUrl .'product/listproduct?id=4'?>">SoNy</a></li>
            <li><a href="<?php echo Yii::$app->homeUrl .'product/listproduct?id=6'?>">Oppo</a></li>
        </ul>
    </div>
    <div class="btn btn-danger" onclick="search()"><span  class="fa fa-search"></span></div>
</div>