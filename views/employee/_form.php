<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/** @var yii\web\View $this */
/** @var app\models\Employee $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="employee-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'facility_id')->textInput() ?>

    <?= $form->field($model, 'location_id')->textInput() ?>

    <?= $form->field($model, 'no_of_pax')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Date_Time')->widget(
            DatePicker::class,[
                'options' => ['placeholder' => 'Enter date..'],
                'pluginOptions' => [
                    'autoclose' => true,
                    'format' => 'yyyy/mm/dd',
                ]
            ])->label('Date')?>

    <?= $form->field($model, 'upadated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
