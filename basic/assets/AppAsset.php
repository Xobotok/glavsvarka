<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle {
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        '/css/font-awesome.min.css',
        '/css/materialdesignicons.min.css',
        '/css/bootstrap.min.css',
        'vendors/revolution/css/settings.css',
        'vendors/revolution/css/layers.css',
        'vendors/revolution/css/navigation.css',
        'vendors/animate-css/animate.css',
        'vendors/owl-carousel/assets/owl.carousel.min.css',
        '/css/style.css',
        '/css/responsive.css',
        '/css/site.css',
    ];
    public $js = [
        "js/jquery-2.2.4.js",
        "js/bootstrap.min.js",
        "vendors/revolution/js/jquery.themepunch.tools.min.js",
        "vendors/revolution/js/jquery.themepunch.revolution.min.js",
        "vendors/revolution/js/extensions/revolution.extension.video.min.js",
        "vendors/revolution/js/extensions/revolution.extension.slideanims.min.js",
        "vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js",
        "vendors/revolution/js/extensions/revolution.extension.navigation.min.js",
        "vendors/owl-carousel/owl.carousel.min.js",
        "vendors/isotope/imagesloaded.pkgd.min.js",
        "vendors/isotope/isotope.pkgd.min.js",
        "vendors/magnific-popup/jquery.magnific-popup.min.js",
        "vendors/counterup/waypoints.min.js",
        "vendors/counterup/jquery.counterup.min.js",
        "vendors/flex-slider/jquery.flexslider-min.js",
        "https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE",
        "js/gmaps.min.js",
        "js/theme.js"
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
