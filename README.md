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

$apiInstance = new Evolia\SDK\ClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$registrationNumber = "registrationNumber_example"; // string | 
$agencyId = "agencyId_example"; // string | 

try {
    $result = $apiInstance->searchClient($registrationNumber, $agencyId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientApi->searchClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Documentation for API Endpoints

All URIs are relative to *https://virtserver.swaggerhub.com/smartgammadev/Evolia/1.0.0*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ClientApi* | [**searchClient**](docs/Api/ClientApi.md#searchclient) | **GET** /api/v3/client/{registrationNumber}/{agencyId} | This endpoint is used to search the siret in the DB from the NIC and the Siret
*ImportApi* | [**addCandidatApi**](docs/Api/ImportApi.md#addcandidatapi) | **POST** /api/candidate | 
*ImportApi* | [**addClientApi**](docs/Api/ImportApi.md#addclientapi) | **POST** /api/customer | 
*ImportApi* | [**addContractApi**](docs/Api/ImportApi.md#addcontractapi) | **POST** /api/contract | 
*ImportApi* | [**addTimeSheetApi**](docs/Api/ImportApi.md#addtimesheetapi) | **POST** /api/TimeSheet | 
*ImportApi* | [**candidateAddDpaeApi**](docs/Api/ImportApi.md#candidateadddpaeapi) | **POST** /api/Candidate/AddDPAE | 
*ImportApi* | [**getAccessToken**](docs/Api/ImportApi.md#getaccesstoken) | **POST** /GetAccessToken | 
*ImportApi* | [**isCandidateExistsApi**](docs/Api/ImportApi.md#iscandidateexistsapi) | **POST** /api/candidate/exists | 
*ImportApi* | [**returnSignatureApi**](docs/Api/ImportApi.md#returnsignatureapi) | **POST** /api/Contract/ReturnSignature | 
*PayrollApi* | [**payrollsGet**](docs/Api/PayrollApi.md#payrollsget) | **GET** /payrolls | Get Payrolls by date range
*PayrollApi* | [**payrollsPayrollIdGet**](docs/Api/PayrollApi.md#payrollspayrollidget) | **GET** /payrolls/{payrollId} | Get Payroll by it&#x27;s id
*ReferencesApi* | [**getReferences**](docs/Api/ReferencesApi.md#getreferences) | **GET** /api/v3/references | Get all the references from the database

## Documentation For Models

 - [AuthRequest](docs/Model/AuthRequest.md)
 - [AuthResponse](docs/Model/AuthResponse.md)
 - [Candidate](docs/Model/Candidate.md)
 - [CandidateAddDpae](docs/Model/CandidateAddDpae.md)
 - [CandidateResponseStatus](docs/Model/CandidateResponseStatus.md)
 - [Contract](docs/Model/Contract.md)
 - [ContractForTimeSheet](docs/Model/ContractForTimeSheet.md)
 - [ContractResponseStatus](docs/Model/ContractResponseStatus.md)
 - [Customer](docs/Model/Customer.md)
 - [CustomerBillingAddress](docs/Model/CustomerBillingAddress.md)
 - [CustomerResponseStatus](docs/Model/CustomerResponseStatus.md)
 - [ExistsCandidate](docs/Model/ExistsCandidate.md)
 - [LieuxdeMission](docs/Model/LieuxdeMission.md)
 - [MissionViewModel](docs/Model/MissionViewModel.md)
 - [NotFound](docs/Model/NotFound.md)
 - [PayrollDetailsViewModel](docs/Model/PayrollDetailsViewModel.md)
 - [PayrollElement](docs/Model/PayrollElement.md)
 - [PayrollViewModel](docs/Model/PayrollViewModel.md)
 - [PayrollViewModelList](docs/Model/PayrollViewModelList.md)
 - [ReferenceItem](docs/Model/ReferenceItem.md)
 - [ReferencesResponse](docs/Model/ReferencesResponse.md)
 - [ResponseError](docs/Model/ResponseError.md)
 - [ResponseErrorOfTimeSheetErrors](docs/Model/ResponseErrorOfTimeSheetErrors.md)
 - [ResponseOfTimeSheetErrors](docs/Model/ResponseOfTimeSheetErrors.md)
 - [ReturnSignature](docs/Model/ReturnSignature.md)
 - [RubricValues](docs/Model/RubricValues.md)
 - [SiretQueryResult](docs/Model/SiretQueryResult.md)
 - [TimeSheet](docs/Model/TimeSheet.md)

## Documentation For Authorization

 All endpoints do not require authorization.


## Author



