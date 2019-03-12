<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\LokerAsset;

LokerAsset::register($this);
?>
<?php $this->beginPage() ?>
<!doctype html>
<html>
<head>
    <title><?= Html::encode($this->title) ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
        <!-- Wrapper -->
        <div id="wrapper">
            <?= $this->render('_partials/_header'); ?>
            <?php echo $content; ?>
            <?= $this->render('_partials/_footer'); ?>
        </div>
        <!-- Wrapper / End -->
        <?= $this->render('_partials/_sign-dialog'); ?>
        <?= $this->render('_partials/_scripts'); ?>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
