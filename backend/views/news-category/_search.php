<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\search\NewsCategorySearch;

/* @var $this yii\web\View */
/* @var $model backend\models\search\NewsCategorySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-category-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'newsCatId') ?>

    <?= $form->field($model, 'newsCatName') ?>

    <?= $form->field($model, 'parentId') ?>

    <?= $form->field($model, 'status') ?>

    <?= $form->field($model, 'dateCreate') ?>

    <?= $form->field($model, 'updateAt') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
