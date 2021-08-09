# Evolia\ReferencesApi

All URIs are relative to *https://virtserver.swaggerhub.com/smartgammadev/Evolia/1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getReferences**](ReferencesApi.md#getreferences) | **GET** /api/v3/References/List | Get all the references from the database

# **getReferences**
> \Evolia\Model\ReferencesResponse getReferences($authorization)

Get all the references from the database

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evolia\SDK\ReferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | 

try {
    $result = $apiInstance->getReferences($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferencesApi->getReferences: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**|  |

### Return type

[**\Evolia\Model\ReferencesResponse**](../Model/ReferencesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

