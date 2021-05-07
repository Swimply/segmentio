<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Enable Laravel Segment
    |--------------------------------------------------------------------------
    |
    | This option specifies if Segment tracking is enabled.
    |
    | Default: true
    |
    */

    'enabled' => true,

    /*
    |--------------------------------------------------------------------------
    | Segment Write Key
    |--------------------------------------------------------------------------
    |
    | This option specifies key which enables you to write to Segment's API.
    |
    | Default: true
    |
    */

    'write_key' => env("SEGMENT_WRITE_KEY", ''),

];
