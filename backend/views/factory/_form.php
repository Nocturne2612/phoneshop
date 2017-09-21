<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Factory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="factory-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'facName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'logo')->textInput(['maxlength' => true,'id'=>"imageFile",'placeholder'=>'click chọn ảnh']) ?>


    <?= $form->field($model, 'status')->checkbox() ?>

 

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
