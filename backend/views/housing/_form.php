<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
/* @var $this yii\web\View */
/* @var $model backend\models\Housing */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="housing-form">

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
                        <p><?=Yii::t('app', 'اطلاعات کلی')?></p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                        <p><?=Yii::t('app', 'اطلاعات تکمیلی')?>
                        </p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                        <p>
                        <?=Yii::t('app', 'امکانات')?>
                        </p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                        <p>
                            <?=Yii::t('app', 'تصاویر')?>
                        </p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
                        <p>
                            <?=Yii::t('app', 'آدرس و توضیحات')?>
                        </p>
                    </div>
                </div>
            </div>
            <div class=" setup-content" id="step-1">
                <h2 class="fs-title">
                <?=Yii::t('app', 'اطلاعات کلی در مورد ملک')?>
                </h2>
                
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">  
                        
                        <?= $form->field($model, 'title')->textInput(['maxlength' => true, 'id' => 'title', 'placeholder' => Yii::t('app', 'عنوان اقامتگاه')]) ?>
                    </div> 
                    <div class=" col-lg-4 col-md-4 col-sm-6 col-xs-6">  
                        <div class="col-lg-6 col-md-6">
                            <?= $form->field($model, 'ad_type')->radioList(['0' => Yii::t('app', 'خرید'), '1' => Yii::t('app', 'اجاره')], ['class' => 'adType']); ?>
                        </div> 
                        <div class="col-lg-6 col-md-6">
                            <?= $form->field($model, 'rent')->textInput() ?>
                        </div>
                   
                    </div> 
                    <div class=" col-lg-4 col-md-4 col-sm-6 col-xs-6"> 
                        
                         <?= $form->field($model, 'contract_time')->textInput() ?>
                    </div> 
                    <div class=" col-lg-4 col-md-4 col-sm-6 col-xs-6">  

                        <?= $form->field($model, 'city_id')->dropDownList($model->city_id, ['id' => 'propertyType']) ?>

                    </div> 
                    <div class=" col-lg-4 col-md-4 col-sm-6 col-xs-6">  

                        <?= $form->field($model, 'property_type')->dropDownList($model->property_type, ['id' => 'propertyType']) ?>

                    </div>  
                    <div class=" col-lg-4 col-md-4 col-sm-6 col-xs-6">  

                        <?= $form->field($model, 'area')->textInput() ?>


                    </div>  
                  
                </div>   
          <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" ><?=Yii::t('app', 'بعدی')?></button>
            </div>       
            <!-- ********************************************************** step 2 -->

            <div class=" setup-content" id="step-2">
                <h2 class="fs-title">
                <?=Yii::t('app', 'اطلاعات تکمیلی در مورد ملک')?>
                </h2>
                <div class="row"> 
                    <div class=" col-lg-4 col-md-4 col-sm-6 col-xs-6">  

                       <?= $form->field($model, 'area')->textInput() ?>

                    </div> 
                    <div class=" col-lg-4 col-md-4 col-sm-6 col-xs-6">  

                      <?= $form->field($model, 'price')->textInput() ?>

                    </div> 
                    <div class=" col-lg-4 col-md-4 col-sm-6 col-xs-6">  

                    <?= $form->field($model, 'room_count')->textInput() ?>

                    </div> 
                    <div class=" col-lg-4 col-md-4 col-sm-6 col-xs-6">  
                        <?= $form->field($model, 'built_year')->textInput() ?>
                    </div> 
                    <div class=" col-lg-4 col-md-4 col-sm-6 col-xs-6">  
                         <?= $form->field($model, 'tag')->textInput() ?>
                    </div> 
                    <div class=" col-lg-4 col-md-4 col-sm-6 col-xs-6">  
                         <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
                    </div> 
                    <div class=" col-lg-4 col-md-4 col-sm-6 col-xs-6">  
                         <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>
                    </div> 
                </div>
                 <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" ><?=Yii::t('app', 'بعدی')?></button>
            </div>
        <!-- ********************************************************** step 3 -->

            <div class=" setup-content" id="step-3">
                <h2 class="fs-title"> 
                    <?=Yii::t('app', 'ملک شما چه امکاناتی دارد؟')?>
                </h2>
                <div class="row">
                <div class="form-group col-md-12 col-sm-12">
                    <div class="checkbox">
                        <?php
                        echo Html::checkBoxList('facilitie_in_home', $model->getSelectedFaciliti(), $model->getAllFacilitie(), [
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
             
                    <div class="form-group col-md-12 col-sm-12">
                        <?= $form->field($model, 'neibourhood')->textInput(['maxlength' => true]) ?>
                    </div>
                </div>
                  <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" ><?=Yii::t('app', 'بعدی')?></button>
            </div>
         <!-- ********************************************************** step 4 -->
         <div class="setup-content" id="step-4">
              <h2 class="fs-title">
              <?=Yii::t('app', 'تصاویر ملک خود را وارد کنید')?>
              </h2>
              <div class="row">
                         <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <?php
                    echo FileInput::widget([
                        //'model' => $model,
                        //'attribute' => 'url[]',
                        'name' => 'url[]',
                        'options' => [
                            'multiple' => true,
                            'accept' => 'image/*'
                        ],
                        'pluginOptions' => [
                            'showUpload' => false,
                            // 'showCaption' => false,
                            // 'showRemove' => false,
                            // 'showUpload' => false,
//                          'browseClass' => 'btn btn-primary btn-block',
                            // 'browseIcon' => '<i class="glyphicon glyphicon-camera"></i> ',
                            // 'browseLabel' =>  'Attach Business Card',
                             'mainClass' => 'form-group',
                             'allowedFileExtensions' => ['jpg','gif','png'],
                            'overwriteInitial' => false
                        ],

                    ]);
                    ?>
                    </div>
              
              </div>
              <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" ><?=Yii::t('app', 'بعدی')?></button>
         </div>
         <!-- ********************************************************** step 5 -->
         <div class="setup-content" id="step-5">
              <h2 class="fs-title">
              <?=Yii::t('app', 'آدرس و توضیحات تکمیلی در خصوص ملک را در این بخش وارد کنید')?>
              </h2>
              <div class="row">
                  <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
                  <?= $form->field($model, 'addres')->textarea(['rows' => 6]) ?>
                  </div>
                  <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
                 <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
                  </div>
              </div>
               <?= Html::submitButton(Yii::t('app', 'ثبت'), ['class' => 'btn btn-success']) ?>
         </div>
    <?php ActiveForm::end(); ?>

</div>
</div>
</div>
