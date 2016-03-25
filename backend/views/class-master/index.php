<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\ClassMasterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Class Masters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="class-master-index">
    <div class="box box-primary">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <div class="box-header">
    <p>
        <?= Html::a('Create Class Master', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
        </div>
    <div class="box box-body">
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
            'name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
        </div>
    </div>
