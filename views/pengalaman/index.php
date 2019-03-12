<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PengalamanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pengalamen';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengalaman-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pengalaman', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_user',
            'nama_perusahaan',
            'posisi',
            'gaji',
            //'sembunyikan_gaji',
            //'bulan_mulai',
            //'tahun_mulai',
            //'bulan_akhir',
            //'tahun_akhir',
            //'tugas_dan_tanggungjawab:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
