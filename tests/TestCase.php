<?php

namespace BernskioldMedia\BetterProposals\Tests;

use BernskioldMedia\BetterProposals\BetterProposalsServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            BetterProposalsServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');
    }
}
