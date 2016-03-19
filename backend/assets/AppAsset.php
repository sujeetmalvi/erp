<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'admin-lte/bootstrap/css/bootstrap.min.css',
        'font-awesome/css/font-awesome.min.css',
        //'ionic/css/ionic.min.css',
        'admin-lte/dist/css/AdminLTE.min.css',
        'admin-lte/dist/css/skins/skin-blue.min.css'
    ];
    public $js = [
       // 'admin-lte/plugins/jQuery/jQuery-2.1.4.min.js',
        'admin-lte/bootstrap/js/bootstrap.min.js',
        'admin-lte/dist/js/app.min.js'

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
