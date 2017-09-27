<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Factory */

$this->title = 'Cập nhật: ' . $model->facName;
$this->params['breadcrumbs'][] = ['label' => 'Thương hiệu', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->facName, 'url' => ['view', 'id' => $model->facId]];
$this->params['breadcrumbs'][] = 'Cập nhật';
?>
<div class="factory-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        
    ]) ?>

</div>
