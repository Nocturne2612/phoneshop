<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\NewsCategory;

/* @var $this yii\web\View */
/* @var $model backend\models\News */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'News', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->newsId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->newsId], [
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
            'newsId',
            [
                'attribute' => 'newsCatId',
                'value' => function ($data) {
                    $name = NewsCategory::getNewsCategoryBy($data->newsCatId);
                    return $name;
                }
            ],
            'userId',
            'author',
            'name',
            [
                'attribute'=>'image',
                'label'=>'image',
                'format'=>'raw',
                'value' => function ($data) {
//                        $baseUrl = Yii::$app->params['url'];
                    $url = $data->image;
                    return Html::img($url, ['alt'=>'myImage','height'=>'100']);
                }
            ],

            'summary:ntext',
            'content:ntext',
            [
                'attribute' => 'status',
                'value' => function ($data) {
                    $result=$data['status'];
                    if($result == 1){
                        $result= "Hoạt Động";
                    }
                    else{
                        $result= "Chưa Đăng";
                    }
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
            [
                'attribute' => 'updateAt',
                'value' => function ($data) {
                    $result = date('d/m/Y', $data['updateAt']);
                    return $result;
                }
            ],

        ],
    ]) ?>

</div>
