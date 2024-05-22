<?php

use app\models\Employee;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var app\models\EmployeeSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

// $this->title = 'Employee Dashboard';
// $this->params['breadcrumbs'][] = $this->title;
$this->registerCssFile('styles.css');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
  .legend-item {
    display: inline-block;
    margin-bottom: 10px;
    margin-left: 200px
  }
  
  .legend-color {
    width: 20px;
    height: 20px;
    display: inline-block;
    border-radius: 50%;
    margin-right: 5px;
    margin-left: 10px;
  }
  
  .pending { background-color: #A9A9A9; }
  .approve { background-color: #4CAF50; }
  .deny { background-color: #FF5733; }
</style>
</head>
<body>

<div class="container p-3 my-3 border">
  <h2 style="text-align: center;">Legend</h2>
</div>

<div class="container p-3 my-3 border">
<?php
// Define an array of statuses and their corresponding colors
$statuses = array(
    'Pending' => 'pending', 
    'Approved' => 'approve',
    'Denied' => 'deny'
);

// Loop through each status and generate the legend items
foreach ($statuses as $status => $color) {
    echo '<div class="legend-item">';
    echo '<span class="legend-color ' . $color . '"></span>';
    echo '<span>' . $status . '</span>';
    echo '</div>';
}
?>
</div>
</body>
</html>

<div class="employee-index">

<p>
        <?= Html::a('Create Schedule', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'facility_id',
            'location_id',
            'no_of_pax',
            'created_at',
            'updated_at',
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{update} {view} {delete}',
                'header' => '<span>Actions</span>',
                'headerOptions' => ['width' => '160',],
                'buttons' => [
                    'update' => function ($url, $model) {
                        return Html::a('<span class="fas fa-pencil-alt"></span>', $url, ['class' => '', 'title' => Yii::t('app', 'Update Project Info')]);
                    },
                    'view' => function ($url, $model) {
                        return Html::a('<span class="fa fa-eye"></span>', ['view', 'id' => $model['id']], ['title' => Yii::t('app', 'View Project Info')]);
                    },
                    'delete' => function ($url, $model) {
                        return Html::a('<span class="fa fa-trash"></span>', ['delete', 'id' => $model['id']], [
                            'title' => Yii::t('app', 'Delete'),
                            'data' => [
                                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                                'method' => 'post',
                            ],
                        ]);
                    },
                ],
            ],
        ],
    ]); ?>
    <?php Pjax::end(); ?>

   
</div>
