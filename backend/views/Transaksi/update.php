<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\datatransaksi */

$this->title = 'Update Datatransaksi: ' . $model->id_transaksi;
$this->params['breadcrumbs'][] = ['label' => 'Data transaksi', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_transaksi, 'url' => ['view', 'id' => $model->id_transaksi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="datatransaksi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
