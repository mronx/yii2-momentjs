<?php
/**
 * @link https://github.com/mronx/yii2-momentjs
 * @copyright Copyright (c) 2017 Mron' <info@av.uz>
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace uz\momentjs;

use yii\web\AssetBundle;

/**
 * Class MomentJsAsset includes the version of core MomentJs with all locales bundled in the single file.
 *
 * @package uz\momentjs
 * @author Mron' <info@av.uz>
 */
class MomentJsAllLocalesAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/moment/min';
    public $js = [
        'moment-with-locales.min.js',
    ];
}
