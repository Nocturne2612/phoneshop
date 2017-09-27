<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Factory;

/* @var $this yii\web\View */
/* @var $model backend\models\Factory */

$this->title = $model->facName;
$this->params['breadcrumbs'][] = ['label' => 'Thương hiệu', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="factory-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Cập nhật', ['update', 'id' => $model->facId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Xóa', ['delete', 'id' => $model->facId], [
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
            'facId',
            'facName',
            [
                'attribute'=>'logo',
                'label'=>'logo',
                'format'=>'raw',
                'value' => function ($data) {
//                        $baseUrl = Yii::$app->params['url'];
                    $url = $data->logo;
//                    echo "<pre>"; var_dump($data); die;
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
        ],
    ]) ?>

</div>
