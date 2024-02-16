# DillerAPI\StampCardsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelStampReservation**](StampCardsApi.md#cancelstampreservation) | **POST** /api/v2.0/stores/{storeId}/members/{memberId}/stamp-cards/{stampId}/cancel-reservation | The endpoint /cancel-reservation should be called when a transaction is completed or cancelled to  release the stamp reservation and avoid making it unavailable for other transactions.
[**getMemberStampCards**](StampCardsApi.md#getmemberstampcards) | **GET** /api/v2.0/stores/{storeId}/members/{memberId}/stamp-cards | Get member active stamp cards
[**getStoreStamps**](StampCardsApi.md#getstorestamps) | **GET** /api/v2.0/stores/{storeId}/stamp-cards | Retrieves store stamp cards. By default it only retrieves active stamp cards.
[**reserveStamp**](StampCardsApi.md#reservestamp) | **POST** /api/v2.0/stores/{storeId}/members/{memberId}/stamp-cards/{stampId}/reserve | This endpoint enables users to reserve a stamp for their pending orders,  thereby ensuring that the stamp cannot be used for any other transactions.

# **cancelStampReservation**
> \DillerAPI\Model\ActionResponse cancelStampReservation($storeId, $memberId, $stampId, $body)

The endpoint /cancel-reservation should be called when a transaction is completed or cancelled to  release the stamp reservation and avoid making it unavailable for other transactions.

If the transaction has multiple stamps with the same Id, all of them will be released

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api\StampCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | The store Id
$memberId = "memberId_example"; // string | The member Id
$stampId = 56; // int | The stamp Id to cancel the reservation
$body = new \DillerAPI\Model\CouponCancelReservationRequest(); // \DillerAPI\Model\CouponCancelReservationRequest | 

try {
    $result = $apiInstance->cancelStampReservation($storeId, $memberId, $stampId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StampCardsApi->cancelStampReservation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storeId** | **string**| The store Id |
 **memberId** | **string**| The member Id |
 **stampId** | **int**| The stamp Id to cancel the reservation |
 **body** | [**\DillerAPI\Model\CouponCancelReservationRequest**](../Model/CouponCancelReservationRequest.md)|  | [optional]

### Return type

[**\DillerAPI\Model\ActionResponse**](../Model/ActionResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMemberStampCards**
> \DillerAPI\Model\MemberStampCard[] getMemberStampCards($storeId, $memberId)

Get member active stamp cards

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api\StampCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | The store id
$memberId = "memberId_example"; // string | 

try {
    $result = $apiInstance->getMemberStampCards($storeId, $memberId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StampCardsApi->getMemberStampCards: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storeId** | **string**| The store id |
 **memberId** | **string**|  |

### Return type

[**\DillerAPI\Model\MemberStampCard[]**](../Model/MemberStampCard.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoreStamps**
> \DillerAPI\Model\StoreStampCardResponse[] getStoreStamps($storeId, $alsoInactive)

Retrieves store stamp cards. By default it only retrieves active stamp cards.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api\StampCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | The store id
$alsoInactive = true; // bool | When true, it also return stamp cards that are not currently valid.

try {
    $result = $apiInstance->getStoreStamps($storeId, $alsoInactive);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StampCardsApi->getStoreStamps: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storeId** | **string**| The store id |
 **alsoInactive** | **bool**| When true, it also return stamp cards that are not currently valid. | [optional]

### Return type

[**\DillerAPI\Model\StoreStampCardResponse[]**](../Model/StoreStampCardResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reserveStamp**
> \DillerAPI\Model\ActionResponse reserveStamp($storeId, $memberId, $stampId, $body)

This endpoint enables users to reserve a stamp for their pending orders,  thereby ensuring that the stamp cannot be used for any other transactions.

Call the /cancel-reservation endpoint after completing or cancelling a transaction to release the              stamp reservation and make it available for other transactions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api\StampCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | The storeId
$memberId = "memberId_example"; // string | The memberId
$stampId = 56; // int | The stam id
$body = new \DillerAPI\Model\StampReservationRequest(); // \DillerAPI\Model\StampReservationRequest | Details of the coupon reservation request

try {
    $result = $apiInstance->reserveStamp($storeId, $memberId, $stampId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StampCardsApi->reserveStamp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storeId** | **string**| The storeId |
 **memberId** | **string**| The memberId |
 **stampId** | **int**| The stam id |
 **body** | [**\DillerAPI\Model\StampReservationRequest**](../Model/StampReservationRequest.md)| Details of the coupon reservation request | [optional]

### Return type

[**\DillerAPI\Model\ActionResponse**](../Model/ActionResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

