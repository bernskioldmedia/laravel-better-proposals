<?php

namespace BernskioldMedia\BetterProposals\Resources;

use BernskioldMedia\BetterProposals\Contracts\Resources\Createable;
use BernskioldMedia\BetterProposals\Contracts\Resources\HasPagination;
use BernskioldMedia\BetterProposals\Contracts\Resources\Readable;

class Currency extends BaseResource
{
    use Readable;
    use HasPagination;

    protected function getEndpoint(): string
    {
        return 'currency';
    }
}
