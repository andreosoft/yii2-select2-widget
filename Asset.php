<?php
namespace andreosoft\select2;

use yii\web\AssetBundle;

class Asset extends AssetBundle {

    public $sourcePath = '@bower/select2';
    public $js = [
        'js/select2.min.js',
        'css/select2.min.css',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];

}