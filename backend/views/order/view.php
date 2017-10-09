<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Order */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idOrder], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idOrder], [
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
            'idOrder',
            'fullName',
            // 'name',
            'province',
            'district',
            'ward',
            'address',
            'phone',
            'email:email',
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
            // 'created_at',
            // 'updated_at',
            
        ],
    ]) ?>

</div>
