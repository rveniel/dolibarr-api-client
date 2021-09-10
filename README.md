[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/laudeco/dolibarr-api-client/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/laudeco/dolibarr-api-client/?branch=master)
[![Build Status](https://travis-ci.org/laudeco/dolibarr-api-client.svg?branch=master)](https://travis-ci.org/laudeco/dolibarr-api-client)

# Dolibarr PHP client

This client uses the Rest API of [Dolibarr](https://www.dolibarr.org/). 

This is a fork of laudeco/dolibarr-client

### Usage example

```php
<?php

use Dolibarr\Client\ClientBuilder;
use Dolibarr\Client\Security\Authentication\TokenAuthentication;

$clientBuilder = new ClientBuilder(
    "https://your-dolibarr.url/api/index.php/", // you must keep the final slash
    new TokenAuthentication("my-token")
);

$client = $clientBuilder->build();

$thirdParty = $client->thirdparties()->getById(42);
```