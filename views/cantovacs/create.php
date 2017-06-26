<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CanToVacs */

$this->title = 'Create Can To Vacs';
$this->params['breadcrumbs'][] = ['label' => 'Can To Vacs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="can-to-vacs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
