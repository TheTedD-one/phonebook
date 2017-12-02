<?php

namespace app\models;


class Person extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'person';
    }

    public function rules()
    {
        return [
            [['first_name', 'last_name'], 'trim'],
            [['first_name', 'last_name'], 'required'],
            [['first_name', 'last_name'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'Имя',
            'last_name' => 'Фамилия',
        ];
    }

    public function getPhones()
    {
        return $this->hasMany(Phone::className(), ['person_id' => 'id']);
    }
}
