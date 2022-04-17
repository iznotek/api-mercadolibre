
# API MERCADO LIBRE

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jaimenorato/api-mercadolibre.svg?style=flat-square)](https://packagist.org/packages/jaimenorato/api-mercadolibre)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/jaimenorato/api-mercadolibre/run-tests?label=tests)](https://github.com/jaimenorato/api-mercadolibre/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/jaimenorato/api-mercadolibre/Check%20&%20fix%20styling?label=code%20style)](https://github.com/jaimenorato/api-mercadolibre/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/jaimenorato/api-mercadolibre.svg?style=flat-square)](https://packagist.org/packages/jaimenorato/api-mercadolibre)

Este paquete permite integrar la api de mercado libre, para la conexión con esta plataforma y la sincronización de productos con la misma

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/api-mercadolibre.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/api-mercadolibre)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require jaimenorato/api-mercadolibre
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="api-mercadolibre-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="api-mercadolibre-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="api-mercadolibre-views"
```

## Usage

Primero debes de registrar tu app en la api de [mercado libre](https://developers.mercadolibre.com.co/es_ar/registra-tu-aplicacion)

Agrega tus credenciales en el .env
```env
MERCADOLIBRE_CLIENT_ID = <client_id>
MERCADOLIBRE_CLIENT_SECRET = <client_secret>
```

```php
$apiMercadolibre = new JaimeNorato\ApiMercadolibre();
echo $apiMercadolibre->echoPhrase('Hello, JaimeNorato!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Jaime Rafael Norato Corredor](https://github.com/JaimeNorato)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
