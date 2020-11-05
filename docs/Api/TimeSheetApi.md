# Evolia\TimeSheetApi

All URIs are relative to *https://virtserver.swaggerhub.com/smartgammadev/Evolia/1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**timeSheetAddTimeSheetApi**](TimeSheetApi.md#timesheetaddtimesheetapi) | **POST** /api/TimeSheet | 

# **timeSheetAddTimeSheetApi**
> \Evolia\Model\ResponseOfTimeSheetErrors timeSheetAddTimeSheetApi($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evolia\SDK\TimeSheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Evolia\Model\TimeSheet(); // \Evolia\Model\TimeSheet | 

try {
    $result = $apiInstance->timeSheetAddTimeSheetApi($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeSheetApi->timeSheetAddTimeSheetApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Evolia\Model\TimeSheet**](../Model/TimeSheet.md)|  |

### Return type

[**\Evolia\Model\ResponseOfTimeSheetErrors**](../Model/ResponseOfTimeSheetErrors.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

