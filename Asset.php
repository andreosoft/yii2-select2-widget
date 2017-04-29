<?php

namespace andreosoft\select2;

use yii\web\AssetBundle;

class Asset extends AssetBundle {

    public $sourcePath = '@bower/select2';
    public $css = [
        'dist/css/select2.min.css',
    ];
    public $js = [
        'dist/js/select2.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

}
