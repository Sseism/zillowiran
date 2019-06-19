<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Experiens */
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
                        <p>
                            <?=Yii::t('app', 'تصاویر')?>
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
                        
                        <?= $form->field($model, 'title')->textInput(['maxlength' => true, 'id' => 'title', 'placeholder' => Yii::t('app', 'عنوان تجربه')]) ?>
                    </div> 
                  
                        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
                            <?= $form->field($model, 'exp_type_id')->dropDownList($model->exp_type_id, ['id' => 'expType']) ?>
                        </div> 
                        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
                             <?= $form->field($model, 'city_id')->dropDownList($model->city_id, ['id' => 'city']) ?>
                        </div>
                   
                    <div class=" col-lg-2 col-md-2 col-sm-6 col-xs-6">
                        
                            <?= $form->field($model, 'time')->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class=" col-lg-2 col-md-2 col-sm-6 col-xs-6">
                        
                            <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>
                    </div>
                    
                    <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-6"> 
                        
                         <?= $form->field($model, 'description')->textarea(['rows' => 6])?>
                    </div> 
                    <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-6">  

                       <?= $form->field($model, 'facilitie')->textarea(['rows' => 6]) ?>

                    </div> 
                    <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-6">  

                        <?= $form->field($model, 'about_host')->textarea(['rows' => 6]) ?>

                    </div>  
                    <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-6">  

                        <?= $form->field($model, 'materiel')->textarea(['rows' => 6]) ?>


                    </div>  
                    
                </div>  
                <button class="btn btn-primary nextBtn btn-lg pull-left" type="button" ><?=Yii::t('app', 'بعدی')?></button>
               
          
            </div>       

         <!-- ********************************************************** step 2 -->
         <div class="setup-content" id="step-2">
              <h2 class="fs-title">
              <?=Yii::t('app', 'تصاویر ملک خود را وارد کنید')?>
              </h2>
              <div class="row">
                         <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <?php
//                    echo FileInput::widget([
//                        //'model' => $model,
//                        //'attribute' => 'url[]',
//                        'name' => 'url[]',
//                        'options' => [
//                            'multiple' => true,
//                            'accept' => 'image/*'
//                        ],
//                        'pluginOptions' => [
//                            'showUpload' => false,
//                            // 'showCaption' => false,
//                            // 'showRemove' => false,
//                            // 'showUpload' => false,
////                          'browseClass' => 'btn btn-primary btn-block',
//                            // 'browseIcon' => '<i class="glyphicon glyphicon-camera"></i> ',
//                            // 'browseLabel' =>  'Attach Business Card',
//                             'mainClass' => 'form-group',
//                             'allowedFileExtensions' => ['jpg','gif','png'],
//                            'overwriteInitial' => false
//                        ],
//
//                    ]);
                    ?>
                    </div>
              
              </div>
               <?= Html::submitButton(Yii::t('app', 'ثبت'), ['class' => 'btn btn-success pull-left']) ?>
         </div>
        
    <?php ActiveForm::end(); ?>

</div>
</div>
</div>


