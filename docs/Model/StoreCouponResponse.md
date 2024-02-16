# StoreCouponResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**externalIds** | [**\DillerAPI\Model\ExternalCouponIdentifier[]**](ExternalCouponIdentifier.md) |  | [optional] 
**code** | **string** |  | 
**title** | **string** |  | 
**description** | **string** |  | [optional] 
**articleNumber** | **string** |  | [optional] 
**validFrom** | [**\DateTime**](\DateTime.md) | The startDate of the coupon | 
**validTo** | [**\DateTime**](\DateTime.md) |  | 
**type** | [**\DillerAPI\Model\CouponType**](CouponType.md) |  | 
**discountType** | [**\DillerAPI\Model\CouponDiscountType**](CouponDiscountType.md) |  | [optional] 
**discountValue** | **double** |  | [optional] 
**maxRedemptions** | **int** |  | [optional] 
**imageUrl** | **string** |  | [optional] 
**productIds** | **string[]** |  | [optional] 
**target** | [**\DillerAPI\Model\CouponTarget**](CouponTarget.md) |  | [optional] 
**usageExtensionInDays** | **int** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

