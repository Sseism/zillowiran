<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Accommodation */
/* @var $form yii\widgets\ActiveForm */
$this->registerCssFile('/zillow/admin/css/form.css', [
    'depends' => [\yii\web\JqueryAsset::className()]
]);
$this->registerJsFile('/zillow/admin/js/form.js');
?>

<div class="accommodation-form">

    <div class="card m-b-30 form_box">
        <div class="card-body">                          
            <?php
            $form = ActiveForm::begin([
                        'options' => [
                            'id' => 'msform'
                        ]
            ]);
            ?>
            <div class="stepwizard col-md-offset-3">
                <div class="stepwizard-row setup-panel">
                    <div class="stepwizard-step">
                        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                        <p>اطلاعات پایه</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                        <p>اطلاعات اتاق</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                        <p>امکانات</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                        <p>موقعیت و اطلاعات تماس</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
                        <p>تصاویر</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-6" type="button" class="btn btn-default btn-circle" disabled="disabled">6</a>
                        <p>مقررات اقامتگاه</p>
                    </div>
                </div>
            </div>
            <!-- ********************************************************** step 1 -->

            <div class=" setup-content" id="step-1">
                <h2 class="fs-title">اقامتگاه تان را معرفی کنید</h2>
                <h3 class="fs-subtitle">مهمان شما چه فضایی از اقامتگاه را در اختیار خواهد داشت؟</h3>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">       
                        <?= $form->field($model, 'title')->textInput(['maxlength' => true, 'id' => 'title', 'placeholder' => Yii::t('app', 'عنوان اقامتگاه')]) ?>
                    </div>
                    <div class=" col-lg-4 col-md-4 col-sm-6 col-xs-6">  
                        <div class="col-md-6">  
                            <?= $form->field($model, 'type')->radioList(['1' => Yii::t('app', 'دربست'), '2' => Yii::t('app', 'خصوصی')], ['class' => 'accType']); ?>
                        </div>
                        <div class="col-md-6">  
                            <?= $form->field($model, 'acc_type_id')->dropDownList($model->acc_type_id, ['id' => 'accTypeSelect'])->label('  '); ?>
                        </div>

                    </div> 
                    <div class=" col-lg-4 col-md-4 col-sm-6 col-xs-6">  

                        <?= $form->field($model, 'acc_region_id')->dropDownList($model->acc_region_id, ['id' => 'accTypeSelect']) ?>

                    </div>   
                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <?= $form->field($model, 'discription')->textarea(['rows' => 6]) ?> 
                    </div>
                </div>
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >بعدی</button>

            </div>
            <!-- ********************************************************** step 2 -->

            <div class=" setup-content" id="step-2">
                <h2 class="fs-title">فضای اقامتگاه خود را ترسیم نمایید</h2>
               
                <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
                    <div class="col-md-3">
                        <label class='label_num'><i class="fonticonhotel icon-family-room"></i><span><?= Yii::t('app', 'ظرفیت') ?></span></label>
                        <div class="number-input">    
                            <span onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></span>
                            <?=
                            $form->field($model, 'quantity')->textInput([
                                'type' => 'number', 'min' => 0, 'value' => '0'
                            ])->label(false)
                            ?>
                            <span onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></span>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <label  class='label_num'><i class="fonticonhotel icon-family-room"></i><span><?= Yii::t('app', 'حداکثر ظرفیت') ?></span></label>
                        <div class="number-input">
                            <span onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></span>
                            <?=
                            $form->field($model, 'max_quantity')->textInput([
                                'type' => 'number', 'min' => 0, 'value' => '0'
                            ])->label(false)
                            ?>
                            <span onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></span>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <label  class='label_num'><i class="fonticonhotel icon-private-entrance"></i><span><?= Yii::t('app', 'تعداد اتاق') ?></span></label>
                        <div class="number-input">
                            <span onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></span>
                            <?=
                            $form->field($model, 'room_count')->textInput([
                                'type' => 'number', 'min' => 0, 'value' => '0'
                            ])->label(false)
                            ?>
                            <span onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class='label_num'><i class="fonticonhotel icon-bathtub"></i><span><?= Yii::t('app', 'تعداد حمام') ?></span></label>
                        <div class="number-input">
                            <span onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></span>
                            <?=
                            $form->field($model, 'bathroom')->textInput([
                                'type' => 'number', 'min' => 0, 'value' => '0'
                            ])->label(false)
                            ?>
                            <span onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class='label_num'><i class="fonticonhotel icon-bathrooms"></i><span><?= Yii::t('app', 'تعداد سرویس بهداشتی') ?></span></label>
                        <div class="number-input">
                            <span onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></span>
                            <?=
                            $form->field($model, 'wc')->textInput([
                                'type' => 'number', 'min' => 0, 'value' => '0'
                            ])->label(false)
                            ?>
                            <span onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></span>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <label class='label_num'><i class="fonticonhotel icon-extra-long-beds"></i><span><?= Yii::t('app', 'تعداد تخت یک نفره') ?></span></label>
                        <div class="number-input">
                            <span onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></span>
                            <?=
                            $form->field($model, 'bed1')->textInput([
                                'type' => 'number', 'min' => 0, 'value' => '0'
                            ])->label(false)
                            ?>
                            <span onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class='label_num'><i class="fonticonhotel icon-bed"></i><span><?= Yii::t('app', 'تعداد تخت دونفره') ?></span></label>
                        <div class="number-input">
                            <span onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></span>
                            <?=
                            $form->field($model, 'bed2')->textInput([
                                'type' => 'number', 'min' => 0, 'value' => '0'
                            ])->label(false)
                            ?>
                            <span onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class='label_num'><i class="fonticonhotel icon-extra-long-beds"></i><span><?= Yii::t('app', 'تخت اضافه') ?></span></label>
                        <div class="number-input">
                            <span onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></span>
                            <?=
                            $form->field($model, 'extrabed')->textInput([
                                'type' => 'number', 'min' => 0, 'value' => '0'
                            ])->label(false)
                            ?>
                            <span onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></span>

                        </div>
                    </div>
                </div>  


                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >بعدی</button>
            </div>
            <!-- ********************************************************** step 3 -->

            <div class=" setup-content" id="step-3">
                <h2 class="fs-title">اقامتگاه شما چه امکاناتی دارد؟</h2>
                
                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">    
                    <?= $form->field($model, 'area_building')->textInput() ?>
                </div>  
                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">    
                    <?= $form->field($model, 'area_building')->textInput() ?>
                </div>
                <div class="card-body">

                    <strong><?= Yii::t('app', 'امکانات') ?></strong>
                </div>
                <div class="form-group col-md-12">
                    <div class="checkbox">
                        <?php
                        echo Html::checkBoxList('faciliti', $model->getSelectedFaciliti(), $model->getAllFacilitie(), [
                            'item' =>
                            function ($index, $label, $name, $checked, $value) {
                                return Html::checkbox($name, $checked, [
                                            'value' => $value,
                                            'label' => '<label for="' . $label . '">' . $label . '</label>',
                                            'labelOptions' => [
                                                'class' => 'col-md-3 chfacilitie',
                                            ],
                                                //'id' => $label,
                                ]);
                            },
                            'separator' => false, 'template' => '<div class="item">{input}{label}</div>',])
                        ?>
                    </div>
                </div>
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >بعدی</button>
            </div>
            <!-- ********************************************************** step 4 -->
            <div class="setup-content" id="step-4">
                <h2 class="fs-title">راه ارتباطی و موقعیت مکانی اقامتگاه تان را تعیین کنید</h2>
               
                <div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6">    
                    <?= $form->field($model, 'city')->dropDownList($model->city, ['id' => 'accTypeSelect']) ?>
                </div> 
                <div class="form-group col-lg-9 col-md-9 col-sm-9 col-xs-9">    
                    <?= $form->field($model, 'address')->textarea(['rows' => 2]) ?>
                </div>
                <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-6">    
                    <?= $form->field($model, 'phone')->textInput() ?>
                </div>
                <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-6">    
                    <?= $form->field($model, 'zipcode')->textInput() ?>
                </div>
                <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-6">    
                    <?= $form->field($model, 'point')->textInput() ?>
                </div>
 
                

                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >بعدی</button>
            </div>

  <!-- ********************************************************** step 5 -->
  <div class="setup-content" id="step-5">
      گالری تصاویر
      
      <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >بعدی</button>
  </div>
 <!-- ********************************************************** step 6 -->
  <div class="setup-content" id="step-6">
                     <div class="row">
                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12"> 
                        <?= $form->field($model, 'aac_policies')->textarea(['rows' => 6]) ?>
                    </div>
                <div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6">    
                    <?= $form->field($model, 'check_in')->textInput() ?>
                </div>  
                <div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-6">    
                    <?= $form->field($model, 'check_out')->textInput() ?>
                </div> 
                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <?= $form->field($model, 'cancell_policies')->textInput() ?>
                    </div>
                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <?= $form->field($model, 'min_res_night')->textInput() ?>

                    </div>
                </div>
       <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
        </div>

  </div>
 
            <div class="row">
 
            </div>
        </div>   
        
        


       
        <?php ActiveForm::end(); ?>

    </div>




    <!-- script code !-->
    <?php
    $url = Url::to(['accommodation/acctype']);

    $this->registerJs(<<< JS
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

    });
        
JS
    )
    ?> 