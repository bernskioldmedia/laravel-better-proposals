<?php

namespace BernskioldMedia\BetterProposals;

use BernskioldMedia\BetterProposals\Resources\Company;
use BernskioldMedia\BetterProposals\Resources\Currency;
use BernskioldMedia\BetterProposals\Resources\Proposal;
use BernskioldMedia\BetterProposals\Resources\Settings;
use BernskioldMedia\BetterProposals\Resources\Template;

class BetterProposals
{
    public function __construct(
        public BetterProposalsClient $client,
    ) {
    }

    public function companies(): Company
    {
        return new Company($this->client);
    }

    public function currency(): Currency
    {
        return new Currency($this->client);
    }

    public function proposals(): Proposal
    {
        return new Proposal($this->client);
    }

    public function settings(): Settings
    {
        return new Settings($this->client);
    }

    public function template(): Template
    {
        return new Template($this->client);
    }
}
