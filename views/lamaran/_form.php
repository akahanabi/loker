<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Lamaran */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lamaran-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_user')->textInput() ?>

    <?= $form->field($model, 'id_lowongan')->textInput() ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'harapan_gaji')->textInput() ?>

    <?= $form->field($model, 'pesan_user_melamar')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'pesan_panggilan_wawancara')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 'terkirim' => 'Terkirim', 'terbaca' => 'Terbaca', 'tahap wawancara' => 'Tahap wawancara', 'lolos' => 'Lolos', 'ditolak' => 'Ditolak', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
