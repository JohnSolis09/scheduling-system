<?php

use app\models\Facility;
use app\models\Location;
use yii\helpers\ArrayHelper;
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

    <!-- <?= $form->field($model, 'location_id')->widget(Select2::class, [
                'data' => ArrayHelper::map(Location::getLocation(), 'id', 'location_name'),
                // 'theme' => Select2::THEME_DEFAULT,
                'showToggleAll' => true,
                'options' => [
                    'multiple' => false,
                    'placeholder' => 'Select location...',
                ],
                'pluginOptions' => [
                    'dropdownAutoWidth' => true,
                    'width' => '100%',
                    'height' => '100%',
                    'scrollAfterSelect' => false
                ]
            ]) ?>
     -->

     <?= $form->field($model, 'location_id')->dropDownList(
        ArrayHelper::map(Location::find()->all(), 'id', 'location_name'), [
        'prompt'=> 'Select Location',
        'oncange'=>'
        .post("index.php?=locations/list&id='.'"+$(this).val(), funtion(data) {
                $( "select#models-contact").html(data);
        });'
            ]); ?>

    <?= $form->field($model, 'facility_id')->widget(Select2::class, [
    'data' => ArrayHelper::map(Facility::getFacility(), 'id', 'facility_name'),
    // 'theme' => Select2::THEME_DEFAULT,
    'showToggleAll' => true,
    'options' => [
        'multiple' => false,
        'placeholder' => 'Select facility...',
        'id' => 'facility-id',
    ],
    'pluginOptions' => [
        'dropdownAutoWidth' => true,
        'width' => '100%',
        'height' => '100%',
        'scrollAfterSelect' => false
    ],
    ]) ?>

    
        
    

    <?= $form->field($model, 'no_of_pax')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->widget(
        DatePicker::class, [
            'options' => ['placeholder' => 'Enter date..'],
            'pluginOptions' => [
                'autoclose' => true,
                'format' => 'yyyy/mm/dd',
            ]
        ])->label('Date') ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
