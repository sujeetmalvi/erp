<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\ClassMaster */

$this->title = 'Create Class Master';
$this->params['breadcrumbs'][] = ['label' => 'Class Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="class-master-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
