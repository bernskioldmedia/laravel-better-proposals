<?php

namespace BernskioldMedia\BetterProposals\Tests\Integration;

use BernskioldMedia\BetterProposals\Exceptions\InvalidConfiguration;
use BernskioldMedia\BetterProposals\Facades\BetterProposals;

it('will throw an exception if the API Key is not set', function () {
    $this->app['config']->set('better-proposals.api_key', '');
    BetterProposals::contacts()->all();
})->expectException(InvalidConfiguration::class);

it('will throw an exception if the base url is not set', function () {
    $this->app['config']->set('better-proposals.base_url', '');
    BetterProposals::contacts()->all();
})->expectException(InvalidConfiguration::class);
