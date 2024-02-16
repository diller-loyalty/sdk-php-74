# DillerAPI\CouponsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelCouponReservation**](CouponsApi.md#cancelcouponreservation) | **POST** /api/v2.0/stores/{storeId}/members/{memberId}/coupons/{couponCode}/cancel-reservation | This endpoint should be called when a transaction is completed or cancelled to   release the coupon reservation and avoid making it unavailable for other transactions.
[**getMemberCoupons**](CouponsApi.md#getmembercoupons) | **GET** /api/v2.0/stores/{storeId}/members/{memberId}/coupons | This endpoint retrieves available coupons for a specific member.
[**getStoreCoupons**](CouponsApi.md#getstorecoupons) | **GET** /api/v2.0/stores/{storeId}/coupons | Retrieves store coupons. By default it only retrieves active coupons.
[**reserveCoupon**](CouponsApi.md#reservecoupon) | **POST** /api/v2.0/stores/{storeId}/members/{memberId}/coupons/{couponCode}/reserve | This endpoint enables users to reserve a coupon for their pending orders,   thereby ensuring that the coupon cannot be used for any other transactions.
[**validateCoupon**](CouponsApi.md#validatecoupon) | **GET** /api/v2.0/stores/{storeId}/members/{memberId}/coupons/{couponCode}/validate | This endpoint validates a coupon code for a specific member.

# **cancelCouponReservation**
> \DillerAPI\Model\ActionResponse cancelCouponReservation($storeId, $memberId, $couponCode, $body)

This endpoint should be called when a transaction is completed or cancelled to   release the coupon reservation and avoid making it unavailable for other transactions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api\CouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | 
$memberId = "memberId_example"; // string | 
$couponCode = "couponCode_example"; // string | 
$body = new \DillerAPI\Model\CouponCancelReservationRequest(); // \DillerAPI\Model\CouponCancelReservationRequest | 

try {
    $result = $apiInstance->cancelCouponReservation($storeId, $memberId, $couponCode, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponsApi->cancelCouponReservation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storeId** | **string**|  |
 **memberId** | **string**|  |
 **couponCode** | **string**|  |
 **body** | [**\DillerAPI\Model\CouponCancelReservationRequest**](../Model/CouponCancelReservationRequest.md)|  | [optional]

### Return type

[**\DillerAPI\Model\ActionResponse**](../Model/ActionResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMemberCoupons**
> \DillerAPI\Model\MemberCouponResponse[] getMemberCoupons($storeId, $memberId)

This endpoint retrieves available coupons for a specific member.

All other coupons that are not applicable to the follower, will not be returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api\CouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | 
$memberId = "memberId_example"; // string | 

try {
    $result = $apiInstance->getMemberCoupons($storeId, $memberId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponsApi->getMemberCoupons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storeId** | **string**|  |
 **memberId** | **string**|  |

### Return type

[**\DillerAPI\Model\MemberCouponResponse[]**](../Model/MemberCouponResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoreCoupons**
> \DillerAPI\Model\StoreCouponResponse[] getStoreCoupons($storeId, $alsoInactive)

Retrieves store coupons. By default it only retrieves active coupons.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api\CouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | The store Id
$alsoInactive = true; // bool | When true, it also return coupons that are not currently valid.

try {
    $result = $apiInstance->getStoreCoupons($storeId, $alsoInactive);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponsApi->getStoreCoupons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storeId** | **string**| The store Id |
 **alsoInactive** | **bool**| When true, it also return coupons that are not currently valid. | [optional]

### Return type

[**\DillerAPI\Model\StoreCouponResponse[]**](../Model/StoreCouponResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reserveCoupon**
> \DillerAPI\Model\ActionResponse reserveCoupon($storeId, $memberId, $couponCode, $body)

This endpoint enables users to reserve a coupon for their pending orders,   thereby ensuring that the coupon cannot be used for any other transactions.

Call the /cancel-reservation endpoint after completing or cancelling a transaction to release the               coupon reservation and make it available for other transactions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api\CouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | The storeId
$memberId = "memberId_example"; // string | The memberId
$couponCode = "couponCode_example"; // string | The coupon code
$body = new \DillerAPI\Model\CouponReservationRequest(); // \DillerAPI\Model\CouponReservationRequest | Details of the coupon reservation request

try {
    $result = $apiInstance->reserveCoupon($storeId, $memberId, $couponCode, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponsApi->reserveCoupon: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storeId** | **string**| The storeId |
 **memberId** | **string**| The memberId |
 **couponCode** | **string**| The coupon code |
 **body** | [**\DillerAPI\Model\CouponReservationRequest**](../Model/CouponReservationRequest.md)| Details of the coupon reservation request | [optional]

### Return type

[**\DillerAPI\Model\ActionResponse**](../Model/ActionResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validateCoupon**
> \DillerAPI\Model\ActionResponse validateCoupon($storeId, $memberId, $couponCode)

This endpoint validates a coupon code for a specific member.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api\CouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | The store id
$memberId = "memberId_example"; // string | The member id
$couponCode = "couponCode_example"; // string | The coupon code

try {
    $result = $apiInstance->validateCoupon($storeId, $memberId, $couponCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponsApi->validateCoupon: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storeId** | **string**| The store id |
 **memberId** | **string**| The member id |
 **couponCode** | **string**| The coupon code |

### Return type

[**\DillerAPI\Model\ActionResponse**](../Model/ActionResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

