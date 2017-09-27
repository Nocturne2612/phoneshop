<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Factory;
use backend\models\Category;

/* @var $this yii\web\View */
/* @var $model backend\models\Product */

$this->title = $model->proName;
$this->params['breadcrumbs'][] = ['label' => 'Sản phẩm', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Cập nhật', ['update', 'id' => $model->proId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Xóa', ['delete', 'id' => $model->proId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Bạn có chắc muốn xóa mục này?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'proId',
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
//            'content',
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
        ],
    ]) ?>

</div>
