# SwaggerClient-php
Connection of Troops & Evolia

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0.0
- Package version: 1.0.0
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/smart-gamma/evolia-api-sdk.git"
    }
  ],
  "require": {
    "smart-gamma/evolia-api-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evolia\SDK\ImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Evolia\Model\Candidate(); // \Evolia\Model\Candidate | 

try {
    $result = $apiInstance->addCandidatApi($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportApi->addCandidatApi: ', $e->getMessage(), PHP_EOL;
}

$apiInstance = new Evolia\SDK\ImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Evolia\Model\Customer(); // \Evolia\Model\Customer | 

try {
    $result = $apiInstance->addClientApi($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportApi->addClientApi: ', $e->getMessage(), PHP_EOL;
}

$apiInstance = new Evolia\SDK\ImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Evolia\Model\Contract(); // \Evolia\Model\Contract | 

try {
    $result = $apiInstance->addContractApi($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportApi->addContractApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Documentation for API Endpoints

All URIs are relative to *https://virtserver.swaggerhub.com/smartgammadev/Evolia/1.0.0*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ImportApi* | [**addCandidatApi**](docs/Api/ImportApi.md#addcandidatapi) | **POST** /Candidate/AddCandidatApi | 
*ImportApi* | [**addClientApi**](docs/Api/ImportApi.md#addclientapi) | **POST** /Customer/AddClientApi | 
*ImportApi* | [**addContractApi**](docs/Api/ImportApi.md#addcontractapi) | **POST** /Contract/AddContractApi | 

## Documentation For Models

 - [Candidate](docs/Model/Candidate.md)
 - [CandidateResponseStatus](docs/Model/CandidateResponseStatus.md)
 - [Contract](docs/Model/Contract.md)
 - [Customer](docs/Model/Customer.md)
 - [CustomerResponseStatus](docs/Model/CustomerResponseStatus.md)
 - [ResponseError](docs/Model/ResponseError.md)

## Documentation For Authorization

 All endpoints do not require authorization.


## Author



