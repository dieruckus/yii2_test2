<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Langs */

$this->title = 'Update Langs: ' . $model->lid;
$this->params['breadcrumbs'][] = ['label' => 'Langs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->lid, 'url' => ['view', 'id' => $model->lid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="langs-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
