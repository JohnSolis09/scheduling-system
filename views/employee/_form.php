<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use kartik\select2\Select2;

/** @var yii\web\View $this */
/** @var app\models\Employee $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="employee-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'facility_id')->textInput() ?>

    <?= $form->field($model, 'location_id')->widget(Select2::class, [
        'data' => \yii\helpers\ArrayHelper::map(
            \app\models\location::find()->all(),
            'location_name',
            'location_name'
        ),
        'options' => ['placeholder' => 'Select Location', 'multiple' => false],
        'pluginOptions' => [
            'allowClear' => true,
            'tags' => true,
            // 'tokenSeparators' => [',', ' '],
        ],
    ])->label('Location') ?>
    <?= $form->field($model, 'no_of_pax')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->widget(
        DatePicker::class, [
            'options' => ['placeholder' => 'Enter date..'],
            'pluginOptions' => [
                'autoclose' => true,
                'format' => 'yyyy/mm/dd',
            ]
        ])->label('Date') ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
