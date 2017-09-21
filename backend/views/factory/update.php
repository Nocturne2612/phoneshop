<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Factory */

$this->title = 'Update Factory: ' . $model->facId;
$this->params['breadcrumbs'][] = ['label' => 'Factories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->facId, 'url' => ['view', 'id' => $model->facId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="factory-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        
    ]) ?>

</div>
