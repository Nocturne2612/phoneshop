<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\OrderDetail */

$this->title = $model->idOrderDetails;
$this->params['breadcrumbs'][] = ['label' => 'Order Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-detail-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idOrderDetails], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idOrderDetails], [
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
            'idOrderDetails',
            'productId',
            'productName',
            'image',
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
            'order_id',
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
        ],
    ]) ?>

</div>
