<?php

use yii\helpers\Html;
//use backend\models\NewsCategory;

/* @var $this yii\web\View */
/* @var $model backend\models\NewsCategory */

$this->title = 'Cập nhật: ' . $model->newsCatName;
$this->params['breadcrumbs'][] = ['label' => 'Danh mục tin tức', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->newsCatName, 'url' => ['view', 'id' => $model->newsCatId]];
$this->params['breadcrumbs'][] = 'Cập nhật';
?>
<div class="news-category-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'data' => $data,
    ]) ?>

</div>
