# DillerAPI\InvitationsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getInvitedFriends**](InvitationsApi.md#getinvitedfriends) | **GET** /api/v2.0/stores/{storeId}/members/{memberId}/invited-friends | Returns a list of all invited friends
[**getReferrals**](InvitationsApi.md#getreferrals) | **GET** /api/v2.0/stores/{storeId}/members/{memberId}/invited-friend | Returns an invited friend by invitation token

# **getInvitedFriends**
> \DillerAPI\Model\InvitedFriendResponse[] getInvitedFriends($storeId, $memberId)

Returns a list of all invited friends

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api\InvitationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | The store Id
$memberId = "memberId_example"; // string | The member Id

try {
    $result = $apiInstance->getInvitedFriends($storeId, $memberId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvitationsApi->getInvitedFriends: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storeId** | **string**| The store Id |
 **memberId** | **string**| The member Id |

### Return type

[**\DillerAPI\Model\InvitedFriendResponse[]**](../Model/InvitedFriendResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReferrals**
> \DillerAPI\Model\InvitedFriendResponse[] getReferrals($storeId, $memberId, $invitationToken)

Returns an invited friend by invitation token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api\InvitationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | The store Id
$memberId = "memberId_example"; // string | The member Id
$invitationToken = "invitationToken_example"; // string | The invitation token

try {
    $result = $apiInstance->getReferrals($storeId, $memberId, $invitationToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvitationsApi->getReferrals: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storeId** | **string**| The store Id |
 **memberId** | **string**| The member Id |
 **invitationToken** | **string**| The invitation token | [optional]

### Return type

[**\DillerAPI\Model\InvitedFriendResponse[]**](../Model/InvitedFriendResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

