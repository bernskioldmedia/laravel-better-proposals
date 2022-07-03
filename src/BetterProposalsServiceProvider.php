<?php

namespace BernskioldMedia\BetterProposals;

use BernskioldMedia\BetterProposals\Exceptions\InvalidConfiguration;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class BetterProposalsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-better-proposals')
            ->hasConfigFile();
    }

    public function registeringPackage()
    {
        $this->app->bind(BetterProposalsClient::class, function () {
            return BetterProposalsClient::fromConfig(config('better-proposals'));
        });

        $this->app->bind(BetterProposals::class, function () {
            $this->protectAgainstInvalidConfiguration(config('better-proposals'));

            $client = app(BetterProposalsClient::class);

            return new BetterProposals($client);
        });

        $this->app->alias(BetterProposals::class, 'laravel-better-proposals');
    }

    protected function protectAgainstInvalidConfiguration(array $config): void
    {
        if (empty($config['api_key'])) {
            throw InvalidConfiguration::noApiKey();
        }

        if (empty($config['base_url'])) {
            throw InvalidConfiguration::emptyBaseUrl();
        }
    }
}
