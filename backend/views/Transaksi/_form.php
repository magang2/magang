<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\datatransaksi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="datatransaksi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_pelanggan')->textInput() ?>

    <?= $form->field($model, 'id_data_kamar')->textInput() ?>

    <?= $form->field($model, 'tanggal_checkin')->textInput() ?>

    <?= $form->field($model, 'tanggal_checkout')->textInput() ?>

    <?= $form->field($model, 'totalbiaya')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
