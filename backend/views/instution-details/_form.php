<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\InstutionDetails */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="instution-details-form">

    <?php $form = ActiveForm::begin(['class'=>'form-horizontal']); ?>
    <div class="col-md-6">
    <div class="box box-success">
    <div class="box-body">

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textarea(['rows' => 4]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
    </div>
    </div>
    </div>
    <div class="col-md-6">
    <div class="box box-success">
    <div class="box-body">
    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mobile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact_person')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
        </div>
        </div>
        </div>

    <?php ActiveForm::end(); ?>

</div>
