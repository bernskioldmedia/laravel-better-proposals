<?php

namespace BernskioldMedia\BetterProposals\Resources;

use BernskioldMedia\BetterProposals\Contracts\Resources\Createable;
use BernskioldMedia\BetterProposals\Contracts\Resources\HasPagination;
use BernskioldMedia\BetterProposals\Contracts\Resources\Readable;

class Company extends BaseResource
{
    use Readable;
    use Createable;
    use HasPagination;

    protected function getEndpoint(): string
    {
        return 'company';
    }
}
