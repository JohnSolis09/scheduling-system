<?php

use app\models\Analyst;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\AnalystSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Analysts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="analyst-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Analyst', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'request_id',
            'facility_id',
            'location_id',
            //'no_of_pax',
            //'archive',
            //'sched_status',
            //'status',
            //'approved_by',
            //'approve_at',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Analyst $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
