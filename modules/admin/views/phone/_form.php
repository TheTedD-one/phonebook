<?php

use borales\extensions\phoneInput\PhoneInput;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="phone-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'number', ['options' => ['class' => 'intl-tel-input allow-dropdown phone__field']])->widget(PhoneInput::className(), [
        'jsOptions' => [
            'nationalMode' => false,
            'preferredCountries' => ['kz', 'ru'],
        ],
    ])->label('Номер телефона', ['class' => 'control-label phone__label']); ?>

    <?= $form->field($model, 'type')->dropDownList([ 'мобильный' => 'мобильный', 'домашний' => 'домашний', 'рабочий' => 'рабочий', 'другой' => 'другой', ]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
