<?php

namespace BernskioldMedia\BetterProposals\Resources;

use BernskioldMedia\BetterProposals\BetterProposalsClient;

abstract class BaseResource
{
    public array $query = [];
    protected string $endpoint;

    public function __construct(
        public BetterProposalsClient $client
    ) {
    }

    abstract protected function getEndpoint(): string;
}
