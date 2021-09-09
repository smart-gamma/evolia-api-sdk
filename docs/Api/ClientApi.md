# Evolia\ClientApi

All URIs are relative to *https://virtserver.swaggerhub.com/smartgammadev/Evolia/1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**searchClient**](ClientApi.md#searchclient) | **GET** /api/v3/client/{registrationNumber}/{agencyId} | This endpoint is used to search the siret in the DB from the NIC and the Siret

# **searchClient**
> \Evolia\Model\SiretQueryResult[] searchClient($registrationNumber, $agencyId)

This endpoint is used to search the siret in the DB from the NIC and the Siret

### Example
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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registrationNumber** | **string**|  |
 **agencyId** | **string**|  |

### Return type

[**\Evolia\Model\SiretQueryResult[]**](../Model/SiretQueryResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

