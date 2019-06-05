<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Accommodations');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="accommodation-index">


    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Accommodation'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <div class="row">
        <div class="card col-sm-12">
            <div class="card-body"> 
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title m-0"> املاک های ثبت شده </h4>
                    </div>
                    <div class="col-md-4">
                        <div class="float-right d-none d-md-block">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-filter"></i> فیلتر
                                </button>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
                                    <a class="dropdown-item" href="#"><span class="badge badge-warning badge-pill float-right">3</span>درخواست های جدید</a>
                                    <a class="dropdown-item" href="#"><span class="badge badge-success badge-pill float-right">600</span>تایید شده ها</a>
                                    <a class="dropdown-item" href="#"><span class="badge badge-danger badge-pill float-right">2</span>رد شده ها</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">همه املاک </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end page-title-box -->
        </div>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
//                ['class' => 'yii\grid\SerialColumn'],
//            'id',
               [
                   'header'=>'عنوان', 
                   'attribute'=>'title',
//                   'content' => function ($model, $key, $index, $column) {
//                    $url=Url::to(['hall/view','id'=>$model->id]);
//                  $span= Html::a($model->hallName,$url,['target'=>'_blank']);
//                    
//                    return $span;
//                }
                ],
            
            'title',
            'type',
            'acc_type_id',
            'acc_region_id',
            //'discription:ntext',
            //'quantity',
            //'max_quantity',
            //'room_count',
            //'bed1',
            //'bed2',
            //'extrabed',
            //'wc',
            //'bathroom',
            //'area_all',
            //'area_building',
            //'state',
            //'city',
            //'address',
            //'lat',
            //'long',
            //'point',
            //'zipcode',
            //'phone',
            //'check_in',
            //'check_out',
            //'aac_policies:ntext',
            //'cancell_policies',
            //'min_res_night',
            //'price',
            //'latLong',
            //'lang',
            ['class' => 'yii\grid\ActionColumn'],
            
        ],
        'tableOptions' =>['class' => 'table table-bordered dt-responsive nowrap',"id"=>"datatable"],
    ]);
    ?>
</div>
</div>
</div>
</div>
