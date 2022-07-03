<?php

namespace BernskioldMedia\BetterProposals\Tests\Unit\Resources;

use BernskioldMedia\BetterProposals\BetterProposalsClient;
use Mockery;
use stdClass;

beforeEach(function () {
    $this->client = Mockery::mock(BetterProposalsClient::class);
    $this->betterProposals = new \BernskioldMedia\BetterProposals\BetterProposals($this->client);
});

it('can get all proposals', function () {
    $this->client->shouldReceive('get')
        ->withArgs(['proposal', []])
        ->once()
        ->andReturn(new stdClass());

    expect($this->betterProposals->proposals()->all())->toBeObject();
});


it('can get single proposal', function () {
    $this->client->shouldReceive('get')
        ->withArgs(['proposal/1', []])
        ->once()
        ->andReturn(new stdClass());

    expect($this->betterProposals->proposals()->get(1))->toBeObject();
});

it('can create proposal', function () {
    $this->client->shouldReceive('post')
        ->withArgs([
            'proposal/create', [
                'name' => 'Test',
            ],
        ])
        ->once()
        ->andReturn(new stdClass());

    expect($this->betterProposals->proposals()->create(['name' => 'Test']))->toBeObject();
});
