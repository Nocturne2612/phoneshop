<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Factory;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\FactorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Thương hiệu';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="factory-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Tạo mới', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'facId',
            'facName',
            [
                'attribute'=>'logo',
                'label'=>'logo',
                'format'=>'raw',
                'value' => function ($data) {
//                        $baseUrl = Yii::$app->params['url'];
                    $url = $data->logo;
                    return Html::img($url, ['alt'=>'myImage','height'=>'100']);
                }
            ],
            [
                'attribute' => 'status',
                'value' => function ($data) {
                    $result = ($data['status'] == 0) ? 'Không hoạt động' : 'Đang hoạt động';
                    return $result;
                }
            ],
            [
                'attribute' => 'dateCreate',
                'value' => function ($data) {
                    $result = date('d/m/Y', $data['dateCreate']);
                    return $result;
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
