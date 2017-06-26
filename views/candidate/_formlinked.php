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

<div class="linked-form">

    <?php $form = ActiveForm::begin();

    $items = [//задаем параметры для выпадающего списка dropDownList
        'Новый' => 'Новый'
    ];
    $params = [
        'prompt' => 'Выберите вакансии для свизи или отмены...',
        'multiple' => 'multiple'
    ];
    ?>

    <?php
    $CanId = $model->id;
    $posts = Yii::$app->db->createCommand("
        SELECT * FROM vacancy AS v
        RIGHT JOIN 
        (SELECT * 
            FROM can_to_vacs  
            WHERE can_id = $CanId
        )AS c on v.id = c.vac_id
    ")->queryAll();


    $items = ArrayHelper::map($posts,'id','name');
    $items = array_unique($items);

    echo "<b>Список привязанных вакансий:</b><ul>";
    foreach($items as $value){
        echo "<li>",$value, "</>";
    }
    echo "</ul>";

    $linkmodel = new app\models\cantovacs;
    ?>


    <?= $form->field($linkmodel, 'vac_id[]')->dropDownList($items,$params);    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>


<?php


//PDO метод
//    // получаем все отношения из таблицы can_to_vacs
//    $relations = \app\models\CanToVacs::find()->all();
//    // формируем массив, с ключем равным полю 'id' и значением равным полю 'can_id' //это кандидаты
//    $items = ArrayHelper::map($relations,'id','can_id');
//    //формируем массив вакансий
//    $items1 = ArrayHelper::map($relations,'id','vac_id');
//    $list = array_keys ($items,$model->id);
//
//    $stack = array();
//
//    foreach($items1 as $key=>$value)
//    {
//        foreach($list as $val){
//            if ($val==$key){
//                array_push($stack, "$value");
//            }
//        }
//    }
//    $stack = array_unique($stack);
//    //print_r($stack);echo "<br>";
//
//    $vacs = \app\models\vacancy::find()->all();
//    $items = ArrayHelper::map($vacs,'id','name');
//
//    echo "Список привязанных вакансий: ";
//    foreach($items as $key=>$value){
//        foreach($stack as $val) {
//            if ($val == $key) {
//                echo $value, "<br>";
//            }
//        }
//    }
?>