# DillerAPI\NonEligibleProductsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addBatchNonEligibleProducts**](NonEligibleProductsApi.md#addbatchnoneligibleproducts) | **POST** /api/v2.0/stores/{storeId}/non-eligible-products | Add a batch of non-eligible products for a specific store, with a maximum limit of 100 products.
[**deleteNonEligibleProduct**](NonEligibleProductsApi.md#deletenoneligibleproduct) | **DELETE** /api/v2.0/stores/{storeId}/non-eligible-products/{nonEligibleProductId} | Deletes a non-eligible product.
[**getNonEligibleProducts**](NonEligibleProductsApi.md#getnoneligibleproducts) | **GET** /api/v2.0/stores/{storeId}/non-eligible-products | Gets a paginated list of non-eligible products.
[**updateBatchNonEligibleProducts**](NonEligibleProductsApi.md#updatebatchnoneligibleproducts) | **PUT** /api/v2.0/stores/{storeId}/non-eligible-products | Update a batch of non-eligible products for a specific store, with a maximum limit of 100 products.

# **addBatchNonEligibleProducts**
> \DillerAPI\Model\NonEligibleProductResponse[] addBatchNonEligibleProducts($storeId, $body)

Add a batch of non-eligible products for a specific store, with a maximum limit of 100 products.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api\NonEligibleProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | The unique identifier of the store.
$body = array(new \DillerAPI\Model\AddNonEligibleProductRequest()); // \DillerAPI\Model\AddNonEligibleProductRequest[] | The list of non-eligible products to add.

try {
    $result = $apiInstance->addBatchNonEligibleProducts($storeId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NonEligibleProductsApi->addBatchNonEligibleProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storeId** | **string**| The unique identifier of the store. |
 **body** | [**\DillerAPI\Model\AddNonEligibleProductRequest[]**](../Model/AddNonEligibleProductRequest.md)| The list of non-eligible products to add. | [optional]

### Return type

[**\DillerAPI\Model\NonEligibleProductResponse[]**](../Model/NonEligibleProductResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteNonEligibleProduct**
> \DillerAPI\Model\ActionResponse deleteNonEligibleProduct($storeId, $nonEligibleProductId)

Deletes a non-eligible product.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api\NonEligibleProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | The unique identifier of the store.
$nonEligibleProductId = 56; // int | The identifier of the non-eligible product to be deleted.

try {
    $result = $apiInstance->deleteNonEligibleProduct($storeId, $nonEligibleProductId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NonEligibleProductsApi->deleteNonEligibleProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storeId** | **string**| The unique identifier of the store. |
 **nonEligibleProductId** | **int**| The identifier of the non-eligible product to be deleted. |

### Return type

[**\DillerAPI\Model\ActionResponse**](../Model/ActionResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNonEligibleProducts**
> \DillerAPI\Model\NonEligibleProductResponsePaginatedDataResponse getNonEligibleProducts($storeId, $offset, $limit)

Gets a paginated list of non-eligible products.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api\NonEligibleProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | The unique identifier of the store.
$offset = 56; // int | The starting index of the paginated data (must be greater than or equal to 0).
$limit = 56; // int | The number of records per page (must be between 1 and 100).

try {
    $result = $apiInstance->getNonEligibleProducts($storeId, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NonEligibleProductsApi->getNonEligibleProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storeId** | **string**| The unique identifier of the store. |
 **offset** | **int**| The starting index of the paginated data (must be greater than or equal to 0). | [optional]
 **limit** | **int**| The number of records per page (must be between 1 and 100). | [optional]

### Return type

[**\DillerAPI\Model\NonEligibleProductResponsePaginatedDataResponse**](../Model/NonEligibleProductResponsePaginatedDataResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBatchNonEligibleProducts**
> \DillerAPI\Model\ActionResponse updateBatchNonEligibleProducts($storeId, $body)

Update a batch of non-eligible products for a specific store, with a maximum limit of 100 products.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api\NonEligibleProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | The unique identifier of the store.
$body = array(new \DillerAPI\Model\UpdateNonEligibleProductRequest()); // \DillerAPI\Model\UpdateNonEligibleProductRequest[] | The list of non-eligible products to update.

try {
    $result = $apiInstance->updateBatchNonEligibleProducts($storeId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NonEligibleProductsApi->updateBatchNonEligibleProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storeId** | **string**| The unique identifier of the store. |
 **body** | [**\DillerAPI\Model\UpdateNonEligibleProductRequest[]**](../Model/UpdateNonEligibleProductRequest.md)| The list of non-eligible products to update. | [optional]

### Return type

[**\DillerAPI\Model\ActionResponse**](../Model/ActionResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

