<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\EmployeeSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="employee-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'facility_id') ?>

    <?= $form->field($model, 'location_id') ?>

    <?= $form->field($model, 'no_of_pax') ?>

    <?= $form->field($model, 'date_time') ?>

    <?php // echo $form->field($model, 'upadated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
