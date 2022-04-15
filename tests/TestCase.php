<?php

namespace JaimeNorato\ApiMercadolibre\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use JaimeNorato\ApiMercadolibre\ApiMercadolibreServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'JaimeNorato\\ApiMercadolibre\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            ApiMercadolibreServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_api-mercadolibre_table.php.stub';
        $migration->up();
        */
    }
}
