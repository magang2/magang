<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\caridatapelanggan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="datapelanggan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_pelanggan') ?>

    <?= $form->field($model, 'nama_pelanggan') ?>

    <?= $form->field($model, 'jenis_kelamin') ?>

    <?= $form->field($model, 'usia') ?>

    <?= $form->field($model, 'alamat') ?>

    <?php // echo $form->field($model, 'pekerjaan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
