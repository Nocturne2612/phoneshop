<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ProductSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'proId') ?>

    <?= $form->field($model, 'proName') ?>

    <?= $form->field($model, 'catId') ?>

    <?= $form->field($model, 'factoryId') ?>

    <?= $form->field($model, 'images') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'saleOf') ?>

    <?php // echo $form->field($model, 'startSale') ?>

    <?php // echo $form->field($model, 'endSale') ?>

    <?php // echo $form->field($model, 'color') ?>

    <?php // echo $form->field($model, 'screenSize') ?>

    <?php // echo $form->field($model, 'resolution') ?>

    <?php // echo $form->field($model, 'peratingSystem') ?>

    <?php // echo $form->field($model, 'cpu') ?>

    <?php // echo $form->field($model, 'ram') ?>

    <?php // echo $form->field($model, 'rom') ?>

    <?php // echo $form->field($model, 'mainCamera') ?>

    <?php // echo $form->field($model, 'secondaryCamera') ?>

    <?php // echo $form->field($model, 'pin') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'content') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'dateCreate') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
