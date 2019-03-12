<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sertifikasi */

$this->title = 'Create Sertifikasi';
$this->params['breadcrumbs'][] = ['label' => 'Sertifikasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sertifikasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
