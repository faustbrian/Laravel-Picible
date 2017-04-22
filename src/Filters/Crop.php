<?php



declare(strict_types=1);



namespace BrianFaust\Picible\Filters;

use BrianFaust\Picible\Contracts\FilterInterface;
use Intervention\Image\Image;

class Crop implements FilterInterface
{
    public function __construct($config)
    {
        $this->height = $config['height'];
        $this->width = $config['width'];
        $this->coordinatesX = $config['coordinatesX'];
        $this->coordinatesY = $config['coordinatesY'];
    }

    public function applyFilter(Image $image)
    {
        return $image->crop(
            $this->width,
            $this->height,
            $this->coordinatesX,
            $this->coordinatesY
        );
    }
}
