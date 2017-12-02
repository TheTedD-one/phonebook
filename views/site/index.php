<?php

use app\components\ContentViewWidget;
use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = 'Главная';
?>

<h2>Форма поиска</h2>

<?= Html::beginForm(\yii\helpers\Url::to('/site/search'), 'GET'); ?>
<div class="row">
    <div class="col-md-3">
        <?= Html::label('Поиск по', 'type') ?>
        <?= Html::dropDownList('type', 'null',
            ['1' => 'Фамилии', '2' => 'Имени'],
            ['id' => 'type', 'class' => 'form-control'])
        ?>
    </div>
    <div class="col-md-3">
        <?= Html::label('Ключ поиска', 'value') ?>
        <?= Html::input('text', 'value', null, ['class' => 'form-control', 'placeholder' => 'Иванов'])
        ?>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <?= Html::submitButton('Найти', ['class' => 'btn btn-success btn-margin']) ?>
    </div>
</div>
<?= Html::endForm(); ?>

<h2>Все данные</h2>

<?= ContentViewWidget::widget(['data' => $models]); ?>

<?= LinkPager::widget(['pagination' => $pages]); ?>


