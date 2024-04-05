# Feedback

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]
[![StyleCI][ico-styleci]][link-styleci]

This package is a simple feedback form that uses google recaptcha to prevent spam. It sends an email to the address set in the .env file.
This package helps to generate simple contact-us form with google recaptcha.
## Installation

Via Composer

```bash
composer require magan/feedback
```

## Usage
Set up your google recaptcha keys inside your .env file.
```php
GOOGLE_RECAPTCHA_SITE_KEY=YOUR_SITE_KEY 
GOOGLE_RECAPTCHA_SECRET_KEY=YOUR_SECRET_KEY
```

Set up your mailing address.
```
MAIL_TO_ADDRESS="hello@example.com"
MAIL_FROM_ADDRESS="hello@example.com"
```
You can publish the config file with:
```bash
php artisan vendor:publish --provider="Magan\Feedback\FeedbackServiceProvider" --tag='feedback-config'
```
You can publish and edit the views with:
```bash
php artisan vendor:publish --provider="Magan\Feedback\FeedbackServiceProvider" --tag='feedback-views'
```
## Publish config file content
```php
<?php
/*
    |--------------------------------------------------------------------------
    | Setup your google recaptcha keys
    |--------------------------------------------------------------------------
    |
    | You can set use of google recaptcha by setting use to true.
    | Please set MAIL_TO_ADDRESS and MAIL_FROM_ADDRESS inside your .env file.
    |
    */
return [
    'route' => [
        'prefix' => 'feedback',
        'middleware' => ['web'],
    ],
    'recapthca' => [
        'site_key' => env('GOOGLE_RECAPTCHA_SITE_KEY', null),
        'secret_key' => env('GOOGLE_RECAPTCHA_SECRET_KEY', null),
        'use' => false,
    ],
    'mail' => [
        'to' => [
            'address' => env('MAIL_TO_ADDRESS', 'hello@gmail.com'),
        ],
        'from' => [
            'address' => env('MAIL_FROM_ADDRESS', 'hello@gmail.com'),
        ],
    ],
];
```
## Route:
You can change route of your feedback page by changing the configuration key route.
```
http://120.0.0.1/feedback
```
## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Testing

```bash
composer test
```

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email author@email.com instead of using the issue tracker.

## Credits

- [Author Name][link-author]
- [All Contributors][link-contributors]

## License

MIT. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/magan/feedback.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/magan/feedback.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/magan/feedback/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/magan/feedback
[link-downloads]: https://packagist.org/packages/magan/feedback
[link-travis]: https://travis-ci.org/magan/feedback
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/magan
[link-contributors]: ../../contributors
