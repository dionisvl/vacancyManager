<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "can_to_vacs".
 *
 * @property integer $can_id
 * @property integer $vac_id
 */
class CanToVacs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'can_to_vacs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['can_id', 'vac_id'], 'required'],
            [['can_id', 'vac_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'can_id' => 'кандидаты',
            'vac_id' => 'вакансии',
        ];
    }
}
