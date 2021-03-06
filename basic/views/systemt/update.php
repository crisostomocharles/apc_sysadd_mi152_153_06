<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\System */

$this->title = 'Update System: ' . $model->employee_id;
$this->params['breadcrumbs'][] = ['label' => 'Systems', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->employee_id, 'url' => ['view', 'id' => $model->employee_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="system-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
