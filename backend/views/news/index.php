<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\NewsCategory;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tin tức';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Đăng bài mới', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'name',
//            'newsCatId',
            [
                'attribute' => 'newsCatId',
                'value' => function ($data) {
                    $name = NewsCategory::getNewsCategoryBy($data->newsCatId);
                    return $name;
                }
            ],
            'userId',
            [
                'attribute'=>'image',
                'label'=>'Image',
                'format'=>'raw',
                'value' => function ($data) {
//                        $baseUrl = Yii::$app->params['url'];
                        $url = $data->image;
                        return Html::img($url, ['alt'=>'myImage','height'=>'100']);
                 }
            ],
            // 'summary',
            // 'content',
             [
                'attribute' => 'status',
//                'contentOptions' => ['class' => 'label label-blue'],
                'value' => function ($data) {
                    $result = ($data['status'] == 0) ? 'Không hoạt động' : 'Đang hoạt động';
                    return $result;
                }
            ],
            // 'dateCreate',
            // 'updateAt',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>
</div>
