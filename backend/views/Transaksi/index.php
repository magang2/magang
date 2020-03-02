<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\caridatatransaksi */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Datatransaksis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datatransaksi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Datatransaksi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_transaksi',
            'id_pelanggan',
            'id_data_kamar',
            'tanggal_checkin',
            'tanggal_checkout',
            //'totalbiaya',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
