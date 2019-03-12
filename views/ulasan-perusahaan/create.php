<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UlasanPerusahaan */

$this->title = 'Create Ulasan Perusahaan';
$this->params['breadcrumbs'][] = ['label' => 'Ulasan Perusahaans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ulasan-perusahaan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
