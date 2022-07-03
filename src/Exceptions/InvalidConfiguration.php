<?php

namespace BernskioldMedia\BetterProposals\Exceptions;

use Exception;

class InvalidConfiguration extends Exception
{
    public static function noApiKey(): static
    {
        return new static('No Better Proposals API key set. You must set BETTER_PROPOSALS_API_KEY for the Better Proposals API to work.');
    }

    public static function emptyBaseUrl(): static
    {
        return new static('The Better Proposals base url was empty. Please make sure that BETTER_PROPOSALS_API_URL is a valid and non-empty URL string.');
    }
}
