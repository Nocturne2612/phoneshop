<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Order */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fullName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'province_id')->textInput() ?>

    <?= $form->field($model, 'district_id')->textInput() ?>

    <?= $form->field($model, 'ward_id')->textInput() ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'otherInformation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'totalMoney')->textInput() ?>

    <?= $form->field($model, 'paymen_id')->textInput() ?>

    <?= $form->field($model, 'userId')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
