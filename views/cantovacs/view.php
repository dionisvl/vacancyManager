<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CanToVacs */

$this->title = $model->can_id;
$this->params['breadcrumbs'][] = ['label' => 'Can To Vacs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="can-to-vacs-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'can_id' => $model->can_id, 'vac_id' => $model->vac_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'can_id' => $model->can_id, 'vac_id' => $model->vac_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'can_id',
            'vac_id',
        ],
    ]) ?>

</div>
