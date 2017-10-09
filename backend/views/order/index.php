<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\OrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Orders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Order', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idOrder',
            'fullName',
            // 'name',
            // 'province',
            // 'district',
            // 'ward',
            // 'address',
            'phone',
            // 'email:email',
            // 'otherInformation',
            'totalMoney',
            // 'paymen_id',
            'userId',
            [
                'attribute' => 'status',
                'value' => function ($data) {
                    $result=$data['status'];
                    if($result == 1){
                        $result= "Mới Đặt Hàng";
                    }elseif ($result == 2) {
                        $result= "Đang Giao Hàng";
                    }
                    elseif ($result == 3) {
                        $result= "Đã Thanh Toán";
                    }
                    else{
                        $result= "Hủy";
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
