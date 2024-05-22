<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Analyst $model */

$this->title = 'Create Analyst';
$this->params['breadcrumbs'][] = ['label' => 'Analysts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="analyst-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
