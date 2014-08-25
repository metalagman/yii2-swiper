<?php
/**
 * @author Alexey Samoylov <alexey.samoylov@gmail.com>
 */

namespace lagman\swiper;

use yii\web\AssetBundle as BaseAssetBundle;

class AssetBundle extends BaseAssetBundle
{
    public $sourcePath = '@vendor/lagman/swiper/src';

    public $js = [
        'idangerous.swiper.js',
    ];

    public $css = [
        'idangerous.swiper.css'
    ];
}