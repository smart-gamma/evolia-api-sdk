# Evolia\ImportApi

All URIs are relative to *https://virtserver.swaggerhub.com/smartgammadev/Evolia/1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addCandidatApi**](ImportApi.md#addCandidatApi) | **POST** /TroopsEvolia/api/Candidate/AddCandidatApi | 
[**addClientApi**](ImportApi.md#addClientApi) | **POST** /TroopsEvolia/api/Customer/AddClientApi | 

# **addCandidatApi**
> \Evolia\Model\CandidateResponseStatus addCandidatApi($body)



Import of Candidates

### Example
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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Evolia\Model\Candidate**](../Model/Candidate.md)|  |

### Return type

[**\Evolia\Model\CandidateResponseStatus**](../Model/CandidateResponseStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addClientApi**
> \Evolia\Model\CustomerResponseStatus addClientApi($body)



Import of Clients

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Evolia\Model\Customer**](../Model/Customer.md)|  |

### Return type

[**\Evolia\Model\CustomerResponseStatus**](../Model/CustomerResponseStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

