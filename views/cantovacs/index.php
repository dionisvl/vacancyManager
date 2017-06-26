<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Can To Vacs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="can-to-vacs-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Can To Vacs', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'can_id',
            'vac_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
