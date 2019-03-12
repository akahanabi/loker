<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Pengalaman */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pengalamen', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pengalaman-view">

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
            'id_user',
            'nama_perusahaan',
            'posisi',
            'gaji',
            'sembunyikan_gaji',
            'bulan_mulai',
            'tahun_mulai',
            'bulan_akhir',
            'tahun_akhir',
            'tugas_dan_tanggungjawab:ntext',
        ],
    ]) ?>

</div>
