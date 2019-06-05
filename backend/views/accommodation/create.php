<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Accommodation */

$this->title = Yii::t('app', 'Create Accommodation');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Accommodations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="accommodation-create">
     <div class="row">
        <div class="col-sm-12">
 
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
</div>
</div>
