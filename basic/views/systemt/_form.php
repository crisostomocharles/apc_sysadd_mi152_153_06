<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\System */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="system-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'employee_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'employee_number')->textInput() ?>

    <?= $form->field($model, 'room_number')->textInput() ?>

    <?= $form->field($model, 'room_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hoover_carpet')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'clean_tub')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'change_bedsheet')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'replenish_supplies')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
