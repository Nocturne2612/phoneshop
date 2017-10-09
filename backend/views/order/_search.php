<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\OrderSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idOrder') ?>

    <?= $form->field($model, 'fullName') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'province') ?>

    <?= $form->field($model, 'district') ?>

    <?php // echo $form->field($model, 'ward') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'otherInformation') ?>

    <?php // echo $form->field($model, 'totalMoney') ?>

    <?php // echo $form->field($model, 'paymen_id') ?>

    <?php // echo $form->field($model, 'userId') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
