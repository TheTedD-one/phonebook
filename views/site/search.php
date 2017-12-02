<?php

use app\components\ContentViewWidget;
use yii\helpers\Url;

$this->title = 'Поиск';
?>

<?php if(!empty($models)): ?>
<h2>Результаты поиска</h2>
<?= ContentViewWidget::widget(['data' => $models]); ?>
<?php else: ?>
<h2>По данному запросу ничего не найдено</h2>
<?php endif; ?>

<?= \yii\helpers\Html::a('На главную', Url::to(['site/index']), ['class' => "btn btn-success"]) ?>

