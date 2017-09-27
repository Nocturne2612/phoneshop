<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\FactorySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="factory-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'facId') ?>

    <?= $form->field($model, 'facName') ?>

    <?= $form->field($model, 'logo') ?>

    <?= $form->field($model, 'status') ?>

    <?= $form->field($model, 'dateCreate') ?>

    <div class="form-group">
        <?= Html::submitButton('Tìm kiếm', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Làm mới', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
