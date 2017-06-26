<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "candidate".
 *
 * @property integer $id
 * @property string $fam
 * @property string $name
 * @property string $otch
 * @property string $email
 * @property string $date_contact
 * @property string $status
 */
class Candidate extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'candidate';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fam', 'name', 'otch', 'email', 'status'], 'string'],
            [['date_contact'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '№',
            'fam' => 'Фамилия',
            'name' => 'Имя',
            'otch' => 'Отчество',
            'email' => 'E-mail',
            'date_contact' => 'Дата последнего контакта',
            'status' => 'Статус',
        ];
    }
}
