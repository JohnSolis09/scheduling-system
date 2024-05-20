<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Location */
?>
<div class="location-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'location_name',
            'status',
        ],
    ]) ?>

</div>
