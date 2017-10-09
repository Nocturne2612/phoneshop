<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Order */

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
            'name',
            'province_id',
            'district_id',
            'ward_id',
            'address',
            'phone',
            'email:email',
            'otherInformation',
            'totalMoney',
            'paymen_id',
            'userId',
            'status',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
