<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Factory */

$this->title = 'Tạo mới';
$this->params['breadcrumbs'][] = ['label' => 'Thương hiệu', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="factory-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
