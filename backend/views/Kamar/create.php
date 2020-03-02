<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\datakamar */

$this->title = 'Create Datakamar';
$this->params['breadcrumbs'][] = ['label' => 'Datakamars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datakamar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
