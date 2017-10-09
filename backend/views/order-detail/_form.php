<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\OrderDetail */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-detail-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'productId')->textInput() ?>

    <?= $form->field($model, 'productName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'quantity')->textInput() ?>

    <?= $form->field($model, 'totalMoney')->textInput() ?>

    <?= $form->field($model, 'color')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList(['1'=>'Hoạt Động', '2'=>'Đã Hủy'],['prompt'=>"-Trạng Thái -"]) ?> 

    <?= $form->field($model, 'order_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
