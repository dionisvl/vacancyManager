<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vacancy".
 *
 * @property integer $id
 * @property string $name
 * @property string $conditions
 * @property string $respons
 * @property string $demands
 * @property string $date_open
 * @property string $date_close
 * @property integer $salary
 * @property boolean $status
 */
class Vacancy extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vacancy';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'conditions', 'respons', 'demands','date_open','date_close'], 'string'],
            [['salary'], 'integer'],
            [['status'], 'boolean'],
           // [['linked_candidates'],'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '№',
            'name' => 'Название вакансии',
            'conditions' => 'Условия',
            'respons' => 'Обязанности',
            'demands' => 'Требования',
            'date_open' => 'Дата открытия вакансии',
            'date_close' => 'Дата закрытия вакансии',
            'salary' => 'Оклад',
            'status' => 'Статус (открыта/закрыта)',
            //'linked_candidates' => 'Привязанные кандидаты',
        ];
    }
}
