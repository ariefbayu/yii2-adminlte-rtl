<?php
namespace rezasr\yii2;

/**
 * AdminLteRtl AssetBundle
 * @author Ali Irani <ali@irani.im>
 */
class AdminLteRtlAsset extends \yii\web\AssetBundle
{
    public $sourcePath = __DIR__ . '/assets';

    public $css = [
        'css/AdminLTE-rtl.min.css',
        'css/skins/_all-skins-rtl.min.css',
    ];

    public $depends = [
        'rezasr\yii2\AdminLteAsset',
        'airani\bootstrap\BootstrapRtlAsset',
    ];
}
