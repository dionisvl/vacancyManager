<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Candidate */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Кандидаты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="candidate-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Уверенны что хотите удалить?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'fam:ntext',
            'name:ntext',
            'otch:ntext',
            'email:ntext',
            'date_contact',
            'status:ntext',
        ],
    ]) ?>

    <?= $this->render('_formlinked', [
        'model' => $model,
    ]) ?>
</div>
