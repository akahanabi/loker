<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LowonganSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lowongan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_perusahaan') ?>

    <?= $form->field($model, 'judul') ?>

    <?= $form->field($model, 'posisi') ?>

    <?= $form->field($model, 'tipe_pekerjaan') ?>

    <?php // echo $form->field($model, 'gaji') ?>

    <?php // echo $form->field($model, 'pengalaman') ?>

    <?php // echo $form->field($model, 'id_pendidikan') ?>

    <?php // echo $form->field($model, 'lokasi_kerja') ?>

    <?php // echo $form->field($model, 'id_kelurahan') ?>

    <?php // echo $form->field($model, 'latitude') ?>

    <?php // echo $form->field($model, 'longitude') ?>

    <?php // echo $form->field($model, 'deskripsi_pekerjaan') ?>

    <?php // echo $form->field($model, 'persyaratan') ?>

    <?php // echo $form->field($model, 'tanggal_posting') ?>

    <?php // echo $form->field($model, 'tanggal_ditutup') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
