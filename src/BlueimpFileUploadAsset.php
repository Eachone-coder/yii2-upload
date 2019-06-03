<?php
/**
 * Created by PhpStorm.
 * User: huijiewei
 * Date: 2019-03-23
 * Time: 17:25
 */

namespace huijiewei\upload;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;

class BlueimpFileUploadAsset extends AssetBundle
{
    public $sourcePath = '@npm/blueimp-file-upload';

    public $js = [
        'js/vendor/jquery.ui.widget.js',
        'js/jquery.iframe-transport.js',
        'js/jquery.fileupload.js',
    ];

    public $css = [
        'css/jquery.fileupload.css',
    ];

    public $depends = [
        JqueryAsset::class,
    ];
}
