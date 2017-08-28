<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SystemSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="system-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'employee_id') ?>

    <?= $form->field($model, 'employee_name') ?>

    <?= $form->field($model, 'employee_number') ?>

    <?= $form->field($model, 'room_number') ?>

    <?= $form->field($model, 'room_type') ?>

    <?php // echo $form->field($model, 'hoover_carpet') ?>

    <?php // echo $form->field($model, 'clean_tub') ?>

    <?php // echo $form->field($model, 'change_bedsheet') ?>

    <?php // echo $form->field($model, 'replenish_supplies') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
