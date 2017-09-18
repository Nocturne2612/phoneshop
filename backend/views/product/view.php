<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Product */

$this->title = $model->proId;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->proId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->proId], [
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
            'proId',
            'proName',
            'catId',
            'factoryId',
            'images',
            'price',
            'saleOf',
            'startSale',
            'endSale',
            'color',
            'screenSize',
            'resolution',
            'peratingSystem',
            'cpu',
            'ram',
            'rom',
            'mainCamera',
            'secondaryCamera',
            'pin',
            'description',
            'content',
            'status',
            'dateCreate',
        ],
    ]) ?>

</div>
