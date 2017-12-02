<?php
namespace app\components;

use libphonenumber\geocoding\PhoneNumberOfflineGeocoder;
use libphonenumber\PhoneNumberUtil;
use yii\base\Behavior;
use yii\db\ActiveRecord;

class PhonesBehavior extends Behavior
{
    public $owner;

    public function events()
    {
        return [
            ActiveRecord::EVENT_AFTER_VALIDATE => 'beforeValidate',
        ];
    }

    public function beforeValidate($event)
    {
        $this->formatNumber();
        $this->owner->country = $this->getCountry();
    }

    private function formatNumber()
    {
        //Преобразовываем номер телефона перед сохранением в базу
        $this->owner->number = str_replace([' ', '-', '(', ')'],"", $this->owner->number);
    }

    private function getPhoneUtilNumber()
    {
        //Получение информации о номере телефона
        $phoneUtil = PhoneNumberUtil::getInstance();
        return $phoneUtil->parse($this->owner->number);
    }

    private function getCountry()
    {
        $number = $this->getPhoneUtilNumber();

        //Получение страны на основе информации о номере телефона
        $geocoder = PhoneNumberOfflineGeocoder::getInstance();
        return $geocoder->getDescriptionForNumber($number, 'ru');
    }
}