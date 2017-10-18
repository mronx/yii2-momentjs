<?php
/**
 * @link https://github.com/mronx/yii2-momentjs
 * @copyright Copyright (c) 2017 Mron' <info@av.uz>
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace uz\momentjs;

use yii\web\AssetBundle;

/**
 * Class MomentJsAsset includes core MomentJs with no locale data.
 *
 * @package uz\momentjs
 * @author Mron' <info@av.uz>
 */
class MomentJsAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/moment/min';
    public $js = [
        'moment.min.js',
    ];
}
