<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UlasanPerusahaanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ulasan Perusahaans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ulasan-perusahaan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ulasan Perusahaan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_perusahaan',
            'id_user',
            'departemen',
            'jabatan',
            //'tipe_pekerjaan',
            //'status_karyawan',
            //'lama_bekerja',
            //'rekomendasikan_teman',
            //'periode_gaji',
            //'gaji',
            //'tunjangan_dan_fasilitas',
            //'peluang_pengembangan_karir',
            //'work_life_balance',
            //'lingkungan_bekerja',
            //'jajaran_manajemen',
            //'tingkat_stress',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
