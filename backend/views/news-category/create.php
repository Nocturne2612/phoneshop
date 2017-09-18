<?php

use yii\helpers\Html;
//use backend\models\NewsCategory;

/* @var $this yii\web\View */
/* @var $model backend\models\NewsCategory */

$this->title = 'Tạo nhóm mới';
$this->params['breadcrumbs'][] = ['label' => 'Danh mục tin tức', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'data' => $data,
    ]) ?>

</div>
