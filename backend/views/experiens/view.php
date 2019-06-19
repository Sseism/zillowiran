<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Experiens */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Experiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="experiens-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'exp_type_id',
            'exp_sub_type_id',
            'city_id',
            'description:ntext',
            'facilitie:ntext',
            'we_do:ntext',
            'time',
            'materiel:ntext',
            'about_host:ntext',
            'price',
            'lang',
        ],
    ]) ?>

</div>
