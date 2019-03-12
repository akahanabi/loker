<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LamaranSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lamarans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lamaran-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Lamaran', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_user',
            'id_lowongan',
            'tanggal',
            'harapan_gaji',
            //'pesan_user_melamar:ntext',
            //'pesan_panggilan_wawancara',
            //'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
