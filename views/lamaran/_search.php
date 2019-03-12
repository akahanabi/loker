<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LamaranSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lamaran-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_user') ?>

    <?= $form->field($model, 'id_lowongan') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'harapan_gaji') ?>

    <?php // echo $form->field($model, 'pesan_user_melamar') ?>

    <?php // echo $form->field($model, 'pesan_panggilan_wawancara') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
