<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Housing */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="housing-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'uselid')->textInput() ?>

    <?= $form->field($model, 'city_id')->textInput() ?>

    <?= $form->field($model, 'ad_type')->textInput() ?>

    <?= $form->field($model, 'property_type')->textInput() ?>

    <?= $form->field($model, 'lat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'long')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'area')->textInput() ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'rent')->textInput() ?>

    <?= $form->field($model, 'contract_time')->textInput() ?>

    <?= $form->field($model, 'room_count')->textInput() ?>

    <?= $form->field($model, 'built_year')->textInput() ?>

    <?= $form->field($model, 'addres')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'facilitie_in_home')->textInput() ?>

    <?= $form->field($model, 'tag')->textInput() ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'modify_date')->textInput() ?>

    <?= $form->field($model, 'del')->textInput() ?>

    <?= $form->field($model, 'neibourhood')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'latLong')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lang')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
