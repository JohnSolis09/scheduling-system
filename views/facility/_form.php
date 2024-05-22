<?php
use app\models\Location;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Facility */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="facility-form">

	<?php $form = ActiveForm::begin(); ?>

	<?= $form->field($model, 'location_id')->widget(Select2::class, [
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

	<?= $form->field($model, 'facility_name')->textInput(['maxlength' => true]) ?>

	<?php
	echo $form->field($model, 'status')->dropDownList(['1' => 'Available', '0' => 'Unavailable'], ['prompt' => 'Select Option']);
	?>

	<?php if (!Yii::$app->request->isAjax) { ?>
		<div class="form-group">
			<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
		</div>
	<?php } ?>

	<?php ActiveForm::end(); ?>

</div>