<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\InstutionDetails */

$this->title = 'Create Instution Details';
$this->params['breadcrumbs'][] = ['label' => 'Instution Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="instution-details-create">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
