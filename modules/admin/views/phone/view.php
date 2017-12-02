<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = 'Номер телефона';
$this->params['breadcrumbs'][] = ['label' => 'Записи', 'url' => ['person/index']];
$this->params['breadcrumbs'][] = ['label' => 'Запись', 'url' => ['person/view', 'id' => $model->person_id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phone-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'number',
            'type',
            'country',
        ],
    ]) ?>

</div>
