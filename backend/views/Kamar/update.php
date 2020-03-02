<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\datakamar */

$this->title = 'Update Datakamar: ' . $model->id_data_kamar;
$this->params['breadcrumbs'][] = ['label' => 'Data kamar', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_data_kamar, 'url' => ['view', 'id' => $model->id_data_kamar]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="datakamar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
