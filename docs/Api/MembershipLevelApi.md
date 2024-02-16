# DillerAPI\MembershipLevelApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getStoreMembershipLevel**](MembershipLevelApi.md#getstoremembershiplevel) | **GET** /api/v2.0/stores/{storeId}/membership-level | Retrieve store membership level information

# **getStoreMembershipLevel**
> \DillerAPI\Model\StoreMembershipLevelResponse[] getStoreMembershipLevel($storeId)

Retrieve store membership level information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api\MembershipLevelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | The store id

try {
    $result = $apiInstance->getStoreMembershipLevel($storeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipLevelApi->getStoreMembershipLevel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storeId** | **string**| The store id |

### Return type

[**\DillerAPI\Model\StoreMembershipLevelResponse[]**](../Model/StoreMembershipLevelResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

