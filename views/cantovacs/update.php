<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CanToVacs */

$this->title = 'Update Can To Vacs: ' . $model->can_id;
$this->params['breadcrumbs'][] = ['label' => 'Can To Vacs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->can_id, 'url' => ['view', 'can_id' => $model->can_id, 'vac_id' => $model->vac_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="can-to-vacs-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
