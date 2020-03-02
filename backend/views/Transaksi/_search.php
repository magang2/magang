<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\caridatatransaksi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="datatransaksi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_transaksi') ?>

    <?= $form->field($model, 'id_pelanggan') ?>

    <?= $form->field($model, 'id_data_kamar') ?>

    <?= $form->field($model, 'tanggal_checkin') ?>

    <?= $form->field($model, 'tanggal_checkout') ?>

    <?php // echo $form->field($model, 'totalbiaya') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
