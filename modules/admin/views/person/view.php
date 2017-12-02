<?php

use yii\grid\GridView;
use yii\helpers\Html;
use yii\widgets\DetailView;


$this->title = 'Запись';
$this->params['breadcrumbs'][] = ['label' => 'Записи', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="person-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы действительно хотите удалить эту запись?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'last_name',
            'first_name',
        ],
    ]) ?>

    <?= Html::a('Добавить номер', ['phone/create', 'id' => $model->id], ['class' => 'btn btn-success btn-margin']) ?>

    <?= GridView::widget([
        'dataProvider' => $phonesDataProvider,
        'emptyText' => 'Нет номеров',
        'summary'=>"",
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'type',
            'number',
            'country',

            [
                'class' => 'yii\grid\ActionColumn',
                'controller' => 'phone',
                'template' => '{update} {delete}'
            ],
        ],
    ]); ?>
</div>
