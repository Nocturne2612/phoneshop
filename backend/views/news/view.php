<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

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
            'newsCatId',
            'userId',
            'image',
            'summary',
            'content',
            'status',
            'dateCreate',
            'updateAt',
        ],
    ])
    ?>

</div>
