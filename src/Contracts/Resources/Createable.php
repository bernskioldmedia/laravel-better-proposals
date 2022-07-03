<?php

namespace BernskioldMedia\BetterProposals\Contracts\Resources;

trait Createable
{
    public function create(array $data): object
    {
        return $this->client->post($this->getEndpoint().'/create', $data);
    }
}
