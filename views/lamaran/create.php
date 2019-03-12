<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Lamaran */

$this->title = 'Create Lamaran';
$this->params['breadcrumbs'][] = ['label' => 'Lamarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lamaran-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
