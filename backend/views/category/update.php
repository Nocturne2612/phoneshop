<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Category */

$this->title = 'Cập nhật: ' . $model->catName;
$this->params['breadcrumbs'][] = ['label' => 'Danh mục sản phẩm', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->catName, 'url' => ['view', 'id' => $model->catId]];
$this->params['breadcrumbs'][] = 'Cập nhật';
?>
<div class="category-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'dataCat'=>$dataCat,
    ]) ?>

</div>
