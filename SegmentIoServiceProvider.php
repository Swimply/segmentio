<?php

namespace Laravel\SegmentIo;

use Illuminate\Support\ServiceProvider;
use Segment;

class SegmentIoServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->setupConfig();

        $write_key = config('segmentio.write_key');
        $enabled = config('segmentio.enabled');

        if ($write_key && $enabled) {
            Segment::init($write_key);
        }
    }

    /**
     * Setup the config.
     *
     * @return void
     */
    protected function setupConfig()
    {
        $source = realpath(__DIR__.'/../config/segmentio.php');

        $this->publishes([$source => config_path('segmentio.php')]);

        $this->mergeConfigFrom($source, 'segmentio');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
