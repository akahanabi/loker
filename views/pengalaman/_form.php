<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pengalaman */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pengalaman-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_user')->textInput() ?>

    <?= $form->field($model, 'nama_perusahaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'posisi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gaji')->textInput() ?>

    <?= $form->field($model, 'sembunyikan_gaji')->dropDownList([ 'ya' => 'Ya', 'tidak' => 'Tidak', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'bulan_mulai')->dropDownList([ 'JANUARI' => 'JANUARI', 'FEBRUARI' => 'FEBRUARI', 'MARET' => 'MARET', 'APRIL' => 'APRIL', 'MEI' => 'MEI', 'JUNI' => 'JUNI', 'JULI' => 'JULI', 'AGUSTUS' => 'AGUSTUS', 'SEPTEMBER' => 'SEPTEMBER', 'OKTOBER' => 'OKTOBER', 'NOVEMBER' => 'NOVEMBER', 'DESEMBER' => 'DESEMBER', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tahun_mulai')->textInput() ?>

    <?= $form->field($model, 'bulan_akhir')->dropDownList([ 'JANUARI' => 'JANUARI', 'FEBRUARI' => 'FEBRUARI', 'MARET' => 'MARET', 'APRIL' => 'APRIL', 'MEI' => 'MEI', 'JUNI' => 'JUNI', 'JULI' => 'JULI', 'AGUSTUS' => 'AGUSTUS', 'SEPTEMBER' => 'SEPTEMBER', 'OKTOBER' => 'OKTOBER', 'NOVEMBER' => 'NOVEMBER', 'DESEMBER' => 'DESEMBER', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tahun_akhir')->textInput() ?>

    <?= $form->field($model, 'tugas_dan_tanggungjawab')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
