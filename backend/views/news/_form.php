<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'newsCatId')->dropDownList($data, ['prompt'=>'--Chọn danh mục--']) ?>

    <?= $form->field($model, 'userId')->textInput() ?>

    <?= $form->field($model, 'image')->textInput(['maxlength' => true,'id'=>"imageFile",'placeholder'=>'click chọn ảnh']) ?>
    <img src="<?= $model->image?>" alt="" id="previewImage" width="200" style="display: block"><br/>
    <?= $form->field($model, 'summary')->textarea()?>

    <?= $form->field($model, 'content')->textarea(['id' =>'content']) ?>

    <?= $form->field($model, 'status')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Tạo mới' : 'Cập nhật', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
