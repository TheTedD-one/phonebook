<?php

$this->title = 'Подробная информация';
?>

<h2><?= $model->last_name . ' ' . $model->first_name?></h2>

<?php foreach($phones as $phone): ?>
<p class="detail-phones"><?= $phone->type . ': ' . $phone->number . ', ' . $phone->country?></p>
<?php endforeach; ?>

<?= \yii\helpers\Html::a('Назад', Yii::$app->request->referrer, ['class' => "btn btn-success"]) ?>


