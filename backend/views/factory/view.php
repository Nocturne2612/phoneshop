<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Factory */

$this->title = $model->facId;
$this->params['breadcrumbs'][] = ['label' => 'Factories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="factory-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->facId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->facId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'facId',
            'facName',
            'logo',
            'status',
            'dateCreate',
        ],
    ]) ?>

</div>
