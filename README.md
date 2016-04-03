# Medium SDK Silex Service Provider
Silex Service Provider, provider to connect to the Medium Api.

# Install
It's simple! Just execute command on your terminal:

```
composer require codeexperts/medium-sdk-silex-provider dev-master
```

# How to use

Simple:
```php
<?php
use CodeExperts\Provider\MediumSdkServiceProvider;

...
$app->register(new MediumSdkServiceProvider(), ['medium.credentials' => 'You Credentials']);
...
```

# Medium PHP Sdk
We use Medium [PHP SDK package](https://github.com/jonathantorres/medium-sdk-php), for more information see the doc it.

# Run tests

Tests are written with PHPUnit.

After cloning your repo:

git clone git@github.com:NandoKstroNet/medium-sdk-service-provider.git

Just run composer test on the project's root directory:

cd medium-sdk-service-provider && phpunit

### License
Licensed under the MIT license. Please see [License file](LICENSE.md) for more information.