<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Accommodation */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Accommodations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="accommodation-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'type',
            'acc_type_id',
            'acc_region_id',
            'discription:ntext',
            'quantity',
            'max_quantity',
            'room_count',
            'bed1',
            'bed2',
            'extrabed',
            'wc',
            'bathroom',
            'area_all',
            'area_building',
            'state',
            'city',
            'address',
            'lat',
            'long',
            'point',
            'zipcode',
            'phone',
            'check_in',
            'check_out',
            'aac_policies:ntext',
            'cancell_policies',
            'min_res_night',
            'price',
            'latLong',
            'lang',
        ],
    ]) ?>

</div>
