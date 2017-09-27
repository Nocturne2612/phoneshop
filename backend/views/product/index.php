<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Factory;
use backend\models\Category;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sản phẩm';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

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

//            'proId',
            'proName',
            [
                'attribute' => 'catId',
                'value' => function ($data) {
                    $name = Category::getCategoryBy($data->catId);
                    return $name;
                }
            ],
            [
                'attribute' => 'factoryId',
                'value' => function ($data) {
                    $name = Factory::getFactoryById($data->factoryId);
                    return $name;
                }
            ],
            [
                'attribute'=>'images',
                'label'=>'images',
                'format'=>'raw',
                'value' => function ($data) {
//                        $baseUrl = Yii::$app->params['url'];
                    $url = $data->images;
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
            // 'dateCreate',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
