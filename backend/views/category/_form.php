<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Category */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'catName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parentId')->dropDownList($dataCat,['prompt'=>"-Chọn nhóm danh mục-"]) ?>

    <?= $form->field($model, 'status')->checkbox() ?>




    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Tạo mới' : 'Cạp nhật', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
