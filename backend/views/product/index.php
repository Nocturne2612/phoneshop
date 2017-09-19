<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'proId',
            'proName',
            'catId',
            'factoryId',
            'images',
            // 'price',
            // 'saleOf',
            // 'startSale',
            // 'endSale',
            // 'color',
            // 'screenSize',
            // 'resolution',
            // 'peratingSystem',
            // 'cpu',
            // 'ram',
            // 'rom',
            // 'mainCamera',
            // 'secondaryCamera',
            // 'pin',
            // 'description',
            // 'content',
            // 'status',
            // 'dateCreate',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
