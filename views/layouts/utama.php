<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\models\Industri;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <div class="navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Neang Gawe</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Lowongan <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Semua Perusahaan</a></li>
                        <li class="dropdown-submenu">
                            <a class="test" tabindex="-1" href="#">Berdasarkan Tipe <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a tabindex="-1" href="#">Waktu Penuh</a></li>
                                <li><a tabindex="-1" href="#">Paruh Waktu</a></li>
                                <li><a tabindex="-1" href="#">Kontrak</a></li>
                                <li><a tabindex="-1" href="#">Pekerja Lepas</a></li>
                                <li><a tabindex="-1" href="#">Sukarelawan / Magang</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Berdasarkan Popularitas</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Perusahaan <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Semua Perusahaan</a></li>
                        <li class="dropdown-submenu">
                            <a class="test" tabindex="-1" href="#">Berdasarkan Bidang <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <?php foreach(Industri::find()->all() as $industri){ ?>
                                <li><a tabindex="-1" href="#"><?= $industri['nama']; ?></a></li>
                                <?php } ?>
                            </ul>
                        </li>
                        <li><a href="#">Berdasarkan Popularitas</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
