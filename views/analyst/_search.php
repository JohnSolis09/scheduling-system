<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\AnalystSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="analyst-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'request_id') ?>

    <?= $form->field($model, 'facility_id') ?>

    <?= $form->field($model, 'location_id') ?>

    <?php // echo $form->field($model, 'no_of_pax') ?>

    <?php // echo $form->field($model, 'archive') ?>

    <?php // echo $form->field($model, 'sched_status') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'approved_by') ?>

    <?php // echo $form->field($model, 'approve_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
