<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Experiens */

$this->title = 'Update Experiens: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Experiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="experiens-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
