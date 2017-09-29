<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Category;

/* @var $this yii\web\View */
/* @var $model backend\models\Category */

$this->title = $model->catName;
$this->params['breadcrumbs'][] = ['label' => 'Danh mục sản phẩm', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Sửa', ['update', 'id' => $model->catId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Xóa', ['delete', 'id' => $model->catId], [
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
            'catId',
            'catName',
            [
                'attribute' => 'parentId',
                'value' => function ($data) {
                    $name = Category::getCategoryBy($data->parentId);
                    return $name;
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
                    $result = date('d/m/Y',$data['dateCreate']);
                    return $result;
                }
            ],
        ],
    ]) ?>

</div>
