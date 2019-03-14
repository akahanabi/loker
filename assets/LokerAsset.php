<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class LokerAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'themes/css/colors/blue.css',
        'themes/css/style.css'
    ];
    public $js = [
        'themes/js/jquery-3.3.1.min.js',
	    'themes/js/jquery-migrate-3.0.0.min.js',
	    'themes/js/mmenu.min.js',
	    'themes/js/tippy.all.min.js',
	    'themes/js/simplebar.min.js',
	    'themes/js/bootstrap-slider.min.js',
	    'themes/js/bootstrap-select.min.js',
	    'themes/js/snackbar.js',
	    'themes/js/clipboard.min.js',
	    'themes/js/counterup.min.js',
	    'themes/js/magnific-popup.min.js',
	    'themes/js/slick.min.js',
	    'themes/js/custom.js'
    ];
    public $depends = [
        /*'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',*/
    ];
    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];
}
