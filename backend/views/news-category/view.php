<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\NewsCategory */

$this->title = $model->newsCatName;
$this->params['breadcrumbs'][] = ['label' => 'Danh mục tin tức', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-category-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Cập nhật', ['update', 'id' => $model->newsCatId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Xóa', ['delete', 'id' => $model->newsCatId], [
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
            'newsCatId',
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
        ],
    ]) ?>

</div>
