<?php
return [

    /**
     * The API key used for authenticating with the Better Proposals API.
     */
    'api_key' => env('BETTER_PROPOSALS_API_KEY', ''),

    /**
     * The Base URL for the Better Proposals API including the version.
     * This package currently only supports V2 of the API.
     */
    'base_url' => env('BETTER_PROPOSALS_API_URL', 'https://api.betterproposals.io'),

];
