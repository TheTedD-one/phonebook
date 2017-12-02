<?php

namespace app\components;

use yii\base\Widget;

class ContentViewWidget extends Widget
{
    public $data;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        return $this->getHtml();
    }

    private function getHtml() {
        ob_start();
        require __DIR__ . '/contentView_tpl/html_tpl.php';
        return ob_get_clean();
    }
}