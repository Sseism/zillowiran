<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Housing */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Housings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="housing-view">

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
            'uselid',
            'city_id',
            'ad_type',
            'property_type',
            'lat',
            'long',
            'area',
            'price',
            'rent',
            'contract_time:datetime',
            'room_count',
            'built_year',
            'addres:ntext',
            'description:ntext',
            'facilitie_in_home',
            'tag',
            'email:email',
            'phone',
            'date',
            'modify_date',
            'del',
            'neibourhood',
            'latLong',
            'lang',
        ],
    ]) ?>

</div>
