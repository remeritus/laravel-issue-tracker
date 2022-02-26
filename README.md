# Issue Tracker that can be plug into existing Laravel application.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/remeritus/laravel-issue-tracker.svg?style=flat-square)](https://packagist.org/packages/remeritus/laravel-issue-tracker)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/remeritus/laravel-issue-tracker/run-tests?label=tests)](https://github.com/remeritus/laravel-issue-tracker/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/remeritus/laravel-issue-tracker/Check%20&%20fix%20styling?label=code%20style)](https://github.com/remeritus/laravel-issue-tracker/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/remeritus/laravel-issue-tracker.svg?style=flat-square)](https://packagist.org/packages/remeritus/laravel-issue-tracker)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/laravel-issue-tracker.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/laravel-issue-tracker)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require remeritus/laravel-issue-tracker
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-issue-tracker-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-issue-tracker-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-issue-tracker-views"
```

## Usage

```php
$laravelIssueTracker = new Remeritus\LaravelIssueTracker();
echo $laravelIssueTracker->echoPhrase('Hello, Remeritus!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Richard Sihm](https://github.com/remeritus)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
