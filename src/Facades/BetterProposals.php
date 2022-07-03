<?php

namespace BernskioldMedia\BetterProposals\Facades;

use BernskioldMedia\BetterProposals\Resources\Company;
use BernskioldMedia\BetterProposals\Resources\Currency;
use BernskioldMedia\BetterProposals\Resources\Proposal;
use BernskioldMedia\BetterProposals\Resources\Settings;
use BernskioldMedia\BetterProposals\Resources\Template;
use Illuminate\Support\Facades\Facade;

/**
 * @method static Company companies()
 * @method static Currency currencies()
 * @method static Proposal proposals()
 * @method static Settings settings()
 * @method static Template templates()
 *
 * @see \BernskioldMedia\BetterProposals\BetterProposals
 */
class BetterProposals extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-better-proposals';
    }
}
