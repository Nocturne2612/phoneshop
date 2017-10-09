<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\NewsCategory;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'News';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create News', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'newsId',
             [
                'attribute' => 'newsCatId',
                'value' => function ($data) {
                    $name = NewsCategory::getNewsCategoryBy($data->newsCatId);
                    return $name;
                }
            ],
            // 'userId',
            'author',
            'name',
            // 'image',
            // 'summary:ntext',
            // 'content:ntext',
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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
