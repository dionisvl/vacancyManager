<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\datetime\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Vacancy */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vacancy-form">
<!--    --><?php
//    if($model->date_close) {
//    //$model->date_close = date("d.m.Y H:i", (integer) $model->date_close);
//    $model->date_close = date("Y-m-d",  $model->date_close);
//    }
//    ?>


    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textarea(['rows' => 1]) ?>

    <?= $form->field($model, 'conditions')->textarea(['rows' => 3]) ?>

    <?= $form->field($model, 'respons')->textarea(['rows' => 3]) ?>

    <?= $form->field($model, 'demands')->textarea(['rows' => 3]) ?>

    <?=//активация виджета DatePicker Для ввода даты открытия
    $form->field($model, 'date_open')->widget(DateTimePicker::className(),[
        'name' => 'dopen',
        'type' => DateTimePicker::TYPE_INPUT,
        'options' => ['placeholder' => 'Ввод даты открытия...'],
        'convertFormat' => true,
        'value'=> date("Y-m-d", $model->date_open),
        'pluginOptions' => [
            'format' => 'yyyy-MM-dd',
            'startView' => 'month',//отключим ввод времени
            'minView' => 'month',//отключим ввод времени
            'autoclose'=>true,
            'weekStart'=>1, //неделя начинается с понедельника
            'startDate' => 'today', //самая ранняя возможная дата
            'todayBtn'=>true, //снизу кнопка "сегодня"
        ]
    ]);
    ?>

    <?=//активация виджета DatePicker Для ввода даты закрытия
    $form->field($model, 'date_close')->widget(DateTimePicker::className(),[
        'name' => 'dсlose',
        'type' => DateTimePicker::TYPE_INPUT,
        'options' => ['placeholder' => 'Ввод даты закрытия...'],
        'convertFormat' => true,
        'value'=> date("Y-m-d", $model->date_close),
        'pluginOptions' => [
            'format' => 'yyyy-MM-dd',
            'startView' => 'month',//отключим ввод времени
            'minView' => 'month',//отключим ввод времени
            'autoclose'=>true,
            'weekStart'=>1, //неделя начинается с понедельника
            'startDate' => 'today', //самая ранняя возможная дата
            'todayBtn'=>true, //снизу кнопка "сегодня"
        ]
    ]);
    ?>

    <?= $form->field($model, 'salary')->textInput() ?>

    <?= $form->field($model, 'status')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
