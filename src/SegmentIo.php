<?php

namespace Laravel\SegmentIo;

use Illuminate\Support\Facades\Facade;

class SegmentIo extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() : string
    {
        return 'segment';
    }
}
