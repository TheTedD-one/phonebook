<?php

use yii\helpers\Html;

$this->title = 'Редактирование записи';
$this->params['breadcrumbs'][] = ['label' => 'Записи', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'Запись', 'url' => ['person/view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = ['label' => 'Редактирование записи'];
?>
<div class="person-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', ['model' => $model]) ?>

</div>
