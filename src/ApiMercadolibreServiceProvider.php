<?php

namespace JaimeNorato\ApiMercadolibre;

use JaimeNorato\ApiMercadolibre\Commands\ApiMercadolibreCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
            ->hasRoute('api-mercadolibre')
            ->hasMigration('create_api-mercadolibre_table')
            ->hasCommand(ApiMercadolibreCommand::class);
    }

    public function register(){

//        $this->loadRoutesFrom(__DIR__.'/routes/api-mercadolibre.php');

        $this->app->bind('api-mercadolibre', function($app){
            return new ApiMercadolibre();
        });
    }
}
