# filament-hcaptcha

[![Latest Version on Packagist](https://img.shields.io/packagist/v/marcogermani87/filament-hcaptcha.svg?style=flat-square)](https://packagist.org/packages/marcogermani87/filament-hcaptcha)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/marcogermani87/filament-hcaptcha/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/marcogermani87/filament-hcaptcha/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/marcogermani87/filament-hcaptcha/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/marcogermani87/filament-hcaptcha/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/marcogermani87/filament-hcaptcha.svg?style=flat-square)](https://packagist.org/packages/marcogermani87/filament-hcaptcha)
<!--delete-->

A package to easily include HCaptcha in [Filament](https://filamentphp.com).

This project is based on [RVxLab/hcaptcha](https://github.com/RVxLab/hcaptcha) package.

## Version Compatibility

| Plugin  | Filament | Laravel | PHP |
| ------------- | ------------- | ------------- | -------------|
| 0.x  | 3.x  | 10.x | 8.x |
| 0.x  | 3.x  | 11.x | 8.2 \| 8.3 |

## Installation

You can install the package via composer:

```bash
composer require marcogermani87/filament-hcaptcha
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-hcaptcha-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
->plugin(new \MarcoGermani87\FilamentHcaptcha\FilamentHcaptcha::make())
```

## Testing

```bash
composer test
```

## Screenshots

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Marco Germani](https://github.com/marcogermani87)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
