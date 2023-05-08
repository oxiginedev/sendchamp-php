## Sendchamp PHP Sdk
Simple php package to work with Sendchamp API

## Installation
This package requires PHP 8.0+ and [Composer](https://getcomposer.org). Then require the package in your project like so:
```bash
composer require adedaramola/sendchamp-php-sdk
```

## Usage
```php
<?php

require __DIR__ '/../vendor/autoload.php';

use Adedaramola\Sendchamp\Sendchamp;

// For production environment, provide "live" as second argument
$sendchamp = new Sendchamp('api-public-key');

// Send sms
$sendchamp->sms()->send([
    'to' => ['+2348132644971'],
    'message' => 'This package is awesome',
    'sender_name' => 'Adedaramola',
    'route' => 'dnd'
]);

// Get sms delivery report
$sendchamp->sms()->getDeliveryReport('9173hqhb7837ydg');

// Get bulk sms delivery report
$sendchamp->sms()->getBulkDeliveryReport('9173hqhb7837ydg');

// Send otp
$sendchamp->otp()->send([
    'channel' => '',
    'sender' => '',
    'token_type' => '',
    'token_length' => 6
]);

// Verify otp
$sendchamp->otp()->verify($reference, $code);

// Get wallet balance
$sendchamp->wallet()->getBalance();
```

## Contributing
Please feel free to fork this package and contribute by submitting a pull request to enhance or add missing functionalities.

## Support
Kindly leave a star on the repo, this makes me glad.
Reach out on [twitter](https://twitter.com/sopethedev)

Adedaramola Adetimehin.