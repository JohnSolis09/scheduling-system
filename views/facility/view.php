<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Facility */
?>
<div class="facility-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'facility_name',
            'status',
        ],
    ]) ?>

</div>
