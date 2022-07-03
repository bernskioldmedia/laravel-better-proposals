<?php

namespace BernskioldMedia\BetterProposals\Resources;

use BernskioldMedia\BetterProposals\Contracts\Resources\Createable;
use BernskioldMedia\BetterProposals\Contracts\Resources\HasPagination;
use BernskioldMedia\BetterProposals\Contracts\Resources\Readable;

class Proposal extends BaseResource
{
    use Readable;
    use Createable;
    use HasPagination;

    public function opened(): object
    {
        return $this->client->get("{$this->getEndpoint()}/opened", $this->query);
    }

    public function sent(): object
    {
        return $this->client->get("{$this->getEndpoint()}/sent", $this->query);
    }

    public function signed(): object
    {
        return $this->client->get("{$this->getEndpoint()}/signed", $this->query);
    }

    public function totalCount(): int
    {
        return $this->client->get("{$this->getEndpoint()}/count")->count ?? 0;
    }

    public function createCover(array $data): object
    {
        return $this->client->post("{$this->getEndpoint()}/cover/create", $data);
    }

    protected function getEndpoint(): string
    {
        return 'proposal';
    }
}
