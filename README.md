# Laravel Die and Dump to Array (`dda`)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/mass6/laravel-die-dump-array.svg?style=flat-square)](https://packagist.org/packages/mass6/laravel-die-dump-array)
[![Total Downloads](https://img.shields.io/packagist/dt/mass6/laravel-die-dump-array.svg?style=flat-square)](https://packagist.org/packages/mass6/laravel-die-dump-array)

Helper function to die and dump Laravel collection to their array representation. When you want to dump an Eloquent
model, and only want the model's attributes, the `dda` function will call the `toArray()` method on the model, 
then die and dump. Works with any class that implements the `toArray` method.

## Installation

You can install the package via composer:

```bash
composer require mass6/laravel-die-dump-array
```

## Usage

```php
$user = User::find(1);
dda($user);

// Example output:
[
  'name' => 'Luca Brasi',
  'email' => 'luca.b@corleone.it'
]
```

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email samcharmy@gmail.com instead of using the issue tracker.

## Credits

-   [Sam Ciaramilaro](https://github.com/mass6)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## PHP Package Boilerplate

This package was generated using the [PHP Package Boilerplate](https://laravelpackageboilerplate.com) by [Beyond Code](http://beyondco.de/).
