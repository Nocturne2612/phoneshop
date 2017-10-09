<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'newsCatId')->dropDownList($data, ['prompt'=>'--Chọn danh mục--']) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->textInput(['maxlength' => true,'id'=>"imageFile",'placeholder'=>'click chọn ảnh']) ?>

    <?= $form->field($model, 'summary')->textarea()?>

    <?= $form->field($model, 'content')->textarea(['id' =>'content']) ?>

    <?= $form->field($model, 'status')->dropDownList(['1'=>'Đăng', '2'=>'Chưa Đăng'],['prompt'=>"-Trạng Thái -"]) ?> 


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
