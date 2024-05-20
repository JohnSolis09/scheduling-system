<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Employee */
?>
<div class="employee-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'facility_id',
            'location_id',
            'no_of_pax',
            'created_at',
            'upadated_at',
        ],
    ]) ?>

</div>
