<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'proName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'catId')->dropDownList($data,['prompt'=>"-Chọn nhóm danh mục-"]) ?> 

    <?= $form->field($model, 'factoryId')->textInput() ?>

    <?= $form->field($model, 'images')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'saleOf')->textInput() ?>

    <?= $form->field($model, 'startSale')->textInput() ?>

    <?= $form->field($model, 'endSale')->textInput() ?>

    <?= $form->field($model, 'color')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'screenSize')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'resolution')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'peratingSystem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cpu')->textInput() ?>

    <?= $form->field($model, 'ram')->textInput() ?>

    <?= $form->field($model, 'rom')->textInput() ?>

    <?= $form->field($model, 'mainCamera')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'secondaryCamera')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'pin')->textInput() ?>

    <?= $form->field($model, 'description')->textarea(['id' =>'description']) ?>

    <?= $form->field($model, 'content')->textarea(['id' =>'content']) ?>

    <?= $form->field($model, 'status')->checkbox() ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
