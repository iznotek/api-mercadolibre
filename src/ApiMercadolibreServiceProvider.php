<?php

namespace JaimeNorato\ApiMercadolibre;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use JaimeNorato\ApiMercadolibre\Commands\ApiMercadolibreCommand;

class ApiMercadolibreServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('api-mercadolibre')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_api-mercadolibre_table')
            ->hasCommand(ApiMercadolibreCommand::class);
    }
}
