<?php

namespace BernskioldMedia\BetterProposals\Tests\Unit;

use BernskioldMedia\BetterProposals\Facades\BetterProposals;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Http;
use stdClass;

it('can build request from config values', function () {
    Http::fake([
        '*' => Http::response(json_encode(new stdClass())),
    ]);

    $this->app['config']->set('better-proposals.api_key', 'token');

    BetterProposals::proposals()->all();

    Http::assertSent(function (Request $request) {
        return $request->hasHeaders([
            'Bptoken' => 'token',
        ]);
    });
});
