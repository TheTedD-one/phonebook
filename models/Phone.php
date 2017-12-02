<?php

namespace app\models;

use app\components\PhonesBehavior;
use borales\extensions\phoneInput\PhoneInputValidator;
use yii\db\ActiveRecord;


class Phone extends ActiveRecord
{
    public function behaviors()
    {
        return [
            PhonesBehavior::className(),
        ];
    }

    public static function tableName()
    {
        return 'phone';
    }

    public function rules()
    {
        return [
            [['type', 'number'], 'required'],
            [['number'], 'trim'],
            [['type'], 'string'],
            [['number'], 'string', 'max' => 255],
            [['number'], PhoneInputValidator::className()],
            [['person_id'], 'exist', 'skipOnError' => true, 'targetClass' => Person::className(), 'targetAttribute' => ['person_id' => 'id']],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'person_id' => 'Person ID',
            'number' => 'Номер телефона',
            'type' => 'Тип',
            'country' => 'Страна',
        ];
    }

    public function getPerson()
    {
        return $this->hasOne(Person::className(), ['id' => 'person_id']);
    }
}
