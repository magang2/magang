<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\caridatapelanggan */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data pelanggan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datapelanggan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Data pelanggan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_pelanggan',
            'nama_pelanggan',
            'jenis_kelamin',
            'usia',
            'alamat:ntext',
            //'pekerjaan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
