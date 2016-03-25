<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ClassMaster */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="class-master-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="box box-success">
    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
        </div>

    <?php ActiveForm::end(); ?>

</div>
