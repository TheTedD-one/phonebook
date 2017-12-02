<?php

use yii\helpers\Html;

$this->title = 'Добавление номера';
$this->params['breadcrumbs'][] = ['label' => 'Записи', 'url' => ['person/index']];
$this->params['breadcrumbs'][] = ['label' => 'Запись', 'url' => ['person/view', 'id' => $model->person_id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phone-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
