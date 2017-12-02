<?php

namespace app\modules\admin;
use yii\filters\AccessControl;

class Module extends \yii\base\Module
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    public $controllerNamespace = 'app\modules\admin\controllers';

    public function init()
    {
        parent::init();
    }
}
