<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/** @var yii\web\View $this */
/** @var app\models\Employee $model */
/** @var yii\widgets\ActiveForm $form */

$this->title = 'Employee Form';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">

    <div class="jumbotron">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>

    <div class="body-content">

        <div class="employee-form">

            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'facility_id')->textInput() ?>

            <?= $form->field($model, 'location_id')->textInput() ?>

            <?= $form->field($model, 'no_of_pax')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'Date_Time')->widget(
                DatePicker::class, [
                    'options' => ['placeholder' => 'Enter date..'],
                    'pluginOptions' => [
                        'autoclose' => true,
                        'format' => 'yyyy/mm/dd',
                    ]
                ])->label('Date') 
            ?>

            <?= $form->field($model, 'upadated_at')->textInput() ?>

            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>

    </div>
</div>
