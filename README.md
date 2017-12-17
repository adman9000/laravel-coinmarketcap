# laravel-coinmarketcap
Laravel implementation of Coinmarketcap API for tracking cryptocurrencies

## Install

#### Install via Composer

```
composer require adman9000/laravel-coinmarketcap
```

Utilises autoloading in Laravel 5.5+. For older versions add the following lines to your `config/app.php`

```php
'providers' => [
        ...
        adman9000\coinmarketcap\CoinmarketcapServiceProvider::class,
        ...
    ],


 'aliases' => [
        ...
        'Coinmarketcap' => adman9000\coinmarketcap\CoinmarketcapAPIFacade::class,
    ],
```
