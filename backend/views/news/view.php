<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\NewsCategory;

/* @var $this yii\web\View */
/* @var $model backend\models\News */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Tin tức', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Sửa bài', ['update', 'id' => $model->newsId], ['class' => 'btn btn-primary']) ?>
        <?=
        Html::a('Xóa', ['delete', 'id' => $model->newsId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ])
        ?>
    </p>

    <?=
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            'newsId',
            'name',
            [
                'attribute' => 'newsCatId',
                'value' => function ($data) {
                    $name = NewsCategory::getNewsCategoryBy($data->newsCatId);
                    return $name;
                }
            ],
            'userId',
            'image',
            'summary',
//            'content',
            [
                'attribute' => 'status',
//                'contentOptions' => ['class' => 'label label-blue'],
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
            [
                'attribute' => 'updateAt',
                'value' => function ($data) {
                    $result = date('d/m/Y', $data['updateAt']);
                    return $result;
                }
            ],
        ],
    ])
    ?>

</div>
