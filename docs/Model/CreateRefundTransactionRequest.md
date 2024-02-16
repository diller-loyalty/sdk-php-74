# CreateRefundTransactionRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reason** | **string** |  | [optional] 
**externalId** | **string** | The store&#x27;s transaction unique identifier. Eg. Order-1234 | [optional] 
**createdAt** | [**\DateTime**](\DateTime.md) | The date and time the transaction was created in ISO 8601 format. | [optional] 
**paymentDetails** | [**\DillerAPI\Model\PaymentDetails[]**](PaymentDetails.md) |  | [optional] 
**eftPos** | **string** | Electronic funds transfer at point of sale | [optional] 
**total** | **double** | Total amount paid by the customer, after discounts and taxes | [optional] 
**totalTax** | **double** | Total amount of taxes paid | [optional] 
**totalDiscount** | **double** | Discount amount applied to this purchase | [optional] 
**currency** | **string** |  | [optional] 
**roundOffAmount** | **double** | Stores the specific value used for rounding calculations | [optional] 
**origin** | [**\DillerAPI\Model\Origin**](Origin.md) |  | [optional] 
**details** | [**\DillerAPI\Model\RefundDetailRequest[]**](RefundDetailRequest.md) |  | [optional] 
**departmentId** | **string** | The Id assigned by the retailer | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

