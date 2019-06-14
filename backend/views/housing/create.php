<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Housing */

$this->title = Yii::t('app', 'Create Housing');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Housings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="housing-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
