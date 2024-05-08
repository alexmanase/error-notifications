# This is my package error-notifications

[![Latest Version on Packagist](https://img.shields.io/packagist/v/alexmanase/error-notifications.svg?style=flat-square)](https://packagist.org/packages/alexmanase/error-notifications)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require alexmanase/error-notifications
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="error-notifications-config"
```

This is the contents of the published config file:

```php
return [
    'enabled' => env('ERROR_NOTIFICATIONS', true)
];
```

## Usage

Invoke the `::report` method within the `withException` method located in the `app.php`
file of your project.

```php
// app.php
->withExceptions(function (Exceptions $exceptions) {
    ErrorNotifications::report($exceptions);
})->create();
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Alex Manase](https://github.com/alexmanase)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
