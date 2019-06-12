<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Accommodation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="accommodation-form">
    <div class="card m-b-30">
        <div class="card-body">                          
            <?php $form = ActiveForm::begin(); ?>
            <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"> 
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">       
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">       
                <?= $form->field($model, 'title')->textInput(['maxlength' => true, 'id' => 'title', 'placeholder' => Yii::t('app', 'عنوان')]) ?>
            </div>
            
            <div class=" col-lg-4 col-md-4 col-sm-6 col-xs-6">  
                <div class="col-md-6">  
                   <?= $form->field($model, 'type')->radioList( ['1'=>Yii::t('app', 'دربست'),'2'=>Yii::t('app', 'خصوصی')],['class'=>'accType']); ?>
                </div>
                <div class="col-md-6">  
                    <?= $form->field($model, 'acc_type_id')->dropDownList($model->acc_type_id,['id'=>'accTypeSelect'])->label('  '); ?>
                </div>
                
            </div> 
            <div class=" col-lg-4 col-md-4 col-sm-6 col-xs-6">  

                    <?= $form->field($model, 'acc_region_id')->dropDownList($model->acc_region_id,['id'=>'accTypeSelect']) ?>
    
            </div>   
            </div>   
            <div class=" col-lg-8 col-md-8 col-sm-8 col-xs-8"> 
                <div class="col-md-3">
                     <label><i class="fonticonhotel icon-family-room"></i><span><?=Yii::t('app', 'ظرفیت')?></span></label>
                     <div class="number-input">    
                     <span onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></span>
                           <?= $form->field($model, 'quantity')->textInput([
                                 'type' => 'number', 'min'=>0, 'value'=>'0'
                            ])->label(false) ?>
                           <span onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></span>
                </div>
                </div>
                <div class="col-md-3 ">
                     <label><i class="fonticonhotel icon-family-room"></i><span><?=Yii::t('app', 'حداکثر ظرفیت')?></span></label>
                 <div class="number-input">
                     <span onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></span>
                            <?= $form->field($model, 'max_quantity')->textInput([
                                 'type' => 'number', 'min'=>0, 'value'=>'0'
                            ])->label(false) ?>
                <span onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></span>
                </div>
                </div>
                <div class="col-md-3 ">
                     <label><i class="fonticonhotel icon-private-entrance"></i><span><?=Yii::t('app', 'تعداد اتاق')?></span></label>
                     <div class="number-input">
                     <span onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></span>
                    <?= $form->field($model, 'room_count')->textInput([
                                 'type' => 'number', 'min'=>0, 'value'=>'0'
                            ])->label(false) ?>
                     <span onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></span>
                </div>
                </div>
                <div class="col-md-3">
                    <label><i class="fonticonhotel icon-bathtub"></i><span><?=Yii::t('app', 'تعداد حمام')?></span></label>
                   <div class="number-input">
                    <span onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></span>
                     <?= $form->field($model, 'bathroom')->textInput([
                                 'type' => 'number' , 'min'=>0, 'value'=>'0'
                            ])->label(false) ?>
                    <span onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></span>
                </div>
                </div>
                <div class="col-md-3">
                    <label><i class="fonticonhotel icon-bathrooms"></i><span><?=Yii::t('app', 'تعداد توالت')?></span></label>
                   <div class="number-input">
                    <span onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></span>
                     <?= $form->field($model, 'wc')->textInput([
                                 'type' => 'number' , 'min'=>0, 'value'=>'0'
                            ])->label(false) ?>
                    <span onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></span>
                </div>
                </div>
               
                <div class="col-md-3">
                     <label><i class="fonticonhotel icon-extra-long-beds"></i><span><?=Yii::t('app', 'تعداد تخت یکنفره')?></span></label>
                  <div class="number-input">
                     <span onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></span>
                    <?= $form->field($model, 'bed1')->textInput([
                                 'type' => 'number', 'min'=>0, 'value'=>'0'
                            ])->label(false) ?>
                     <span onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></span>
                </div>
                </div>
                <div class="col-md-3">
                     <label><i class="fonticonhotel icon-bed"></i><span><?=Yii::t('app', 'تعداد تخت دو نفره')?></span></label>
                    <div class="number-input">
                     <span onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></span>
                     <?= $form->field($model, 'bed2')->textInput([
                                 'type' => 'number', 'min'=>0 , 'value'=>'0'
                            ])->label(false) ?>
                     <span onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></span>
                </div>
                </div>
                <div class="col-md-3">
                     <label><i class="fonticonhotel icon-extra-long-beds"></i><span><?=Yii::t('app', 'تعداد تخت اضافه')?></span></label>
                    <div class="number-input">
                     <span onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></span>
                     <?= $form->field($model, 'extrabed')->textInput([
                                 'type' => 'number', 'min'=>0, 'value'=>'0'
                            ])->label(false) ?>
                    <span onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></span>

                    </div>
                </div>
            </div>  
           
            <div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <?= $form->field($model, 'discription')->textarea(['rows' => 6]) ?> 
            </div>
                
            <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-6">    
                <?= $form->field($model, 'area_building')->textInput() ?>
            </div>  
            <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-6">    
                <?= $form->field($model, 'city')->textInput() ?>
            </div>  
          <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-6">    
                <?= $form->field($model, 'phone')->textInput() ?>
            </div>
            </div> 
            <div class="row">
            <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-6">    
                <?= $form->field($model, 'check_in')->textInput() ?>
            </div>  
            <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-6">    
                <?= $form->field($model, 'check_out')->textInput() ?>
            </div>  
            <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-6">    
                <?= $form->field($model, 'price')->textInput() ?>
            </div> 
             
        </div>
    </div>   
    <div class="card m-b-30">
        <div class="card-body">
            
            <p><?= Yii::t('app', 'قوانین و توضیحات بیشتر') ?></p>  
             <div class="row">
            <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12"> 
                <?= $form->field($model, 'aac_policies')->textarea(['rows' => 6]) ?>
            </div>
           <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">    
                <?= $form->field($model, 'address')->textarea(['rows' => 6]) ?>
            </div>
            <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <?= $form->field($model, 'cancell_policies')->textInput() ?>
            </div>
            <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <?= $form->field($model, 'min_res_night')->textInput() ?>

            </div>
             </div>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

    
    
    
    <!-- script code !-->
 <?php
    $url=Url::to(['accommodation/acctype']);
   
    $this->registerJs( <<< JS
        $('.accType').on('change',function(){
            accType=$('input:radio[name="Accommodation[type]"]:checked').val();
           
            accTypeSelect='#accTypeSelect';
            $(accTypeSelect).empty();
               
            $.ajax({

                url: '$url',
                dataType: "json",
                data:'type='+ accType,
                success: function(data) {
                    $.each(data, function( key, value ) {
                    $(accTypeSelect)
                            .append($("<option></option>")
                            .attr("value",key)
                            .text(value));
                   });
                  
                    }              

                           })

    })
JS
)
      ?> 