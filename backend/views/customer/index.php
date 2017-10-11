<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\CustomerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Customers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Customer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'username',
            'fullName',
            'auth_key',
            // 'email:email',
            // 'phone',
            // 'province',
            // 'dictrict',
            // 'ward',
            // 'address',
            // 'avatar',
            // 'status',
            // 'created_at',
            // 'updated_at',
            // 'password_hash',
            // 'password_reset_token',
            // 'gender',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
