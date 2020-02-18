# Evolia\ImportApi

All URIs are relative to *https://virtserver.swaggerhub.com/smartgammadev/Evolia/1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addCandidatApi**](ImportApi.md#addcandidatapi) | **POST** /api/candidate | 
[**addClientApi**](ImportApi.md#addclientapi) | **POST** /api/customer | 
[**addContractApi**](ImportApi.md#addcontractapi) | **POST** /api/contract | 
[**addContractHoursApi**](ImportApi.md#addcontracthoursapi) | **POST** /Contract/AddContractHoursApi | 
[**getAccessToken**](ImportApi.md#getaccesstoken) | **POST** /GetAccessToken | 

# **addCandidatApi**
> \Evolia\Model\CandidateResponseStatus addCandidatApi($body, $authorization)



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
$authorization = "authorization_example"; // string | 

try {
    $result = $apiInstance->addCandidatApi($body, $authorization);
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
 **authorization** | **string**|  |

### Return type

[**\Evolia\Model\CandidateResponseStatus**](../Model/CandidateResponseStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addClientApi**
> \Evolia\Model\CustomerResponseStatus addClientApi($body, $authorization)



Import of Customers

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
$authorization = "authorization_example"; // string | 

try {
    $result = $apiInstance->addClientApi($body, $authorization);
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
 **authorization** | **string**|  |

### Return type

[**\Evolia\Model\CustomerResponseStatus**](../Model/CustomerResponseStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addContractApi**
> \Evolia\Model\ContractResponseStatus addContractApi($body, $authorization)



Import of Contracts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evolia\SDK\ImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Evolia\Model\Contract(); // \Evolia\Model\Contract | 
$authorization = "authorization_example"; // string | 

try {
    $result = $apiInstance->addContractApi($body, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportApi->addContractApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Evolia\Model\Contract**](../Model/Contract.md)|  |
 **authorization** | **string**|  |

### Return type

[**\Evolia\Model\ContractResponseStatus**](../Model/ContractResponseStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addContractHoursApi**
> \Evolia\Model\ContractHoursResponseStatus addContractHoursApi($body)



Import of Contract hours validated

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evolia\SDK\ImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Evolia\Model\ContractHours(); // \Evolia\Model\ContractHours | 

try {
    $result = $apiInstance->addContractHoursApi($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportApi->addContractHoursApi: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Evolia\Model\ContractHours**](../Model/ContractHours.md)|  |

### Return type

[**\Evolia\Model\ContractHoursResponseStatus**](../Model/ContractHoursResponseStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccessToken**
> \Evolia\Model\AuthResponse getAccessToken($body)



Get Access Token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Evolia\SDK\ImportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Evolia\Model\AuthRequest(); // \Evolia\Model\AuthRequest | 

try {
    $result = $apiInstance->getAccessToken($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportApi->getAccessToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Evolia\Model\AuthRequest**](../Model/AuthRequest.md)|  |

### Return type

[**\Evolia\Model\AuthResponse**](../Model/AuthResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

