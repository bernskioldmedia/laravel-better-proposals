<?php

namespace BernskioldMedia\BetterProposals\Resources;

class Settings extends BaseResource
{
    public function all(): object
    {
        return $this->client->get($this->getEndpoint());
    }

    public function brand(): object
    {
        return $this->client->get("{$this->getEndpoint()}/brand");
    }

    protected function getEndpoint(): string
    {
        return 'settings';
    }
}
