<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LowonganSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lowongans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lowongan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Lowongan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_perusahaan',
            'judul',
            'posisi',
            'tipe_pekerjaan',
            //'gaji',
            //'pengalaman',
            //'id_pendidikan',
            //'lokasi_kerja',
            //'id_kelurahan',
            //'latitude',
            //'longitude',
            //'deskripsi_pekerjaan:ntext',
            //'persyaratan:ntext',
            //'tanggal_posting',
            //'tanggal_ditutup',
            //'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
