<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UlasanPerusahaanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ulasan-perusahaan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_perusahaan') ?>

    <?= $form->field($model, 'id_user') ?>

    <?= $form->field($model, 'departemen') ?>

    <?= $form->field($model, 'jabatan') ?>

    <?php // echo $form->field($model, 'tipe_pekerjaan') ?>

    <?php // echo $form->field($model, 'status_karyawan') ?>

    <?php // echo $form->field($model, 'lama_bekerja') ?>

    <?php // echo $form->field($model, 'rekomendasikan_teman') ?>

    <?php // echo $form->field($model, 'periode_gaji') ?>

    <?php // echo $form->field($model, 'gaji') ?>

    <?php // echo $form->field($model, 'tunjangan_dan_fasilitas') ?>

    <?php // echo $form->field($model, 'peluang_pengembangan_karir') ?>

    <?php // echo $form->field($model, 'work_life_balance') ?>

    <?php // echo $form->field($model, 'lingkungan_bekerja') ?>

    <?php // echo $form->field($model, 'jajaran_manajemen') ?>

    <?php // echo $form->field($model, 'tingkat_stress') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
