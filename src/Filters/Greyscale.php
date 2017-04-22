<?php



declare(strict_types=1);



namespace BrianFaust\Picible\Filters;

use BrianFaust\Picible\Contracts\FilterInterface;
use Intervention\Image\Image;

class Greyscale implements FilterInterface
{
    public function applyFilter(Image $image)
    {
        return $image->greyscale();
    }
}
