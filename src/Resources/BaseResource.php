<?php

namespace BernskioldMedia\BetterProposals\Resources;

use BernskioldMedia\BetterProposals\ApiClient;
use BernskioldMedia\BetterProposals\BetterProposalsClient;
use BernskioldMedia\BetterProposals\Contracts\Resources\FiltersUpdatedSince;
use BernskioldMedia\BetterProposals\Contracts\Resources\HasPagination;

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
