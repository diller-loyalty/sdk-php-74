# DillerAPI\StoresApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDepartment**](StoresApi.md#createdepartment) | **POST** /api/v2.0/stores/{storeId}/departments | Add store department
[**get**](StoresApi.md#get) | **GET** /api/v2.0/stores/{storeId} | Gets store
[**getAll**](StoresApi.md#getall) | **GET** /api/v2.0/stores | Get all stores that the client has access to
[**getDepartments**](StoresApi.md#getdepartments) | **GET** /api/v2.0/stores/{storeId}/departments | Get store departments
[**getSegments**](StoresApi.md#getsegments) | **GET** /api/v2.0/stores/{storeId}/segments | Retrieves all store&#x27;s segments

# **createDepartment**
> \DillerAPI\Model\StoreDepartmentResponse[] createDepartment($storeId, $body)

Add store department

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | The store id
$body = new \DillerAPI\Model\CreateDepartmentRequest(); // \DillerAPI\Model\CreateDepartmentRequest | 

try {
    $result = $apiInstance->createDepartment($storeId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->createDepartment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storeId** | **string**| The store id |
 **body** | [**\DillerAPI\Model\CreateDepartmentRequest**](../Model/CreateDepartmentRequest.md)|  | [optional]

### Return type

[**\DillerAPI\Model\StoreDepartmentResponse[]**](../Model/StoreDepartmentResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **get**
> \DillerAPI\Model\StoreResponse get($storeId)

Gets store

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | The id of the store

try {
    $result = $apiInstance->get($storeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storeId** | **string**| The id of the store |

### Return type

[**\DillerAPI\Model\StoreResponse**](../Model/StoreResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAll**
> \DillerAPI\Model\StoreResponse[] getAll()

Get all stores that the client has access to

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAll();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->getAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\DillerAPI\Model\StoreResponse[]**](../Model/StoreResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDepartments**
> \DillerAPI\Model\StoreDepartmentResponse[] getDepartments($storeId)

Get store departments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | The store id

try {
    $result = $apiInstance->getDepartments($storeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->getDepartments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storeId** | **string**| The store id |

### Return type

[**\DillerAPI\Model\StoreDepartmentResponse[]**](../Model/StoreDepartmentResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSegments**
> \DillerAPI\Model\StoreSegmentResponse[] getSegments($storeId)

Retrieves all store's segments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api\StoresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | The Id of the store

try {
    $result = $apiInstance->getSegments($storeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->getSegments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storeId** | **string**| The Id of the store |

### Return type

[**\DillerAPI\Model\StoreSegmentResponse[]**](../Model/StoreSegmentResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

