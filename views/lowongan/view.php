<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Lowongan */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Lowongans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="lowongan-view">

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
            'judul',
            'posisi',
            'tipe_pekerjaan',
            'gaji',
            'pengalaman',
            'id_pendidikan',
            'lokasi_kerja',
            'id_kelurahan',
            'latitude',
            'longitude',
            'deskripsi_pekerjaan:ntext',
            'persyaratan:ntext',
            'tanggal_posting',
            'tanggal_ditutup',
            'status',
        ],
    ]) ?>

</div>
