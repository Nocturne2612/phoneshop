<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\NewsCategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Danh mục tin tức';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-category-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]);   ?>

    <p>
        <?= Html::a('Tạo danh mục mới', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'newsCatName',
            [
                'attribute' => 'parentId',
                'value' => function ($data) {
                    if ($data['parentId']!=null) {
//                       $a = ArrayHelper::map($data, 'parentId', 'newsCatName');
//                       echo "<pre>";
//                       var_dump($data);
//                       die;
                        return 'not Root';
                    } else {
                        return 'Root';
                    }
                }
            ],
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
                    $result = date('d/m/Y',$data['dateCreate']);
                    return $result;
                }
            ],        
            [
                'attribute' => 'updateAt',
                'value' => function ($data) {
                    $result = date('d/m/Y',$data['updateAt']);
                    return $result;
                }
            ],        
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>
</div>
