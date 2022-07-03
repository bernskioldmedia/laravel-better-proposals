<?php

namespace BernskioldMedia\BetterProposals\Tests\Unit;

use BernskioldMedia\BetterProposals\BetterProposalsClient;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Http;

it('can build request', function () {
    Http::fake();

    $client = new BetterProposalsClient('token', 'https://example.com');

    $client->request->get('/');

    Http::assertSent(function (Request $request) {
        return $request->hasHeaders([
            'Bptoken' => 'token',
        ]);
    });
});
