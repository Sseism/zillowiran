<?php

use yii\helpers\Html;
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
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">       
                <?= $form->field($model, 'title')->textInput(['maxlength' => true, 'id' => 'title', 'placeholder' => Yii::t('app', 'عنوان')]) ?>
            </div>
            <div class=" col-lg-4 col-md-4 col-sm-6 col-xs-6">    
            
                <?= $form->field($model, 'type')->dropDownList
                    (["0"=>'دربست',"1"=>"خصوصی"], ['id' => 'typeID',
                    'prompt' => Yii::t('app', 'اقامتگاه')]); ?>
            </div>  
            <div class=" col-lg-4 col-md-4 col-sm-6 col-xs-6">    
                <?= $form->field($model, 'quantity')->textInput() ?>
            </div> 
      
            <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-6">    
                <?= $form->field($model, 'max_quantity')->textInput() ?>
            </div>  
            <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-6">    
                <?= $form->field($model, 'room_count')->textInput() ?>
            </div>  
            <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-6">    
                <?= $form->field($model, 'bed1')->textInput() ?>
            </div>  
              
            <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-6">    
                <?= $form->field($model, 'bed2')->textInput() ?>
            </div>  
            <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-6">    
                <?= $form->field($model, 'extrabed')->textInput() ?>
            </div>  
            <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-6">    
                <?= $form->field($model, 'bathroom')->textInput() ?>
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
            <div class="form-group col-lg-12 col-md-12 col-sm-6 col-xs-6">    
                <?= $form->field($model, 'address')->textInput() ?>
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
                <?= $form->field($model, 'discription')->textarea(['rows' => 6]) ?>
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
