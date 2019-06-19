<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'تجربه های ثبت شده';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="experiens-index">


<?php Pjax::begin(); ?>

 <div class="row">
        <div class="card col-sm-12">
            <div class="card-body"> 
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-9">
                        <h1><?= Html::encode($this->title) ?></h1>
                    </div>
                    <div class="col-md-3">
                        <div class="col-md-6 ">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-filter"></i> <?=  Yii::t('app', 'فیلتر')?>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
                                    <a class="dropdown-item" href="#"><span class="badge badge-warning badge-pill float-right"></span><?=  Yii::t('app', 'درخواست های جدید')?></a>
                                    <a class="dropdown-item" href="#"><span class="badge badge-success badge-pill float-right"></span><?=  Yii::t('app', 'تایید شده ها')?></a>
                                    <a class="dropdown-item" href="#"><span class="badge badge-danger badge-pill float-right"></span><?=  Yii::t('app', 'ردشده ها')?></a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><?=  Yii::t('app', 'همه تجربه ها')?> </a>
                                </div>
                            </div>
                        </div>
                         <div class="col-md-6">
                             <?= Html::a(Yii::t('app', 'ثبت تجربه جدید'), ['create'], ['class' => 'btn btn-success']) ?>
                         </div>    
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end page-title-box -->
            <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'title',
            [
                    
                    'attribute'=>'exp_type_id',
                    'value' =>  'expType.title'
                ],
            [
                    
                    'attribute'=>'city_id',
                    'value' =>  'city.title'
                ],
            //'description:ntext',
            //'facilitie:ntext',
            //'we_do:ntext',
            //'time',
            //'materiel:ntext',
            //'about_host:ntext',
            'price',
            //'lang',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
        </div>

</div>
</div>
    
</div>
