<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Housings');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="housing-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Housing'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'uselid',
            'city_id',
            'ad_type',
            //'property_type',
            //'lat',
            //'long',
            //'area',
            //'price',
            //'rent',
            //'contract_time:datetime',
            //'room_count',
            //'built_year',
            //'addres:ntext',
            //'description:ntext',
            //'facilitie_in_home',
            //'tag',
            //'email:email',
            //'phone',
            //'date',
            //'modify_date',
            //'del',
            //'neibourhood',
            //'latLong',
            //'lang',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
