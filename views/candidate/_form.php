<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use yii\widgets\ActiveField; // <- Для DropDownList
use kartik\datetime\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Candidate */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="candidate-form">

    <?php $form = ActiveForm::begin();

    $items = [//задаем параметры для выпадающего списка dropDownList
        'Новый' => 'Новый',
        'Приглашен' => 'Приглашен',
        'Принят' => 'Принят',
        'Отложен' => 'Отложен',
        'Отклонен' => 'Отклонен',
        'Отказался' => 'Отказался'
    ];
    $params = [
        'prompt' => 'Выберите статус...',
        //'multiple' => 'multiple'
    ];
    ?>

    <?= $form->field($model, 'fam')->textarea(['rows' => 1]) ?>

    <?= $form->field($model, 'name')->textarea(['rows' => 1]) ?>

    <?= $form->field($model, 'otch')->textarea(['rows' => 1]) ?>

    <?= $form->field($model, 'email')->textarea(['rows' => 1]) ?>

    <?=//активация виджета DatePicker Для ввода даты последнего контакта
    $form->field($model, 'date_contact')->widget(DateTimePicker::className(),[
        'name' => 'dopen',
        'type' => DateTimePicker::TYPE_INPUT,
        'options' => ['placeholder' => 'Ввод даты последнего контакта...'],
        'convertFormat' => true,
        'value'=> date("Y-m-d", $model->date_contact),
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

    <?= $form->field($model, 'status')->dropDownList($items,$params);    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
