# Beslist.nl Order API PHP Client
This is an open source PHP client for the [Beslist.nl Order API](http://www.beslist.nl/).

## Installation
Get it with [composer](https://getcomposer.org)

Run the command:
```
composer require wienkit/beslist-order-api-php-client
```

## Example: get orders
```php
<?php

require __DIR__ . '/vendor/autoload.php';

$personalKey = '-- ENTER YOUR PUBLIC KEY --';
$shopId = '-- ENTER YOUR SHOP ID --';
$clientId = '-- ENTER YOUR CLIENT ID --';

$this->client = new Wienkit\BeslistOrdersClient\BeslistOrdersClient($personalKey, $shopId, $clientId);
$this->client->setTestMode(true);

// Retrieve all data
$cart = $this->client->getShoppingCartData('2016-01-01', '2016-01-02');
var_dump($cart);

// Get the orders
$orders = $cart->shopOrders;
var_dump($orders);

```

See the tests folder for more information
