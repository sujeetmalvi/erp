<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\InstutionDetails */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Instution Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="instution-details-view">


    <div class="box box-info">
    <div class="box-header">
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    </div>
    <div class="box-body">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'address:ntext',
            'email:email',
            'phone',
            'mobile',
            'contact_person',
        ],
    ]) ?>
        </div>

</div>
    </div>
