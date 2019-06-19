<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'اقامتگاه های ثبت شده ');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="accommodation-index">


   
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
                                    <a class="dropdown-item" href="#"><?=  Yii::t('app', 'همه اقامتگاه ها')?> </a>
                                </div>
                            </div>
                        </div>
                         <div class="col-md-6">
                             <?= Html::a(Yii::t('app', 'ثبت اقامتگاه جدید'), ['create'], ['class' => 'btn btn-success']) ?>
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
                    
                   'attribute'=>'title',
                ],
               [
                  
                   'attribute'=>'type',
                   'content' => function ($model, $key, $index, $column) {
                    if ($model->type == 1) {
                        $span = Yii::t('app','دربست');
                    } elseif($model->type == 2) {
                        $span = Yii::t('app','خصوصی');
                    }
                    return $span;
                }
                ],
                [
                    
                    'attribute'=>'acc_type_id',
                    'value' =>  'accType.title'
                ],
                [
                   
                    'attribute'=>'acc_region_id',
                    'value' =>  'accRegion.title'
                ],
         
            //'discription:ntext',
            [
                   'header'=>'<i class="fonticonhotel icon-family-room"></i>', 
                   'attribute'=>'quantity',
            ],
            //'max_quantity',
            [
                   'header'=>'<i class="fonticonhotel icon-private-entrance"></i>', 
                   'attribute'=>'room_count',
            ],
            [
                   'header'=>'<i class="fonticonhotel icon-extra-long-beds"></i>', 
                   'attribute'=>'bed1',
            ],
            [
                   'header'=>'<i class="fonticonhotel icon-bed"></i>', 
                   'attribute'=>'bed2',
            ],
            [
                   'header'=>'<i class="fonticonhotel icon-extra-long-beds"></i>', 
                   'attribute'=>'extrabed',
            ],
            [
                   'header'=>'<i class="fonticonhotel icon-bathrooms"></i>', 
                   'attribute'=>'wc',
            ],
            [
                   'header'=>'<i class="fonticonhotel icon-bathtub"></i>', 
                   'attribute'=>'bathroom',
            ],
            'area_all',
            'state',
            'city',
            'phone',
            [
                  
                   'attribute'=>'status',
                   'content' => function ($model, $key, $index, $column) {
                    if ($model->status == 1) {
                        $span = Yii::t('app','در انتظار');
                        
                    } elseif($model->status == 2) {
                        $span = Yii::t('app','تایید شده');
                    }
                     elseif($model->status == 3) {
                        $span = Yii::t('app','رد شده');
                    }
                    else{
                        $span ='<span class="font-weight-bold">'. Yii::t('app','خوانده نشده').'</span>';
                    }
                    return $span;
                }
                ],
            ['class' => 'yii\grid\ActionColumn'],
            
        ],
        'tableOptions' =>['class' => 'table table-bordered dt-responsive nowrap',"id"=>"datatable"],
    ]);
    ?>
</div>
</div>
</div>
</div>
