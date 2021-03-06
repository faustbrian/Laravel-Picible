<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Picible.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Artisanry\Picible\Filters;

use Artisanry\Picible\Contracts\FilterInterface;
use Intervention\Image\Image;

class Watermark implements FilterInterface
{
    public function __construct($config)
    {
        $this->watermarkPath = $config['watermarkPath'];
        $this->position = $config['position'];
        $this->coordinatesX = $config['coordinatesX'];
        $this->coordinatesY = $config['coordinatesY'];
    }

    public function applyFilter(Image $image)
    {
        return $image->insert(
            $this->watermarkPath, $this->position,
            $this->coordinatesX, $this->coordinatesY
        );
    }
}
