<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\InstutionDetailsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Instution Details';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="instution-details-index">

        <div class="box box-primary">
    <div class="box-header with-border">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <?= Html::a('Create Instution Details', ['create'], ['class' => 'btn btn-success']) ?>

        </div>

<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],


            'name',
            'address:ntext',
            'email:email',
            'phone',
            // 'mobile',
            // 'contact_person',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
 </div>

