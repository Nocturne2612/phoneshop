<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Wishlist */

$this->title = 'Update Wishlist: ' . $model->wisId;
$this->params['breadcrumbs'][] = ['label' => 'Wishlists', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->wisId, 'url' => ['view', 'id' => $model->wisId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wishlist-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
