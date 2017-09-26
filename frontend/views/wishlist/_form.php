<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Wishlist */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wishlist-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'wisId')->textInput() ?>

    <?= $form->field($model, 'userId')->textInput() ?>

    <?= $form->field($model, 'proId')->textInput() ?>

    <?= $form->field($model, 'dateCreate')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
