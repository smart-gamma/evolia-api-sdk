# Evolia\PayrollApi

All URIs are relative to *https://virtserver.swaggerhub.com/smartgammadev/Evolia/1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**payrollsGet**](PayrollApi.md#payrollsGet) | **GET** /payrolls | Get Payrolls by date range
[**payrollsPayrollIdGet**](PayrollApi.md#payrollsPayrollIdGet) | **GET** /payrolls/{payrollId} | Get Payroll by it&#x27;s id

# **payrollsGet**
> \Evolia\Model\PayrollViewModel payrollsGet($startDate, $endDate)

Get Payrolls by date range

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evolia\SDK\PayrollApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startDate = "startDate_example"; // string | 
$endDate = "endDate_example"; // string | 

try {
    $result = $apiInstance->payrollsGet($startDate, $endDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollApi->payrollsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startDate** | **string**|  |
 **endDate** | **string**|  |

### Return type

[**\Evolia\Model\PayrollViewModel**](../Model/PayrollViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payrollsPayrollIdGet**
> \Evolia\Model\PayrollViewModelList payrollsPayrollIdGet($payrollId)

Get Payroll by it's id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evolia\SDK\PayrollApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$payrollId = 56; // int | Payroll Evolia identifier

try {
    $result = $apiInstance->payrollsPayrollIdGet($payrollId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollApi->payrollsPayrollIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payrollId** | **int**| Payroll Evolia identifier |

### Return type

[**\Evolia\Model\PayrollViewModelList**](../Model/PayrollViewModelList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

