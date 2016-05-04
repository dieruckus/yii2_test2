<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Towns */

$this->title = 'Update Towns: ' . $model->tid;
$this->params['breadcrumbs'][] = ['label' => 'Towns', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tid, 'url' => ['view', 'id' => $model->tid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="towns-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
