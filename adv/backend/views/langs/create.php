<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Langs */

$this->title = 'Create Langs';
$this->params['breadcrumbs'][] = ['label' => 'Langs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="langs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
