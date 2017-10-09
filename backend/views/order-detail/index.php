<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\OrderDetailSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Order Details';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-detail-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Order Detail', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'order_id',
            // 'idOrderDetails',
            'productId',
            'productName',
            // 'image',
            'price',
            'quantity',
            'totalMoney',
            'color',
            [
                'attribute' => 'status',
                'value' => function ($data) {
                    $result=$data['status'];
                    if($result == 1){
                        $result= "Hoạt Động";
                    }
                    else{
                        $result= "Đã Hủy";
                    }
                    return $result;
                }
            ],
            [
                'attribute' => 'created_at',
                'value' => function ($data) {
                    $result = date('d/m/Y', $data['created_at']);
                    return $result;
                }
            ],
            [
                'attribute' => 'updated_at',
                'value' => function ($data) {
                    $result = date('d/m/Y', $data['updated_at']);
                    return $result;
                }
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
