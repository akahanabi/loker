<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BahasaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bahasas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bahasa-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Bahasa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_user',
            'bahasa',
            'level_berbicara',
            'level_menulis_membaca',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
