<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\UlasanPerusahaan */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ulasan Perusahaans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ulasan-perusahaan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'id_perusahaan',
            'id_user',
            'departemen',
            'jabatan',
            'tipe_pekerjaan',
            'status_karyawan',
            'lama_bekerja',
            'rekomendasikan_teman',
            'periode_gaji',
            'gaji',
            'tunjangan_dan_fasilitas',
            'peluang_pengembangan_karir',
            'work_life_balance',
            'lingkungan_bekerja',
            'jajaran_manajemen',
            'tingkat_stress',
        ],
    ]) ?>

</div>
