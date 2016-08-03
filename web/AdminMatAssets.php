<?php
namespace richkay\web;

use yii\base\Exception;
use yii\web\AssetBundle;

/**
 * AdminLte AssetBundle
 * @since 0.1
 */
class AdminMatAssets extends AssetBundle
{
    public $sourcePath = '@vendor/richkay/materialize/assets';
    public $css = [
        'css/style.css',
        'css/theme.css',
        'css/ui.css',
        'css/material.css',
        'css/layout.css',
        'plugins/metrojs/metrojs.min.css',
    ];
    public $js = [
        'plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js',
        'plugins/jquery/jquery-1.11.1.min.js',
        'plugins/jquery/jquery-migrate-1.2.1.min.js',
        'plugins/jquery-ui/jquery-ui-1.11.2.min.js',
        'plugins/bootstrap/js/bootstrap.min.js',
        'plugins/jquery-cookies/jquery.cookies.min.js',
        'plugins/jquery-block-ui/jquery.blockUI.min.js',
        'plugins/bootbox/bootbox.min.js',
        'plugins/mcustom-scrollbar/jquery.mCustomScrollbar.concat.min.js',
        'plugins/bootstrap-dropdown/bootstrap-hover-dropdown.min.js',
        'plugins/retina/retina.min.js',
        'plugins/backstretch/backstretch.min.js',
        'plugins/bootstrap-progressbar/bootstrap-progressbar.min.js',
        'js/sidebar_hover.js',
        'js/application.js',
        'plugins/noty/jquery.noty.packaged.min.js',
        'plugins/bootstrap-context-menu/bootstrap-contextmenu.min.js',
        'js/plugins.js',
        'js/material.js',
    ];
    public $depends = [
        //'yii\web\YiiAsset',
    ];