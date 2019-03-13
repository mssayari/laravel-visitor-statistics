<?php

namespace mssayari\Laravel\VisitorTracker\Test;

use mssayari\Laravel\VisitorTracker\Tracker;
use mssayari\Laravel\VisitorTracker\VisitorTrackerServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    /**
     * Load package service provider.
     *
     * @param \Illuminate\Foundation\Application $app
     *
     * @return mssayari\Laravel\VisitorTracker\VisitorTrackerServiceProvider
     */
    protected function getPackageProviders($app)
    {
        return [VisitorTrackerServiceProvider::class];
    }

    /**
     * Load package alias.
     *
     * @param \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageAliases($app)
    {
        return [
            'VisitorTracker' => Tracker::class,
        ];
    }
}
