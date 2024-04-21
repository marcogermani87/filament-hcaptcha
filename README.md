<p class="filament-hidden">
<img src="https://banners.beyondco.de/Filament%20HCaptcha.png?theme=light&packageManager=composer+require&packageName=marcogermani87%2Ffilament-hcaptcha&pattern=architect&style=style_2&description=Easy+HCaptcha+integrations+for+Filament&md=1&showWatermark=0&fontSize=100px&images=https%3A%2F%2Flaravel.com%2Fimg%2Flogomark.min.svg" class="filament-hidden">
</p>

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

### Configuration

Add `NOCAPTCHA_SECRET` and `NOCAPTCHA_SITEKEY` in **.env** file :

```
HCAPTCHA_SECRET="secret-key"
HCAPTCHA_SITEKEY="site-key"
```
(You can obtain them from [here](https://dashboard.hcaptcha.com/sites))

## Usage

```php
use \MarcoGermani87\FilamentHcaptcha\Forms\Components\Captcha;

Captcha::make('captcha')
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
