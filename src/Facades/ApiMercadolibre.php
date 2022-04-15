<?php

namespace JaimeNorato\ApiMercadolibre\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \JaimeNorato\ApiMercadolibre\ApiMercadolibre
 */
class ApiMercadolibre extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'api-mercadolibre';
    }
}
