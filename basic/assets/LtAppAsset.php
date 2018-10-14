<?php
/**
 * Created by PhpStorm.
 * User: Xobat
 * Date: 14.10.2018
 * Time: 19:04
 */

namespace app\assets;


use yii\web\AssetBundle;
use yii\web\View;

class LtAppAsset  extends AssetBundle {
public $basePath = '@webroot';
public $baseUrl = '@web';

public $js = [
    "https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js",
"https://oss.maxcdn.com/respond/1.4.2/respond.min.js"
];
public $jsOptions = [
  'condition' => 'lte IE9',
    'position' => View::POS_HEAD
];
}