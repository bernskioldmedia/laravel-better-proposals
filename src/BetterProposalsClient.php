<?php

namespace BernskioldMedia\BetterProposals;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

class BetterProposalsClient
{
    public PendingRequest $request;

    public function __construct(
        private string $apiKey,
        private string $baseUrl
    ) {
        $this->request = Http::withHeaders([
            'Bptoken' => $this->apiKey,
        ])
            ->baseUrl($this->baseUrl);
    }

    public static function fromConfig(array $config): static
    {
        return (new static($config['api_key'], $config['base_url']));
    }

    public function get(string $endpoint, array $query = []): object
    {
        return $this->request
            ->get($endpoint, $query)
            ->throw()
            ->object();
    }

    public function post(string $endpoint, array $data = []): object
    {
        return $this->request
            ->post($endpoint, $data)
            ->throw()
            ->object();
    }

    public function patch(string $endpoint, array $data = []): object
    {
        return $this->request
            ->patch($endpoint, $data)
            ->throw()
            ->object();
    }

    public function delete(string $endpoint, array $data = []): bool
    {
        return $this->request
            ->delete($endpoint, $data)
            ->throw()
            ->ok();
    }
}
