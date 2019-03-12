<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UlasanPerusahaan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ulasan-perusahaan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_perusahaan')->textInput() ?>

    <?= $form->field($model, 'id_user')->textInput() ?>

    <?= $form->field($model, 'departemen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jabatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipe_pekerjaan')->dropDownList([ 'waktu penuh' => 'Waktu penuh', 'paruh waktu' => 'Paruh waktu', 'kontrak' => 'Kontrak', 'sukarelawan' => 'Sukarelawan', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'status_karyawan')->dropDownList([ 'masih bekerja' => 'Masih bekerja', 'sudah tidak bekerja' => 'Sudah tidak bekerja', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'lama_bekerja')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rekomendasikan_teman')->dropDownList([ 'ya' => 'Ya', 'tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'periode_gaji')->dropDownList([ 'hari' => 'Hari', 'bulan' => 'Bulan', 'tahun' => 'Tahun', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'gaji')->dropDownList([ 1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tunjangan_dan_fasilitas')->dropDownList([ 1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'peluang_pengembangan_karir')->dropDownList([ 1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'work_life_balance')->dropDownList([ 1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'lingkungan_bekerja')->dropDownList([ 1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'jajaran_manajemen')->dropDownList([ 1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tingkat_stress')->dropDownList([ 1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', 6 => '6', 7 => '7', 8 => '8', 9 => '9', 10 => '10', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
