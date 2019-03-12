<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pengalaman */

$this->title = 'Create Pengalaman';
$this->params['breadcrumbs'][] = ['label' => 'Pengalamen', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengalaman-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
