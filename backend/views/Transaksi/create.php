<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\datatransaksi */

$this->title = 'Create Datatransaksi';
$this->params['breadcrumbs'][] = ['label' => 'Datatransaksis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datatransaksi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
