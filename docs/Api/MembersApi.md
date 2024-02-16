# DillerAPI\MembersApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteMember**](MembersApi.md#deletemember) | **DELETE** /api/v2.0/stores/{storeId}/members/{memberId} | This endpoint deletes a member.  Note that while the member may not be immediately removed from the system,  they will be marked for deletion and permanently removed after a period of 10 days.
[**enrollMember**](MembersApi.md#enrollmember) | **POST** /api/v2.0/stores/{storeId}/members/enroll | Enrolls a member into the Loyalty Program.  This will create a new member in the system and send an activation link via SMS to the member.  If the member already exists, and GDPR is not accepted yet then a new activation link will be sent.  If the store does not have SMS enabled, the activation link will be sent by email.
[**getDependents**](MembersApi.md#getdependents) | **GET** /api/v2.0/stores/{storeId}/members/{memberId}/dependents | Retrieves a member&#x27;s dependents
[**getMemberByFilter**](MembersApi.md#getmemberbyfilter) | **GET** /api/v2.0/stores/{storeId}/members/search | Searchs members by email, phone number, activation token or any other identifier (country dependant - eg. SSN, licence plate, National ID)
[**getMemberById**](MembersApi.md#getmemberbyid) | **GET** /api/v2.0/stores/{storeId}/members/{memberId} | Get member by id
[**getWidgetProfile**](MembersApi.md#getwidgetprofile) | **GET** /api/v2.0/stores/{storeId}/members/{memberId}/widgets/profile | Get member widget details
[**loginOTP**](MembersApi.md#loginotp) | **POST** /api/v2.0/stores/{storeId}/members/{memberId}/login-otp | Sends a login OTP code that allows the member to login without the password.
[**loginOtpVerification**](MembersApi.md#loginotpverification) | **POST** /api/v2.0/stores/{storeId}/members/{memberId}/login-otp-verification | Handles the verification of a One-Time Password (OTP) code during the login process.
[**registerMember**](MembersApi.md#registermember) | **POST** /api/v2.0/stores/{storeId}/members | Adds a new member to the store.  This will create a new member and automatically add him to the Loyalty Program, followed by a welcome SMS.  If the store is not configured to send SMS, a welcome email is sent instead.
[**resetPhone**](MembersApi.md#resetphone) | **POST** /api/v2.0/stores/{storeId}/members/{memberId}/reset-phone | Initiates the process of resetting or changing the member&#x27;s phone number.
[**resetPhoneVerification**](MembersApi.md#resetphoneverification) | **POST** /api/v2.0/stores/{storeId}/members/{memberId}/reset-phone-verification | Finishes the process of resetting or changing the member&#x27;s phone number.
[**updateDependents**](MembersApi.md#updatedependents) | **POST** /api/v2.0/stores/{storeId}/members/{memberId}/dependents | Atomically add, update, or delete dependent objects. The dependent collection should represent all members&#x27; dependents.  To add a new dependent, set the id field to 0.  To update a dependent, send the entire dependent object.  To delete a dependent, remove it from the list.
[**updateMember**](MembersApi.md#updatemember) | **PUT** /api/v2.0/stores/{storeId}/members/{memberId} | Updates the member&#x27;s data that is on the payload.

# **deleteMember**
> \DillerAPI\Model\ActionResponse deleteMember($storeId, $memberId)

This endpoint deletes a member.  Note that while the member may not be immediately removed from the system,  they will be marked for deletion and permanently removed after a period of 10 days.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | The store id
$memberId = "memberId_example"; // string | The member id

try {
    $result = $apiInstance->deleteMember($storeId, $memberId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->deleteMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storeId** | **string**| The store id |
 **memberId** | **string**| The member id |

### Return type

[**\DillerAPI\Model\ActionResponse**](../Model/ActionResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enrollMember**
> \DillerAPI\Model\MemberResponse enrollMember($storeId, $body)

Enrolls a member into the Loyalty Program.  This will create a new member in the system and send an activation link via SMS to the member.  If the member already exists, and GDPR is not accepted yet then a new activation link will be sent.  If the store does not have SMS enabled, the activation link will be sent by email.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | 
$body = new \DillerAPI\Model\EnrollMemberRequest(); // \DillerAPI\Model\EnrollMemberRequest | 

try {
    $result = $apiInstance->enrollMember($storeId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->enrollMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storeId** | **string**|  |
 **body** | [**\DillerAPI\Model\EnrollMemberRequest**](../Model/EnrollMemberRequest.md)|  | [optional]

### Return type

[**\DillerAPI\Model\MemberResponse**](../Model/MemberResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDependents**
> \DillerAPI\Model\Dependent[] getDependents($storeId, $memberId)

Retrieves a member's dependents

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | The Store id
$memberId = "memberId_example"; // string | The member id

try {
    $result = $apiInstance->getDependents($storeId, $memberId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->getDependents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storeId** | **string**| The Store id |
 **memberId** | **string**| The member id |

### Return type

[**\DillerAPI\Model\Dependent[]**](../Model/Dependent.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMemberByFilter**
> \DillerAPI\Model\MemberResponse[] getMemberByFilter($storeId, $email, $phone, $identifierValue, $activationToken)

Searchs members by email, phone number, activation token or any other identifier (country dependant - eg. SSN, licence plate, National ID)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | The member's store id
$email = "email_example"; // string | Email Address of the member
$phone = "phone_example"; // string | The phone number can be entered in international format, starting with either \"00\" or \"+\".              If the phone number is entered in national format, it will be assumed that the number belongs              to the same country as the store
$identifierValue = "identifierValue_example"; // string | The extra identifier of a member defined at the store level.
$activationToken = "activationToken_example"; // string | The token value for when a member signed up via POS or any other source, that requires an activation step.

try {
    $result = $apiInstance->getMemberByFilter($storeId, $email, $phone, $identifierValue, $activationToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->getMemberByFilter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storeId** | **string**| The member&#x27;s store id |
 **email** | **string**| Email Address of the member | [optional]
 **phone** | **string**| The phone number can be entered in international format, starting with either \&quot;00\&quot; or \&quot;+\&quot;.              If the phone number is entered in national format, it will be assumed that the number belongs              to the same country as the store | [optional]
 **identifierValue** | **string**| The extra identifier of a member defined at the store level. | [optional]
 **activationToken** | **string**| The token value for when a member signed up via POS or any other source, that requires an activation step. | [optional]

### Return type

[**\DillerAPI\Model\MemberResponse[]**](../Model/MemberResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMemberById**
> \DillerAPI\Model\MemberResponse getMemberById($storeId, $memberId)

Get member by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | The id of the store
$memberId = "memberId_example"; // string | The member Id

try {
    $result = $apiInstance->getMemberById($storeId, $memberId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->getMemberById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storeId** | **string**| The id of the store |
 **memberId** | **string**| The member Id |

### Return type

[**\DillerAPI\Model\MemberResponse**](../Model/MemberResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWidgetProfile**
> \DillerAPI\Model\MemberProfileWidgetResponse getWidgetProfile($storeId, $memberId)

Get member widget details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | 
$memberId = "memberId_example"; // string | The id of the member

try {
    $result = $apiInstance->getWidgetProfile($storeId, $memberId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->getWidgetProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storeId** | **string**|  |
 **memberId** | **string**| The id of the member |

### Return type

[**\DillerAPI\Model\MemberProfileWidgetResponse**](../Model/MemberProfileWidgetResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **loginOTP**
> \DillerAPI\Model\ActionResponse loginOTP($storeId, $memberId)

Sends a login OTP code that allows the member to login without the password.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | The store Id
$memberId = "memberId_example"; // string | The member Id

try {
    $result = $apiInstance->loginOTP($storeId, $memberId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->loginOTP: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storeId** | **string**| The store Id |
 **memberId** | **string**| The member Id |

### Return type

[**\DillerAPI\Model\ActionResponse**](../Model/ActionResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **loginOtpVerification**
> \DillerAPI\Model\ActionResponse loginOtpVerification($storeId, $memberId, $body)

Handles the verification of a One-Time Password (OTP) code during the login process.

Successful verification of the OTP code grants the user access to the application

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | The store Id
$memberId = "memberId_example"; // string | The member Id
$body = new \DillerAPI\Model\LoginOtpVerificationRequest(); // \DillerAPI\Model\LoginOtpVerificationRequest | Otp code generated previously using the endpoint /login-otp

try {
    $result = $apiInstance->loginOtpVerification($storeId, $memberId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->loginOtpVerification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storeId** | **string**| The store Id |
 **memberId** | **string**| The member Id |
 **body** | [**\DillerAPI\Model\LoginOtpVerificationRequest**](../Model/LoginOtpVerificationRequest.md)| Otp code generated previously using the endpoint /login-otp | [optional]

### Return type

[**\DillerAPI\Model\ActionResponse**](../Model/ActionResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registerMember**
> \DillerAPI\Model\MemberResponse registerMember($storeId, $body)

Adds a new member to the store.  This will create a new member and automatically add him to the Loyalty Program, followed by a welcome SMS.  If the store is not configured to send SMS, a welcome email is sent instead.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | The store id
$body = new \DillerAPI\Model\RegisterMemberRequest(); // \DillerAPI\Model\RegisterMemberRequest | 

try {
    $result = $apiInstance->registerMember($storeId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->registerMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storeId** | **string**| The store id |
 **body** | [**\DillerAPI\Model\RegisterMemberRequest**](../Model/RegisterMemberRequest.md)|  | [optional]

### Return type

[**\DillerAPI\Model\MemberResponse**](../Model/MemberResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resetPhone**
> \DillerAPI\Model\ActionResponse resetPhone($storeId, $memberId, $body)

Initiates the process of resetting or changing the member's phone number.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | The store Id
$memberId = "memberId_example"; // string | The member Id
$body = new \DillerAPI\Model\Phone(); // \DillerAPI\Model\Phone | The new phone number using the international format

try {
    $result = $apiInstance->resetPhone($storeId, $memberId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->resetPhone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storeId** | **string**| The store Id |
 **memberId** | **string**| The member Id |
 **body** | [**\DillerAPI\Model\Phone**](../Model/Phone.md)| The new phone number using the international format | [optional]

### Return type

[**\DillerAPI\Model\ActionResponse**](../Model/ActionResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resetPhoneVerification**
> \DillerAPI\Model\ActionResponse resetPhoneVerification($storeId, $memberId, $body)

Finishes the process of resetting or changing the member's phone number.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | The store Id
$memberId = "memberId_example"; // string | The member Id
$body = new \DillerAPI\Model\ResetPhoneVerificationRequest(); // \DillerAPI\Model\ResetPhoneVerificationRequest | The new phone number using the international format

try {
    $result = $apiInstance->resetPhoneVerification($storeId, $memberId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->resetPhoneVerification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storeId** | **string**| The store Id |
 **memberId** | **string**| The member Id |
 **body** | [**\DillerAPI\Model\ResetPhoneVerificationRequest**](../Model/ResetPhoneVerificationRequest.md)| The new phone number using the international format | [optional]

### Return type

[**\DillerAPI\Model\ActionResponse**](../Model/ActionResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDependents**
> updateDependents($storeId, $memberId, $body)

Atomically add, update, or delete dependent objects. The dependent collection should represent all members' dependents.  To add a new dependent, set the id field to 0.  To update a dependent, send the entire dependent object.  To delete a dependent, remove it from the list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | The Store Id
$memberId = "memberId_example"; // string | The Member Id
$body = array(new \DillerAPI\Model\Dependent()); // \DillerAPI\Model\Dependent[] | A collection of dependents

try {
    $apiInstance->updateDependents($storeId, $memberId, $body);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->updateDependents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storeId** | **string**| The Store Id |
 **memberId** | **string**| The Member Id |
 **body** | [**\DillerAPI\Model\Dependent[]**](../Model/Dependent.md)| A collection of dependents | [optional]

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMember**
> \DillerAPI\Model\MemberResponse updateMember($storeId, $memberId, $body)

Updates the member's data that is on the payload.

Each request payload must include all data, even if it does not differ from what was previously inserted.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | The store id
$memberId = "memberId_example"; // string | The member id
$body = new \DillerAPI\Model\UpdateMemberRequest(); // \DillerAPI\Model\UpdateMemberRequest | 

try {
    $result = $apiInstance->updateMember($storeId, $memberId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->updateMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storeId** | **string**| The store id |
 **memberId** | **string**| The member id |
 **body** | [**\DillerAPI\Model\UpdateMemberRequest**](../Model/UpdateMemberRequest.md)|  | [optional]

### Return type

[**\DillerAPI\Model\MemberResponse**](../Model/MemberResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

