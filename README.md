# Dolibarr PHP client

This client uses the Rest API of [Dolibarr](https://www.dolibarr.org/). 

This is a fork of laudeco/dolibarr-client

### Usage example

```php
<?php

use Dolibarr\Client\ClientBuilder;
use Dolibarr\Client\Security\Authentication\TokenAuthentication;
use Dolibarr\Client\Domain\Thirdparty\ThirdpartyId;

$clientBuilder = new ClientBuilder(
    "https://your-dolibarr.url/api/index.php/", // you must keep the final slash
    new TokenAuthentication("my-token")
);

$client = $clientBuilder->build();

$thirdParty = $client->thirdparties()->getById(new ThirdpartyId(42));
```