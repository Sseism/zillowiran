<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        'css/morris.css',
        'css/style.css',
        'css/icons.css'
    ];
    public $js = [
//        'js/jquery.min.js',
        'js/bootstrap.bundle.min.js',
        'js/modernizr.min.js',
        'js/detect.js',
        'js/fastclick.js',
        'js/jquery.slimscroll.js',
        'js/jquery.blockUI.js',
        'js/waves.js',
        'js/jquery.nicescroll.js',
        'js/jquery.scrollTo.min.js',
       
//        'js/raphael.min.js',
//        'js/dashboard.int.js',
        'js/app.js',
    
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
