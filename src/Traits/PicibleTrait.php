<?php

namespace BrianFaust\Picible\Traits;

trait PicibleTrait
{
    public function pictures()
    {
        return $this->morphMany('BrianFaust\Picible\Models\Picture', 'picible');
    }
}
