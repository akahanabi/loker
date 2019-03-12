<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PengalamanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pengalaman-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_user') ?>

    <?= $form->field($model, 'nama_perusahaan') ?>

    <?= $form->field($model, 'posisi') ?>

    <?= $form->field($model, 'gaji') ?>

    <?php // echo $form->field($model, 'sembunyikan_gaji') ?>

    <?php // echo $form->field($model, 'bulan_mulai') ?>

    <?php // echo $form->field($model, 'tahun_mulai') ?>

    <?php // echo $form->field($model, 'bulan_akhir') ?>

    <?php // echo $form->field($model, 'tahun_akhir') ?>

    <?php // echo $form->field($model, 'tugas_dan_tanggungjawab') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
