<?php

/*
 * This file is part of DuRoom.
 *
 * (c) NKDuy
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use DuRoom\Extend;
use DuRoom\Statistics\AddStatisticsData;

return [
    (new Extend\Frontend('admin'))
        ->js(__DIR__.'/js/dist/admin.js')
        ->css(__DIR__.'/less/admin.less')
        ->content(AddStatisticsData::class),

    new Extend\Locales(__DIR__.'/locale'),
];
