<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Experiens */

$this->title = Yii::t('app', 'ثبت تجربه جدید');
$this->params['breadcrumbs'][] = ['label' => 'Experiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="experiens-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
