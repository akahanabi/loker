<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Lowongan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lowongan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_perusahaan')->textInput() ?>

    <?= $form->field($model, 'judul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'posisi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipe_pekerjaan')->dropDownList([ 'waktu penuh' => 'Waktu penuh', 'paruh waktu' => 'Paruh waktu', 'kontrak' => 'Kontrak', 'sukarelawan' => 'Sukarelawan', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'gaji')->textInput() ?>

    <?= $form->field($model, 'pengalaman')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_pendidikan')->textInput() ?>

    <?= $form->field($model, 'lokasi_kerja')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_kelurahan')->textInput() ?>

    <?= $form->field($model, 'latitude')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'longitude')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deskripsi_pekerjaan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'persyaratan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tanggal_posting')->textInput() ?>

    <?= $form->field($model, 'tanggal_ditutup')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 'tersedia' => 'Tersedia', 'tidak tersedia' => 'Tidak tersedia', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
