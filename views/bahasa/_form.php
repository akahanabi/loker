<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Bahasa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bahasa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_user')->textInput() ?>

    <?= $form->field($model, 'bahasa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'level_berbicara')->dropDownList([ 'baik' => 'Baik', 'cukup' => 'Cukup', 'kurang' => 'Kurang', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'level_menulis_membaca')->dropDownList([ 'baik' => 'Baik', 'cukup' => 'Cukup', 'kurang' => 'Kurang', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
