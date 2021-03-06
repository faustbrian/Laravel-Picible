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

namespace Artisanry\Picible\Contracts;

use Artisanry\Picible\Models\Picture;
use Intervention\Image\Image;

interface Adapter
{
    public function write(Image $file, Picture $picture, array $filters = []);

    public function has(Picture $picture, array $filters = []);

    public function delete(Picture $picture, array $filters = []);
}
