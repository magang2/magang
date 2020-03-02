<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\datakamar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="datakamar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kamar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'biayasewa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gambar')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
